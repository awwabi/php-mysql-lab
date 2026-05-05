<?php
$pageTitle = 'Lab 13: MySQL Create Table — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '13';
include '../../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 13: MySQL Create Table</h1>
<p class="subtitle">Defining table structure with constraints.</p>

<h2>1. CREATE TABLE Syntax</h2>
<pre><code>CREATE TABLE table_name (
    column1_name DATA_TYPE CONSTRAINTS,
    column2_name DATA_TYPE CONSTRAINTS,
    ...
    TABLE_LEVEL_CONSTRAINTS
);</code></pre>

<h2>2. Column Constraints</h2>
<table class="compare">
    <tr><th>Constraint</th><th>Meaning</th><th>Example</th></tr>
    <tr><td><code>NOT NULL</code></td><td>Column cannot be empty</td><td><code>name VARCHAR(50) NOT NULL</code></td></tr>
    <tr><td><code>DEFAULT value</code></td><td>Default value if none provided</td><td><code>stock INT DEFAULT 0</code></td></tr>
    <tr><td><code>UNSIGNED</code></td><td>Only non-negative values</td><td><code>age INT UNSIGNED</code></td></tr>
    <tr><td><code>UNIQUE</code></td><td>Values must be unique</td><td><code>email VARCHAR(100) UNIQUE</code></td></tr>
    <tr><td><code>AUTO_INCREMENT</code></td><td>Auto-generate next number</td><td><code>id INT AUTO_INCREMENT</code></td></tr>
</table>

<h2>3. PRIMARY KEY</h2>
<p>The PRIMARY KEY uniquely identifies each row:</p>
<pre><code>CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);</code></pre>
<div class="tip-box">
    <strong>Rules:</strong> PRIMARY KEY must be UNIQUE and NOT NULL. Each table should have one.
    It's automatically indexed for fast lookups.
</div>

<h2>4. FOREIGN KEY</h2>
<p>A FOREIGN KEY links to a PRIMARY KEY in another table:</p>
<pre><code>CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    total DECIMAL(10,2),
    FOREIGN KEY (user_id) REFERENCES users(id)
);</code></pre>
<div class="warning-box">
    <strong>Referential integrity:</strong> You cannot insert a row with a foreign key value that doesn't exist in the referenced table.
    This prevents orphaned records.
</div>

<h2>5. DESCRIBE and EXPLAIN</h2>
<pre><code>DESCRIBE products;
-- or
EXPLAIN products;</code></pre>
<p>Shows all columns, their types, whether they allow NULL, their keys, and default values.</p>

<h2>6. ALTER TABLE</h2>
<pre><code>-- Add a column
ALTER TABLE products ADD COLUMN sku VARCHAR(50);

-- Modify a column
ALTER TABLE products MODIFY COLUMN price DECIMAL(12,2);

-- Drop a column
ALTER TABLE products DROP COLUMN sku;</code></pre>

<h2>7. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> Forgetting NOT NULL on important columns — allows empty values.
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> Creating a foreign key before the referenced table exists — create parent tables first.
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Using the wrong data type — leads to data truncation or wasted storage.
</div>

<?php include '../../includes/footer.php'; ?>
