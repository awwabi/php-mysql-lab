<?php
$pageTitle = 'Lab 16: MySQL Update & Delete — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '16';
include '../../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 16: MySQL Update &amp; Delete</h1>
<p class="subtitle">Modifying and removing data from tables.</p>

<h2>1. UPDATE Syntax</h2>
<pre><code>UPDATE table_name
SET column1 = value1, column2 = value2
WHERE condition;</code></pre>

<h2>2. UPDATE Examples</h2>
<pre><code>-- Update one column
UPDATE products SET price = 1200000 WHERE id = 1;

-- Update multiple columns
UPDATE products SET price = 800000, stock = 50 WHERE name = 'Mouse';

-- Update with expression
UPDATE products SET price = price * 1.1 WHERE category_id = 1;

-- Update all rows (DANGEROUS!)
UPDATE products SET stock = 0;  -- No WHERE = ALL rows affected!</code></pre>

<div class="danger-box">
    <strong>CRITICAL RULE:</strong> ALWAYS use a WHERE clause with UPDATE!
    Without WHERE, you update EVERY row in the table.
</div>

<h2>3. DELETE Syntax</h2>
<pre><code>DELETE FROM table_name
WHERE condition;</code></pre>

<h2>4. DELETE Examples</h2>
<pre><code>-- Delete one row
DELETE FROM products WHERE id = 2;

-- Delete multiple rows
DELETE FROM products WHERE price &lt; 100000;

-- Delete all rows (DANGEROUS!)
DELETE FROM products;  -- No WHERE = ALL rows deleted!</code></pre>

<div class="danger-box">
    <strong>CRITICAL RULE:</strong> ALWAYS use a WHERE clause with DELETE!
    Without WHERE, you delete EVERY row in the table.
</div>

<h2>5. Safe Practice: SELECT First</h2>
<p>Before UPDATE or DELETE, always run a SELECT to preview affected rows:</p>
<pre><code>-- Step 1: Preview
SELECT * FROM products WHERE category_id = 2;

-- Step 2: Verify the results look correct

-- Step 3: Then UPDATE or DELETE
UPDATE products SET price = price * 0.9 WHERE category_id = 2;</code></pre>

<h2>6. TRUNCATE vs DELETE</h2>
<table class="compare">
    <tr><th>Feature</th><th>DELETE</th><th>TRUNCATE</th></tr>
    <tr><td>Speed</td><td>Slow (row by row)</td><td>Fast (drops &amp; recreates)</td></tr>
    <tr><td>WHERE clause</td><td>Yes (can delete specific rows)</td><td>No (always all rows)</td></tr>
    <tr><td>AUTO_INCREMENT</td><td>Keeps current value</td><td>Resets to 1</td></tr>
    <tr><td>Transactions</td><td>Can be rolled back</td><td>Cannot be rolled back</td></tr>
    <tr><td>Triggers</td><td>Fires row-level triggers</td><td>Doesn't fire triggers</td></tr>
</table>

<h2>7. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> UPDATE/DELETE without WHERE — affects ALL rows. Always double-check.
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> Not previewing with SELECT first — you might update/delete the wrong rows.
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Using TRUNCATE on production tables — it's irreversible and resets AUTO_INCREMENT.
</div>

<?php include '../../includes/footer.php'; ?>
