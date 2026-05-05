<?php
$pageTitle = 'Lab 23: CRUD Setup';
$baseUrl = '../../style.css';
$currentLab = '23';
include __DIR__ . '/../includes/header.php';
?>

<h1 class="maybe-title">Lab 23: CRUD Setup</h1>
<p class="subtitle">Setting up the database and understanding the CRUD application structure.</p>

<div class="tip-box">
    <strong>CRUD</strong> stands for <strong>C</strong>reate, <strong>R</strong>ead, <strong>U</strong>pdate, <strong>D</strong>elete — the four basic operations for managing data in any application.
</div>

<h2>Step 1: Start XAMPP</h2>
<p>Open XAMPP Control Panel and start both <strong>Apache</strong> and <strong>MySQL</strong>.</p>

<h2>Step 2: Run setup.sql in phpMyAdmin</h2>
<ol>
    <li>Open <code>http://localhost/phpmyadmin</code></li>
    <li>Click the <strong>SQL</strong> tab</li>
    <li>Copy the contents of <code>setup.sql</code> from the project root</li>
    <li>Paste into the SQL box and click <strong>Go</strong></li>
</ol>
<pre><code>-- This creates the database, tables, and sample data
-- File location: php-mysql-lab/setup.sql

CREATE DATABASE IF NOT EXISTS php_mysql_lab;
USE php_mysql_lab;

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    description TEXT
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    stock INT UNSIGNED DEFAULT 0,
    category_id INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

-- Sample data (12 products, 5 categories)
INSERT INTO categories (name, description) VALUES
('Electronics', 'Electronic devices and gadgets'),
('Clothing', 'Apparel and accessories'),
('Books', 'Printed and digital books'),
('Food & Beverages', 'Consumable items'),
('Sports', 'Sports equipment and gear');

INSERT INTO products (name, price, stock, category_id) VALUES
('Laptop', 15000000, 25, 1),
('Smartphone', 8000000, 50, 1),
('Headphones', 1200000, 100, 1),
('T-Shirt', 150000, 200, 2),
('Jeans', 350000, 80, 2),
('Jacket', 500000, 40, 2),
('PHP Programming', 250000, 50, 3),
('Database Design', 300000, 30, 3),
('Web Development', 275000, 45, 3),
('Coffee Beans 1kg', 120000, 150, 4),
('Green Tea Box', 85000, 200, 4),
('Yoga Mat', 200000, 60, 5);</code></pre>

<h2>Step 3: Check config.php</h2>
<p>The database connection config is at <code>php-mysql-lab/config.php</code>:</p>
<pre><code>&lt;?php
$host = "localhost";
$user = "root";
$pass = "";          // XAMPP default: empty
$dbname = "php_mysql_lab";
?&gt;</code></pre>
<div class="tip-box">
    <strong>XAMPP defaults:</strong> username is <code>root</code>, password is empty. If you set a MySQL password, update <code>config.php</code>.
</div>

<h2>Step 4: Verify the Connection</h2>
<p>Open <a href="../18-database-connection/index.php">Lab 18: Database Connection</a> in your browser. If you see "Connected successfully!", you're ready to proceed.</p>

<h2>Step 5: Products Table Structure</h2>
<table class="compare">
    <tr><th>Column</th><th>Type</th><th>Description</th></tr>
    <tr><td>id</td><td>INT AUTO_INCREMENT</td><td>Primary key</td></tr>
    <tr><td>name</td><td>VARCHAR(100)</td><td>Product name</td></tr>
    <tr><td>price</td><td>DECIMAL(10,2)</td><td>Price in IDR</td></tr>
    <tr><td>stock</td><td>INT UNSIGNED</td><td>Available quantity</td></tr>
    <tr><td>category_id</td><td>INT</td><td>Links to categories table</td></tr>
    <tr><td>created_at</td><td>DATETIME</td><td>Auto-generated timestamp</td></tr>
</table>

<h2>CRUD Labs Overview</h2>
<table class="compare">
    <tr><th>Lab</th><th>Operation</th><th>What You'll Build</th></tr>
    <tr><td><a href="../24-crud-create-read/index.php">Lab 24</a></td><td>Create + Read</td><td>Product form + product listing</td></tr>
    <tr><td><a href="../25-crud-update-delete/index.php">Lab 25</a></td><td>Update + Delete</td><td>Edit form + delete confirmation</td></tr>
    <tr><td><a href="../26-crud-final-polish/index.php">Lab 26</a></td><td>Full CRUD</td><td>Polished application with search</td></tr>
</table>

<?php include __DIR__ . '/../includes/footer.php'; ?>
