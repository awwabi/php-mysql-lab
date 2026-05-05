<?php
$pageTitle = 'Lab 12: MySQL Data Types';
$baseUrl = '../../style.css';
$currentLab = '12';
include __DIR__ . '/../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 12: MYSQL DATA TYPES                                   ║
║  Topic: Choosing the Right Data Types for Columns            ║
║                                                              ║
║  HOW TO COMPLETE:                                            ║
║  1. Open phpMyAdmin: http://localhost/phpmyadmin             ║
║  2. Select a database (or create one)                        ║
║  3. Click the "SQL" tab                                      ║
║  4. Copy and execute each TODO's SQL                         ║
╚══════════════════════════════════════════════════════════════╝
-->

<div class="tip-box">
    <strong>Setup:</strong> First create and select a database: <code>CREATE DATABASE IF NOT EXISTS datatype_lab; USE datatype_lab;</code>
</div>

<h2>TODOs — Write SQL in phpMyAdmin</h2>

<!-- TODO 1: Create a "products" table with various data types -->
<pre><code>CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    stock INT UNSIGNED DEFAULT 0,
    weight FLOAT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    is_active TINYINT(1) DEFAULT 1
);</code></pre>
<p class="tip-box"><strong>Expected:</strong> Table created with 8 columns of different types.</p>

<!-- TODO 2: View the table structure to see each column's type -->
<pre><code>DESCRIBE products;</code></pre>
<p class="tip-box"><strong>Expected:</strong> Shows Field, Type, Null, Key, Default, Extra for each column.</p>

<!-- TODO 3: Insert a row using different data type formats -->
<pre><code>INSERT INTO products (name, description, price, stock, weight, is_active)
VALUES ('Laptop', 'A powerful laptop for programming', 15000000, 50, 2.3, 1);</code></pre>
<p class="tip-box"><strong>Expected:</strong> 1 row inserted. DECIMAL accepts the price, FLOAT accepts the weight, TINYINT(1) accepts 1 for true.</p>

<!-- TODO 4: Try inserting a string into an INT column — observe the error or type coercion -->
<pre><code>INSERT INTO products (name, price, stock) VALUES ('Mouse', 'not a number', 100);</code></pre>
<p class="tip-box"><strong>Expected:</strong> MySQL will try to convert 'not a number' to DECIMAL, resulting in 0.00 with a warning.</p>

<!-- TODO 5: Create a table with DATE, TIME, and TIMESTAMP types -->
<pre><code>CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(100),
    event_date DATE,
    event_time TIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO events (event_name, event_date, event_time) VALUES
('Workshop', '2026-06-15', '09:00:00'),
('Exam', '2026-07-01', '13:30:00');</code></pre>
<p class="tip-box"><strong>Expected:</strong> 2 rows inserted. Note how DATE uses YYYY-MM-DD and TIME uses HH:MM:SS format.</p>

<!-- TODO 6: Create a table with ENUM and SET types -->
<pre><code>CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    role ENUM('admin', 'editor', 'viewer') DEFAULT 'viewer',
    permissions SET('read', 'write', 'delete') DEFAULT 'read'
);

INSERT INTO users (username, role, permissions) VALUES
('alice', 'admin', 'read,write,delete'),
('bob', 'editor', 'read,write');</code></pre>
<p class="tip-box"><strong>Expected:</strong> 2 rows. ENUM restricts to listed values. SET allows multiple values as comma-separated list.</p>

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES                                       ║
╠══════════════════════════════════════════════════════════════╣
║  1. What is the maximum length of VARCHAR?                   ║
║  2. What is the difference between CHAR(10) and              ║
║     VARCHAR(10)?                                             ║
║  3. What happens if you insert a number larger than          ║
║     INT can hold? Try 9999999999.                            ║
║  4. What is the difference between DATETIME and              ║
║     TIMESTAMP? (Hint: timezone handling)                     ║
║  5. Create a table with BLOB type for binary data.           ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include __DIR__ . '/../includes/footer.php'; ?>
