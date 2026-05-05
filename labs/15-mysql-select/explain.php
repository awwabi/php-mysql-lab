<?php
$pageTitle = 'Lab 15: MySQL Select — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '15';
include '../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 15: MySQL Select</h1>
<p class="subtitle">Querying data from tables.</p>

<h2>1. SELECT Syntax</h2>
<pre><code>SELECT column1, column2, ...
FROM table_name
WHERE condition
ORDER BY column ASC|DESC
LIMIT count OFFSET start;</code></pre>

<h2>2. Select All vs Specific Columns</h2>
<pre><code>-- All columns
SELECT * FROM products;

-- Specific columns only (faster, cleaner)
SELECT name, price FROM products;</code></pre>
<div class="tip-box">
    <strong>Best practice:</strong> Avoid <code>SELECT *</code> in production — it fetches unnecessary data.
    Always list the columns you actually need.
</div>

<h2>3. WHERE Clause</h2>
<table class="compare">
    <tr><th>Operator</th><th>Meaning</th><th>Example</th></tr>
    <tr><td><code>=</code></td><td>Equal</td><td><code>WHERE price = 50000</code></td></tr>
    <tr><td><code>!=</code> or <code>&lt;&gt;</code></td><td>Not equal</td><td><code>WHERE status != 'deleted'</code></td></tr>
    <tr><td><code>&gt;, &lt;, &gt;=, &lt;=</code></td><td>Comparison</td><td><code>WHERE price &gt; 1000000</code></td></tr>
    <tr><td><code>BETWEEN</code></td><td>Range</td><td><code>WHERE price BETWEEN 100 AND 1000</code></td></tr>
    <tr><td><code>IN()</code></td><td>List match</td><td><code>WHERE category_id IN (1, 2, 3)</code></td></tr>
    <tr><td><code>LIKE</code></td><td>Pattern match</td><td><code>WHERE name LIKE '%phone%'</code></td></tr>
    <tr><td><code>IS NULL</code></td><td>Null check</td><td><code>WHERE deleted_at IS NULL</code></td></tr>
</table>

<h2>4. AND / OR / NOT</h2>
<pre><code>-- AND: both conditions must be true
SELECT * FROM products WHERE price > 100000 AND stock > 10;

-- OR: at least one condition must be true
SELECT * FROM products WHERE category_id = 1 OR category_id = 2;

-- NOT: negate a condition
SELECT * FROM products WHERE name NOT LIKE '%test%';</code></pre>

<h2>5. ORDER BY</h2>
<pre><code>-- Ascending (default, lowest first)
SELECT * FROM products ORDER BY price ASC;

-- Descending (highest first)
SELECT * FROM products ORDER BY price DESC;

-- Multiple columns
SELECT * FROM products ORDER BY category_id ASC, price DESC;</code></pre>

<h2>6. LIMIT and OFFSET</h2>
<pre><code>-- First 5 results
SELECT * FROM products LIMIT 5;

-- Skip first 5, get next 5 (pagination)
SELECT * FROM products LIMIT 5 OFFSET 5;

-- Shorthand for OFFSET
SELECT * FROM products LIMIT 10, 5; -- OFFSET 10, LIMIT 5</code></pre>

<h2>7. DISTINCT</h2>
<pre><code>-- Get unique category IDs
SELECT DISTINCT category_id FROM products;</code></pre>

<h2>8. Aggregate Functions</h2>
<pre><code>SELECT COUNT(*) FROM products;           -- Total rows
SELECT AVG(price) FROM products;         -- Average price
SELECT SUM(stock) FROM products;         -- Total stock
SELECT MIN(price), MAX(price) FROM products; -- Price range</code></pre>

<h2>9. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> Forgetting WHERE — <code>DELETE FROM products;</code> deletes ALL rows!
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> Using single quotes for column names — <code>SELECT 'name' FROM products</code> returns the string "name" for every row.
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Confusing <code>= NULL</code> with <code>IS NULL</code> — NULL is never equal to anything, not even itself.
</div>

<?php include '../includes/footer.php'; ?>
