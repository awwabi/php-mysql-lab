<?php
$pageTitle = 'Lab 14: MySQL Insert';
$baseUrl = '../../style.css';
$currentLab = '14';
include '../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 14: MYSQL INSERT                                       ║
║  Topic: Adding Data to Tables                                ║
║                                                              ║
║  HOW TO COMPLETE:                                            ║
║  1. Open phpMyAdmin: http://localhost/phpmyadmin             ║
║  2. Select the "php_mysql_lab" database (run setup.sql       ║
║     first if you haven't already)                             ║
║  3. Click the "SQL" tab and execute each TODO                ║
╚══════════════════════════════════════════════════════════════╝
-->

<div class="tip-box">
    <strong>Setup:</strong> Make sure you've run <code>setup.sql</code> in phpMyAdmin to create the database and tables.
    Then select the <code>php_mysql_lab</code> database.
</div>

<h2>TODOs — Write SQL in phpMyAdmin</h2>

<!-- TODO 1: Insert a single row into the products table -->
<pre><code>INSERT INTO products (name, price, stock, category_id)
VALUES ('Wireless Keyboard', 450000, 30, 1);</code></pre>
<p class="tip-box"><strong>Expected:</strong> 1 row inserted. The id is auto-generated.</p>

<!-- TODO 2: Insert multiple rows in a single statement -->
<pre><code>INSERT INTO products (name, price, stock, category_id) VALUES
('USB Cable', 50000, 200, 1),
('Monitor', 3000000, 15, 1),
('Webcam', 750000, 40, 1);</code></pre>
<p class="tip-box"><strong>Expected:</strong> 3 rows inserted in one query (more efficient than separate INSERTs).</p>

<!-- TODO 3: Insert using a subset of columns (others use defaults) -->
<pre><code>INSERT INTO products (name, price, category_id)
VALUES ('Test Product', 100000, 2);</code></pre>
<p class="tip-box"><strong>Expected:</strong> 1 row inserted. <code>stock</code> uses its DEFAULT value (0), <code>id</code> auto-generates.</p>

<!-- TODO 4: Insert with all columns including id (override auto-increment) -->
<pre><code>INSERT INTO products (id, name, price, stock, category_id)
VALUES (100, 'Special Item', 999999, 1, 3);</code></pre>
<p class="tip-box"><strong>Expected:</strong> Row inserted with id=100. The next auto-increment will start after 100.</p>

<!-- TODO 5: Verify your inserts by selecting all products -->
<pre><code>SELECT * FROM products ORDER BY id DESC LIMIT 10;</code></pre>
<p class="tip-box"><strong>Expected:</strong> Shows your newly inserted products at the top.</p>

<!-- TODO 6: Try inserting a duplicate value in a UNIQUE column — observe the error -->
<pre><code>INSERT INTO categories (name, description) VALUES ('Electronics', 'Duplicate!');</code></pre>
<p class="tip-box"><strong>Expected:</strong> ERROR! Duplicate entry 'Electronics' for key 'name' — UNIQUE constraint violation.</p>

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES                                       ║
╠══════════════════════════════════════════════════════════════╣
║  1. What happens if you insert more columns than values      ║
║     (or vice versa)?                                         ║
║  2. Use INSERT ... SET syntax instead of VALUES.             ║
║  3. Insert a row with CURRENT_TIMESTAMP as a datetime.       ║
║  4. What happens if you skip a NOT NULL column that          ║
║     has no DEFAULT?                                          ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include '../includes/footer.php'; ?>
