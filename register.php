<?php
// Include the database connection
include 'includes/db_connection.php';

// Initialize variables for form inputs
$name = $email = $language = '';
$success = '';
$error = '';

// Check if the form is submitted
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['language'])) {
    // Assign POST variables
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $language = isset($_POST['language']) ? trim($_POST['language']) : '';

    // Validate inputs
    if (empty($name) || empty($email) || empty($language)) {
        $error = "All fields are required.";
    } else {
        try {
            // Using the database connection to insert data
            $sql = "INSERT INTO students (name, email, programming_language) VALUES (:name, :email, :language)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':language', $language);

            if ($stmt->execute()) {
                $success = "Registration successful!";
                $name = $email = $language = ''; // Clear form fields after successful submission
            } else {
                $error = "Failed to register. Please try again.";
            }
        } catch (PDOException $e) {
            $error = "Failed to register: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register for the Competition | HappyU Programming Competition</title>
    <link rel="stylesheet" href="css/styles.css" /> <!-- Link to external CSS -->
</head>

<body>
    <!-- Include Header -->
    <?php include 'includes/header.php'; ?>

    <!-- Registration Form Section -->
    <main class="register-form fade-in">
        <h2>Register for the Competition</h2>

        <!-- Display success or error message -->
        <?php if ($error): ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>

        <form action="register.php" method="POST">
            <div class="form-group">
                <input type="text" name="name" required placeholder=" " id="name" value="<?php echo htmlspecialchars($name); ?>" />
                <label for="name">Name</label>
            </div>

            <div class="form-group">
                <input type="email" name="email" required placeholder=" " id="email" value="<?php echo htmlspecialchars($email); ?>" />
                <label for="email">Email</label>
            </div>

            <div class="form-group">
                <select name="language" id="language" required>
                    <option value="" disabled <?php echo empty($language) ? 'selected' : ''; ?>>Select your programming language</option>
                    <option value="python" <?php echo $language === 'python' ? 'selected' : ''; ?>>Python</option>
                    <option value="java" <?php echo $language === 'java' ? 'selected' : ''; ?>>Java</option>
                    <option value="c++" <?php echo $language === 'c++' ? 'selected' : ''; ?>>C++</option>
                </select>
            </div>

            <input type="submit" class="btn">
        </form>
    </main>

    <!-- Include Footer -->
    <?php include 'includes/footer.php'; ?>

    <script src="js/script.js"></script> <!-- Link to your external JavaScript file -->
</body>

</html>