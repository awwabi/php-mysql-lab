<?php
$pageTitle = 'Lab 17: MySQL Joins — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '17';
include __DIR__ . '/../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 17: MySQL Joins</h1>
<p class="subtitle">Combining data from multiple tables.</p>

<h2>1. Why Joins?</h2>
<p>
    Relational databases split data across tables to avoid redundancy. Joins let you combine related
    data from multiple tables in a single query.
</p>
<pre><code>-- Without join: Two separate queries
SELECT * FROM products WHERE id = 1;        -- category_id = 3
SELECT * FROM categories WHERE id = 3;       -- name = "Books"

-- With join: One query, combined result
SELECT p.name, c.name AS category
FROM products p
JOIN categories c ON p.category_id = c.id;</code></pre>

<h2>2. INNER JOIN</h2>
<p>Returns only rows that have matching values in BOTH tables:</p>
<pre><code>SELECT p.name AS product, c.name AS category
FROM products p
INNER JOIN categories c ON p.category_id = c.id;</code></pre>
<div class="tip-box">
    If a product has no category (category_id is NULL), it won't appear in the results.
    If a category has no products, it also won't appear.
</div>

<h2>3. LEFT JOIN</h2>
<p>Returns ALL rows from the left table, plus matching rows from the right table:</p>
<pre><code>SELECT p.name AS product, c.name AS category
FROM products p
LEFT JOIN categories c ON p.category_id = c.id;</code></pre>
<div class="tip-box">
    Products without a category will appear with NULL for the category name.
    Categories without products will NOT appear (they're in the right table).
</div>

<h2>4. Join Visual</h2>
<pre><code>products (left)          categories (right)
+----+--------+----+   +----+----------+
| id | name   | cat |   | id | name    |
+----+--------+----+   +----+----------+
| 1  | Laptop |  1  |→  | 1  | Elec.   |
| 2  | Mouse  |  1  |→  | 2  | Cloth.  |
| 3  | Book   |  3  |→  | 3  | Books   |
| 4  | Misc   |NULL |   +----+----------+

INNER JOIN: rows 1, 2, 3 (all have matching category)
LEFT JOIN:  rows 1, 2, 3, 4 (all products, NULL for Misc's category)</code></pre>

<h2>5. Table Aliases</h2>
<pre><code>-- Without aliases (verbose)
SELECT products.name, categories.name FROM products
INNER JOIN categories ON products.category_id = categories.id;

-- With aliases (clean)
SELECT p.name AS product, c.name AS category
FROM products p
INNER JOIN categories c ON p.category_id = c.id;</code></pre>

<h2>6. Join with WHERE</h2>
<pre><code>SELECT p.name, p.price, c.name AS category
FROM products p
INNER JOIN categories c ON p.category_id = c.id
WHERE c.name = 'Electronics' AND p.price > 1000000;</code></pre>

<h2>7. Join with GROUP BY</h2>
<pre><code>SELECT c.name AS category, COUNT(p.id) AS total_products
FROM categories c
LEFT JOIN products p ON c.id = p.category_id
GROUP BY c.id, c.name;</code></pre>

<h2>8. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> Forgetting the ON clause — creates a cartesian product (every row × every row = massive result).
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> Using the wrong column in ON — join on the foreign key, not the primary key.
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Ambiguous column names — if both tables have a "name" column, you must specify which one: <code>c.name</code> or <code>p.name</code>.
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
