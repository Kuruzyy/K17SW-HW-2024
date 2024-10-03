CREATE DATABASE happy_u_competition;
USE happy_u_competition;
-- Switch to your new database
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    -- Unique ID for each student
    name VARCHAR(100) NOT NULL,
    -- Student's name
    email VARCHAR(100) NOT NULL UNIQUE,
    -- Student's email (unique)
    programming_language VARCHAR(50) NOT NULL,
    -- Selected programming language
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Timestamp of registration
);
INSERT INTO students (name, email, programming_language)
VALUES ('John Doe', 'john@example.com', 'Java'),
    ('Jane Smith', 'jane@example.com', 'Python');
DELETE FROM students;