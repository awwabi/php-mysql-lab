<?php
$pageTitle = 'Lab 26: CRUD Final Polish — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '26';
include '../../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 26: CRUD Final Polish</h1>
<p class="subtitle">A complete, polished CRUD application with search and filter.</p>

<h2>1. What Makes This "Polished"?</h2>
<p>Lab 26 combines all four CRUD operations into a single, professional page with:</p>
<ul>
    <li><strong>Full CRUD</strong> — Create, Read, Update, Delete in one interface</li>
    <li><strong>Search</strong> — Filter products by name using LIKE</li>
    <li><strong>Category filter</strong> — Filter by category using dropdown</li>
    <li><strong>Dashboard stats</strong> — Total products and inventory value</li>
    <li><strong>Calculated columns</strong> — Inventory value per product (price × stock)</li>
    <li><strong>Clean UI</strong> — Consistent styling, clear action buttons</li>
</ul>

<h2>2. Search with LIKE</h2>
<pre><code>&lt;?php
$search = trim($_GET["search"] ?? "");

// Build WHERE clause dynamically
$whereClauses = ["1=1"];
if ($search) {
    $escaped = mysqli_real_escape_string($conn, $search);
    $whereClauses[] = "p.name LIKE '%$escaped%'";
}
if ($filterCat &gt; 0) {
    $whereClauses[] = "p.category_id = $filterCat";
}
$whereSQL = implode(" AND ", $whereClauses);

$sql = "SELECT * FROM products p WHERE $whereSQL";
?&gt;</code></pre>

<h2>3. Calculated Columns</h2>
<pre><code>&lt;?php
// Inventory value = price × stock
foreach ($products as $p) {
    $value = $p["price"] * $p["stock"];
    echo "Rp " . number_format($value, 0, ',', '.');
}

// Total inventory value
$totalValue = 0;
foreach ($products as $p) {
    $totalValue += $p["price"] * $p["stock"];
}
echo "Total: Rp " . number_format($totalValue, 0, ',', '.');
?&gt;</code></pre>

<h2>4. Single-Page CRUD Pattern</h2>
<p>Instead of separate pages for each operation, use <code>$_GET</code> parameters and <code>$_POST["action"]</code> to determine what to show:</p>
<pre><code>&lt;?php
// Determine what to display
if (isset($_GET["edit_id"])) {
    // Show edit form
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["action"] === "create") { /* handle create */ }
    if ($_POST["action"] === "update") { /* handle update */ }
} else {
    // Show add form + product list
}
?&gt;</code></pre>

<h2>5. Application Structure Patterns</h2>
<p>For larger applications, you would typically separate concerns:</p>
<pre><code>project/
├── config.php          (database connection)
├── index.php           (product list + search)
├── create.php          (add product form)
├── edit.php            (edit product form)
├── delete.php          (delete confirmation)
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── functions.php   (shared helper functions)
└── style.css</code></pre>

<h2>6. Next Steps</h2>
<p>After completing this course, consider learning:</p>
<ul>
    <li><strong>Prepared Statements</strong> — More secure than <code>mysqli_real_escape_string()</code></li>
    <li><strong>PDO</strong> — PHP Data Objects, a more modern database abstraction</li>
    <li><strong>OOP PHP</strong> — Object-Oriented Programming with classes and namespaces</li>
    <li><strong>MVC Frameworks</strong> — Laravel, CodeIgniter, or Symfony</li>
    <li><strong>Authentication</strong> — Login systems with password hashing (password_hash)</li>
    <li><strong>APIs</strong> — Building REST APIs with JSON responses</li>
    <li><strong>File Uploads</strong> — Handling image uploads for products</li>
</ul>

<?php include '../../includes/footer.php'; ?>
