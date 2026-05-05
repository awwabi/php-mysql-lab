<?php
$pageTitle = 'Lab 13: MySQL Create Table';
$baseUrl = '../../style.css';
$currentLab = '13';
include __DIR__ . '/../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 13: MYSQL CREATE TABLE                                 ║
║  Topic: Defining Table Structure with Constraints            ║
║                                                              ║
║  HOW TO COMPLETE:                                            ║
║  1. Open phpMyAdmin: http://localhost/phpmyadmin             ║
║  2. Click the "SQL" tab                                      ║
║  3. Copy and execute each TODO's SQL                         ║
╚══════════════════════════════════════════════════════════════╝
-->

<div class="tip-box">
    <strong>Setup:</strong> <code>CREATE DATABASE IF NOT EXISTS table_lab; USE table_lab;</code>
</div>

<h2>TODOs — Write SQL in phpMyAdmin</h2>

<!-- TODO 1: Create a "categories" table with a PRIMARY KEY -->
<pre><code>CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    description TEXT
);</code></pre>
<p class="tip-box"><strong>Expected:</strong> Table created. <code>PRIMARY KEY</code> makes id unique and auto-indexed. <code>UNIQUE</code> prevents duplicate category names.</p>

<!-- TODO 2: Create a "products" table with FOREIGN KEY referencing categories -->
<pre><code>CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    stock INT UNSIGNED DEFAULT 0,
    category_id INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);</code></pre>
<p class="tip-box"><strong>Expected:</strong> Table created with a foreign key linking to categories.</p>

<!-- TODO 3: Insert categories first (products need them) -->
<pre><code>INSERT INTO categories (name, description) VALUES
('Electronics', 'Electronic devices and gadgets'),
('Clothing', 'Apparel and accessories'),
('Books', 'Printed and digital books');</code></pre>
<p class="tip-box"><strong>Expected:</strong> 3 rows inserted. IDs auto-generated as 1, 2, 3.</p>

<!-- TODO 4: Insert products with valid category_id values -->
<pre><code>INSERT INTO products (name, price, stock, category_id) VALUES
('Laptop', 15000000, 25, 1),
('T-Shirt', 150000, 100, 2),
('PHP Programming', 250000, 50, 3),
('Mouse', 350000, 75, 1);</code></pre>
<p class="tip-box"><strong>Expected:</strong> 4 rows inserted. Each product links to a valid category.</p>

<!-- TODO 5: Try inserting a product with an invalid category_id — observe the error -->
<pre><code>INSERT INTO products (name, price, stock, category_id) VALUES
('Invalid Product', 100000, 10, 999);</code></pre>
<p class="tip-box"><strong>Expected:</strong> ERROR! Foreign key constraint fails — category_id 999 doesn't exist in categories table.</p>

<!-- TODO 6: View the table structure with EXPLAIN -->
<pre><code>EXPLAIN products;</code></pre>
<p class="tip-box"><strong>Expected:</strong> Shows all columns, their types, keys (PRI for primary, MUL for foreign key), and defaults.</p>

<!-- TODO 7: Add a new column to an existing table -->
<pre><code>ALTER TABLE products ADD COLUMN sku VARCHAR(50) AFTER name;</code></pre>
<p class="tip-box"><strong>Expected:</strong> New "sku" column added after "name". Verify with <code>DESCRIBE products;</code></p>

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES                                       ║
╠══════════════════════════════════════════════════════════════╣
║  1. What happens if you try to insert a NULL value into a   ║
║     NOT NULL column?                                         ║
║  2. Remove the DEFAULT from a column using ALTER TABLE.      ║
║  3. What is the difference between PRIMARY KEY and UNIQUE?  ║
║  4. Drop the foreign key constraint and re-add it with      ║
║     ON DELETE CASCADE. What happens when you delete a       ║
║     category now?                                            ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include __DIR__ . '/../includes/footer.php'; ?>
