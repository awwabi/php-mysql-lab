<?php
$pageTitle = 'Lab 17: MySQL Joins';
$baseUrl = '../../style.css';
$currentLab = '17';
include __DIR__ . '/../includes/header.php';
?>
<?php
/*
╔══════════════════════════════════════════════════════════════╗
║  LAB 17: MYSQL JOINS                                        ║
║  Topic: Combining Data from Multiple Tables                  ║
║                                                              ║
║  HOW TO COMPLETE:                                            ║
║  1. Open phpMyAdmin: http://localhost/phpmyadmin             ║
║  2. Select the "php_mysql_lab" database                      ║
║  3. Click the "SQL" tab and execute each TODO                ║
╚══════════════════════════════════════════════════════════════╝
*/
?>

<div class="tip-box">
    <strong>Setup:</strong> Select <code>php_mysql_lab</code> database. This lab uses the <code>products</code> and <code>categories</code> tables with a foreign key relationship.
    Run <code>setup.sql</code> if you haven't already.
</div>

<h2>TODOs — Write SQL in phpMyAdmin</h2>

<?php
// TODO 1: View products with their category name using INNER JOIN
?>
<pre><code>SELECT p.name AS product_name, p.price, c.name AS category_name
FROM products p
INNER JOIN categories c ON p.category_id = c.id;</code></pre>
<p class="tip-box"><strong>Expected:</strong> Each product row shows its category name. Only products with a valid category are included.</p>

<?php
// TODO 2: Use LEFT JOIN to include products without categories
?>
<pre><code>SELECT p.name AS product_name, p.price, c.name AS category_name
FROM products p
LEFT JOIN categories c ON p.category_id = c.id;</code></pre>
<p class="tip-box"><strong>Expected:</strong> All products shown. Products without a category show NULL for category_name.</p>

<?php
// TODO 3: Filter joined results with WHERE
?>
<pre><code>SELECT p.name, p.price, c.name AS category
FROM products p
INNER JOIN categories c ON p.category_id = c.id
WHERE c.name = 'Electronics'
ORDER BY p.price DESC;</code></pre>
<p class="tip-box"><strong>Expected:</strong> Only electronics products, sorted by price from highest to lowest.</p>

<?php
// TODO 4: Count products per category using GROUP BY with JOIN
?>
<pre><code>SELECT c.name AS category, COUNT(p.id) AS product_count, AVG(p.price) AS avg_price
FROM categories c
LEFT JOIN products p ON c.category_id = p.id
GROUP BY c.id, c.name
ORDER BY product_count DESC;</code></pre>
<p class="tip-box"><strong>Expected:</strong> Each category with its product count and average price. Categories with 0 products show 0 count.</p>

<?php
// TODO 5: Use table aliases to make queries shorter
?>
<pre><code>SELECT p.name, p.price, c.name AS cat
FROM products p
JOIN categories c ON p.category_id = c.id
WHERE p.price > 1000000
ORDER BY p.price DESC
LIMIT 5;</code></pre>
<p class="tip-box"><strong>Expected:</strong> Top 5 most expensive products with their category names. <code>JOIN</code> is shorthand for <code>INNER JOIN</code>.</p>

<?php
/*
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES                                       ║
╠══════════════════════════════════════════════════════════════╣
║  1. What is a RIGHT JOIN? How is it different from LEFT?    ║
║  2. Join 3 tables if you have orders, products, and         ║
║     categories.                                              ║
║  3. What happens if you forget the ON clause? (Cartesian    ║
║     product!)                                                ║
║  4. Use HAVING to filter grouped results (e.g., only        ║
║     categories with more than 2 products).                  ║
║  5. Use a self-join to find products in the same            ║
║     price range.                                             ║
╚══════════════════════════════════════════════════════════════╝
*/

include __DIR__ . '/../includes/footer.php';
?>
