<?php
// Include the database connection and header
include 'includes/db_connection.php';

// Initialize an empty array for students
$students = [];

// Fetch students from the database
try {
    $sql = "SELECT name, email, programming_language, registration_date FROM students ORDER BY registration_date DESC";
    $stmt = $pdo->prepare($sql); // Use $pdo from the included db_connection.php
    $stmt->execute();
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Handle database connection error
    echo "Error fetching students: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Students | HappyU Programming Competition</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to external CSS -->
</head>

<body>
    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <main class="fade-in">
        <h2>Registered Participants</h2>

        <?php if (count($students) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Programming Language</th>
                        <th>Registration Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($student['name']); ?></td>
                            <td><?php echo htmlspecialchars($student['email']); ?></td>
                            <td><?php echo htmlspecialchars($student['programming_language']); ?></td>
                            <td><?php echo htmlspecialchars($student['registration_date']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No students have registered yet.</p>
        <?php endif; ?>
    </main>

    <!-- Include Footer -->
    <?php include 'includes/footer.php'; ?>

    <script src="js/script.js"></script> <!-- Link to your external JavaScript file -->
</body>

</html>