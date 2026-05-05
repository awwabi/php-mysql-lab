<?php
$pageTitle = 'Lab 14: MySQL Insert — Concept Guide';
$baseUrl = '../style.css';
$currentLab = '14';
include '../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 14: MySQL Insert</h1>
<p class="subtitle">Adding data to tables.</p>

<h2>1. INSERT Syntax</h2>
<pre><code>-- Insert with all columns (order must match table definition)
INSERT INTO table_name VALUES (value1, value2, ...);

-- Insert with specific columns (recommended)
INSERT INTO table_name (col1, col2) VALUES (val1, val2);</code></pre>

<h2>2. Single Row Insert</h2>
<pre><code>INSERT INTO products (name, price, stock, category_id)
VALUES ('Laptop', 15000000, 25, 1);</code></pre>

<h2>3. Multiple Rows Insert</h2>
<pre><code>INSERT INTO products (name, price, stock, category_id) VALUES
('Mouse', 350000, 75, 1),
('Keyboard', 450000, 50, 1),
('Monitor', 3000000, 15, 1);</code></pre>
<div class="tip-box">
    <strong>Performance tip:</strong> Inserting multiple rows in one statement is much faster than separate INSERT statements.
</div>

<h2>4. Insert with Defaults</h2>
<pre><code>-- Only specify some columns; others use their DEFAULT values
INSERT INTO products (name, price) VALUES ('Test', 100000);
-- stock gets DEFAULT 0, id gets AUTO_INCREMENT, created_at gets CURRENT_TIMESTAMP</code></pre>

<h2>5. String and Date Quoting</h2>
<pre><code>-- Strings: single quotes
INSERT INTO users (name, email) VALUES ('Alice', 'alice@example.com');

-- Dates: single quotes in YYYY-MM-DD format
INSERT INTO events (name, date) VALUES ('Workshop', '2026-06-15');

-- Numbers: no quotes
INSERT INTO products (price, stock) VALUES (50000, 100);</code></pre>

<h2>6. AUTO_INCREMENT Behavior</h2>
<pre><code>-- Insert without specifying id
INSERT INTO products (name, price) VALUES ('A', 100);
INSERT INTO products (name, price) VALUES ('B', 200);
INSERT INTO products (name, price) VALUES ('C', 300);
-- ids will be 1, 2, 3

-- You CAN override it, but be careful
INSERT INTO products (id, name, price) VALUES (100, 'D', 400);
-- Next auto-increment will be 101, not 4</code></pre>

<h2>7. Common Errors</h2>
<div class="danger-box">
    <strong>Duplicate key:</strong> Inserting a value that violates UNIQUE or PRIMARY KEY constraint.
</div>
<div class="danger-box">
    <strong>Foreign key violation:</strong> Inserting a foreign key value that doesn't exist in the parent table.
</div>
<div class="danger-box">
    <strong>Column count mismatch:</strong> Providing more or fewer values than columns specified.
</div>

<?php include '../includes/footer.php'; ?>
