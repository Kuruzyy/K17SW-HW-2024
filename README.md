# Happy U Programming Competition Website

## Overview

This project is a website for the "Program the Future" programming competition hosted by Happy U. The website allows students to register for the competition and view a list of registered participants. The website includes several pages with consistent styling and navigation.

## Project Structure

### 1. **Home Page** (`index.php`)

- The main landing page providing an overview of the competition.
- Links to the registration form and other content pages.

### 2. **Student Registration Page** (`register.php`)

- A form where students can enter their details (name, email, programming language) to register for the competition.
- The form submission is saved in a database.

### 3. **Registered Students Page** (`students.php`)

- Displays the list of all students who have registered for the competition.
- The list is updated dynamically from the database.

### 4. **Common Header/Footer**

- The navigation bar and footer are included across all pages to maintain consistency, stored in `includes/header.php` and `includes/footer.php`.

## Project Files

### **Folder Structure**

```plaintext
/project-root
│
├── /css
│   └── styles.css               # Global styles for the website
│
├── /database
│   ├── database.sql             # Structure Query Language to pre-define database.db
│   └── database.db              # Database of registered student
│
├── /includes
│   ├── header.php               # Contains navigation bar (included on all pages)
│   ├── footer.php               # Contains footer (included on all pages)
│   └── db_connection.php        # Database connection setup
│
├── /js
│   └── script.js                # JavaScript for form validation (if applicable)
│
├── /media
│   ├── /videos                  # Videos (Showcase of the competition)
│   └── /images                  # Images (including the banner logo)
│
├── /screenshots
│   └── screenshot1.png          # Screenshots for submission
│
├── index.php                    # Home page
├── register.php                 # Registration page
├── students.php                 # Page displaying registered students
├── wireframe.pdf                # Wireframe for the website design
├── erd.pdf                      # ERD (Entity Relationship Diagram) for the database
└── README.md                    # This file
```
