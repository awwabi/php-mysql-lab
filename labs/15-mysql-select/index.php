<?php
$pageTitle = 'Lab 15: MySQL Select';
$baseUrl = '../../style.css';
$currentLab = '15';
include '../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 15: MYSQL SELECT                                       ║
║  Topic: Querying Data from Tables                            ║
║                                                              ║
║  HOW TO COMPLETE:                                            ║
║  1. Open phpMyAdmin: http://localhost/phpmyadmin             ║
║  2. Select the "php_mysql_lab" database                      ║
║  3. Click the "SQL" tab and execute each TODO                ║
╚══════════════════════════════════════════════════════════════╝
-->

<div class="tip-box">
    <strong>Setup:</strong> Select the <code>php_mysql_lab</code> database. Make sure you've run <code>setup.sql</code> to have sample data.
</div>

<h2>TODOs — Write SQL in phpMyAdmin</h2>

<!-- TODO 1: Select all columns and all rows from products -->
<pre><code>SELECT * FROM products;</code></pre>
<p class="tip-box"><strong>Expected:</strong> All products with all columns displayed.</p>

<!-- TODO 2: Select specific columns only -->
<pre><code>SELECT name, price, stock FROM products;</code></pre>
<p class="tip-box"><strong>Expected:</strong> Only name, price, and stock columns shown.</p>

<!-- TODO 3: Filter with WHERE clause — products over 1 million IDR -->
<pre><code>SELECT name, price FROM products WHERE price > 1000000;</code></pre>
<p class="tip-box"><strong>Expected:</strong> Only products with price greater than 1,000,000.</p>

<!-- TODO 4: Combine conditions with AND and OR -->
<pre><code>SELECT name, price, stock FROM products
WHERE price > 500000 AND stock > 20;</code></pre>
<p class="tip-box"><strong>Expected:</strong> Products that are both expensive AND well-stocked.</p>

<!-- TODO 5: Sort results with ORDER BY -->
<pre><code>SELECT name, price FROM products ORDER BY price DESC;</code></pre>
<p class="tip-box"><strong>Expected:</strong> Products sorted by price from highest to lowest. Use ASC for lowest first.</p>

<!-- TODO 6: Limit results with LIMIT -->
<pre><code>SELECT name, price FROM products ORDER BY price DESC LIMIT 5;</code></pre>
<p class="tip-box"><strong>Expected:</strong> Only the 5 most expensive products.</p>

<!-- TODO 7: Search with LIKE pattern matching -->
<pre><code>SELECT name FROM products WHERE name LIKE '%phone%';</code></pre>
<p class="tip-box"><strong>Expected:</strong> Products whose name contains "phone" (case-insensitive). <code>%</code> matches any characters.</p>

<!-- TODO 8: Use DISTINCT to get unique values -->
<pre><code>SELECT DISTINCT category_id FROM products;</code></pre>
<p class="tip-box"><strong>Expected:</strong> A list of unique category IDs used in products.</p>

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES                                       ║
╠══════════════════════════════════════════════════════════════╣
║  1. Use LIMIT with OFFSET for pagination (e.g., LIMIT 5     ║
║     OFFSET 5).                                               ║
║  2. Use BETWEEN to find products in a price range.           ║
║  3. Use IN() to find products in specific categories.       ║
║  4. Combine LIKE with NOT to exclude matching rows.          ║
║  5. Use aliases (AS) to rename columns in the result.       ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include '../includes/footer.php'; ?>
