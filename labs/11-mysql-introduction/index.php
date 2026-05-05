<?php
$pageTitle = 'Lab 11: MySQL Introduction';
$baseUrl = '../style.css';
$currentLab = '11';
include '../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 11: MYSQL INTRODUCTION                                 ║
║  Topic: Getting Started with MySQL and phpMyAdmin           ║
║                                                              ║
║  LEARNING OBJECTIVES:                                        ║
║  - Understand what MySQL is and how it works                 ║
║  - Navigate the phpMyAdmin interface                         ║
║  - Create and drop databases                                 ║
║  - Write basic SQL statements                                ║
║                                                              ║
║  HOW TO COMPLETE THIS LAB:                                   ║
║  1. Open XAMPP and start Apache + MySQL                      ║
║  2. Open phpMyAdmin: http://localhost/phpmyadmin             ║
║  3. Click the "SQL" tab at the top                           ║
║  4. Copy each TODO's SQL and paste it into the SQL box       ║
║  5. Click "Go" to execute                                    ║
║  6. Verify the result matches the expected output             ║
╚══════════════════════════════════════════════════════════════╝
-->

<div class="tip-box">
    <strong>Before you start:</strong> Make sure XAMPP is running. Open your browser and go to <code>http://localhost/phpmyadmin</code>.
    You should see the phpMyAdmin dashboard with a list of databases on the left sidebar.
</div>

<h2>TODOs — Write SQL in phpMyAdmin</h2>

<!-- TODO 1: Create a database called "student_lab" -->
<pre><code>CREATE DATABASE student_lab;</code></pre>
<p class="tip-box"><strong>Expected:</strong> "Database student_lab has been created" message.</p>

<!-- TODO 2: Select the database to use it -->
<pre><code>USE student_lab;</code></pre>
<p class="tip-box"><strong>Expected:</strong> Database changes to student_lab (check the left sidebar).</p>

<!-- TODO 3: Create a simple "students" table -->
<pre><code>CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    major VARCHAR(50),
    gpa DECIMAL(3,2)
);</code></pre>
<p class="tip-box"><strong>Expected:</strong> "Table students has been created" message. You should see the table in the left sidebar.</p>

<!-- TODO 4: View the table structure -->
<pre><code>DESCRIBE students;</code></pre>
<p class="tip-box"><strong>Expected:</strong> A table showing 5 columns: id, name, email, major, gpa with their types and constraints.</p>

<!-- TODO 5: Drop the table (cleanup) -->
<pre><code>DROP TABLE students;</code></pre>
<p class="tip-box"><strong>Expected:</strong> Table disappears from the left sidebar.</p>

<!-- TODO 6: Drop the database (cleanup) -->
<pre><code>DROP DATABASE student_lab;</code></pre>
<p class="tip-box"><strong>Expected:</strong> Database disappears from the left sidebar.</p>

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES                                       ║
╠══════════════════════════════════════════════════════════════╣
║  1. Create a database with a different name.                 ║
║  2. What happens if you try to create a database that        ║
║     already exists? Try CREATE DATABASE IF NOT EXISTS.       ║
║  3. Explore the phpMyAdmin interface — click on different    ║
║     tabs (Structure, SQL, Insert, Browse, Export, Import).   ║
║  4. What is the difference between DROP TABLE and            ║
║     TRUNCATE TABLE?                                          ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include '../includes/footer.php'; ?>
