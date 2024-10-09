CREATE TABLE students (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE,
    programming_language TEXT NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO students (name, email, programming_language)
VALUES ('John Doe', 'john@example.com', 'java'),
    ('Jane Smith', 'jane@example.com', 'python');
DELETE FROM students;