<?php
// Include the database connection
include 'includes/db_connection.php';

// Initialize variables
$name = $email = $language = '';
$success = '';
$error = '';

// Check if the form is submitted
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
    // Get and sanitize input data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $language = htmlspecialchars($_POST['language']);

    // Prepare the SQL insert statement
    $sql = "INSERT INTO students (name, email, programming_language) VALUES (:name, :email, :language)";
    $stmt = $pdo->prepare($sql);

    // Bind the form data
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':language', $language);

    // Execute and check if successful
    try {
        $stmt->execute();
        $success = "Registration successful!";
    } catch (PDOException $e) {
        $error = "Failed to register: " . $e->getMessage();
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
    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <!-- Registration Form -->
    <main class="register-form fade-in">
        <h2>Register for the Competition</h2>

        <!-- Display success or error message -->
        <?php if ($success): ?>
            <p class="success-message"><?php echo $success; ?></p>
        <?php elseif ($error): ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="form-group">
                <input type="text" name="name" required placeholder=" " id="name" />
                <label for="name">Name</label>
            </div>

            <div class="form-group">
                <input type="email" name="email" required placeholder=" " id="email" />
                <label for="email">Email</label>
            </div>

            <div class="form-group">
                <select name="language" id="language" required>
                    <option value="" disabled selected>Select your programming language</option>
                    <option value="python">Python</option>
                    <option value="java">Java</option>
                    <option value="c++">C++</option>
                </select>
            </div>

            <button type="submit" class="btn">Register</button>
        </form>

    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <script src="js/script.js"></script> <!-- Link to your external JavaScript file -->
</body>

</html>