<?php
$pageTitle = 'Lab 16: MySQL Update & Delete';
$baseUrl = '../style.css';
$currentLab = '16';
include '../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 16: MYSQL UPDATE & DELETE                               ║
║  Topic: Modifying and Removing Data from Tables               ║
║                                                              ║
║  HOW TO COMPLETE:                                            ║
║  1. Open phpMyAdmin: http://localhost/phpmyadmin             ║
║  2. Select the "php_mysql_lab" database                      ║
║  3. Click the "SQL" tab and execute each TODO                ║
║                                                              ║
║  WARNING: Always use WHERE clause with UPDATE and DELETE!     ║
╚══════════════════════════════════════════════════════════════╝
-->

<div class="warning-box">
    <strong>SAFETY WARNING:</strong> UPDATE and DELETE without a WHERE clause affect ALL rows!
    Always double-check your WHERE clause before executing. When in doubt, run a SELECT first.
</div>

<h2>TODOs — Write SQL in phpMyAdmin</h2>

<!-- TODO 1: Update a single product's price -->
<pre><code>UPDATE products SET price = 1200000 WHERE id = 1;</code></pre>
<p class="tip-box"><strong>Expected:</strong> 1 row affected. Verify with: <code>SELECT name, price FROM products WHERE id = 1;</code></p>

<!-- TODO 2: Update multiple columns at once -->
<pre><code>UPDATE products SET price = 800000, stock = 50 WHERE name = 'Mouse';</code></pre>
<p class="tip-box"><strong>Expected:</strong> 1 row affected. Both price and stock updated for the Mouse product.</p>

<!-- TODO 3: Update multiple rows with a condition -->
<pre><code>UPDATE products SET stock = stock + 10 WHERE category_id = 1;</code></pre>
<p class="tip-box"><strong>Expected:</strong> All products in category 1 (Electronics) have their stock increased by 10.</p>

<!-- TODO 4: Delete a single row -->
<pre><code>DELETE FROM products WHERE id = 2;</code></pre>
<p class="tip-box"><strong>Expected:</strong> 1 row deleted. The product with id=2 is permanently removed.</p>

<!-- TODO 5: Delete multiple rows with a condition -->
<pre><code>DELETE FROM products WHERE price < 100000;</code></pre>
<p class="tip-box"><strong>Expected:</strong> All products cheaper than 100,000 IDR are deleted.</p>

<!-- TODO 6: Safe practice — use SELECT first to preview what you'll update/delete -->
<pre><code>-- Step 1: Preview (SELECT first!)
SELECT name, price FROM products WHERE category_id = 2;

-- Step 2: Then UPDATE only after verifying
UPDATE products SET price = price * 0.9 WHERE category_id = 2;</code></pre>
<p class="tip-box"><strong>Expected:</strong> SELECT shows what will be affected, then UPDATE applies the 10% discount to category 2 products.</p>

<!-- TODO 7: TRUNCATE — delete all rows quickly (faster than DELETE without WHERE) -->
<pre><code>-- WARNING: This deletes ALL rows! Use on test tables only.
TRUNCATE TABLE products;</code></pre>
<div class="danger-box">
    <strong>DANGER!</strong> TRUNCATE deletes ALL rows and resets AUTO_INCREMENT. It cannot be rolled back.
    Only use this on test data. To restore, re-run setup.sql.
</div>

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES                                       ║
╠══════════════════════════════════════════════════════════════╣
║  1. What is the difference between DELETE and TRUNCATE?      ║
║  2. Can you UPDATE a PRIMARY KEY? What happens to            ║
║     foreign key references?                                  ║
║  3. Use a subquery in WHERE: UPDATE products SET price =    ║
║     0 WHERE category_id = (SELECT id FROM categories         ║
║     WHERE name = 'Books');                                   ║
║  4. What happens if you DELETE a category that has           ║
║     products referencing it?                                  ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include '../includes/footer.php'; ?>
