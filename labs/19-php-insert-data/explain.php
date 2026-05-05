<?php
$pageTitle = 'Lab 19: PHP Insert Data — Concept Guide';
$baseUrl = '../style.css';
$currentLab = '19';
include '../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 19: PHP Insert Data</h1>
<p class="subtitle">Inserting data into MySQL from PHP forms.</p>

<h2>1. The Insert Pattern</h2>
<pre><code>&lt;?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Step 1: Sanitize input
    $name = mysqli_real_escape_string($conn, trim($_POST["name"]));
    $price = (float) $_POST["price"];
    $stock = (int) $_POST["stock"];
    $category_id = (int) $_POST["category_id"];

    // Step 2: Build query
    $sql = "INSERT INTO products (name, price, stock, category_id)
            VALUES ('$name', $price, $stock, $category_id)";

    // Step 3: Execute
    if (mysqli_query($conn, $sql)) {
        echo "Product added! ID: " . mysqli_insert_id($conn);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?&gt;</code></pre>

<h2>2. Sanitizing Input</h2>
<pre><code>&lt;?php
// Escape special characters (prevents SQL injection)
$name = mysqli_real_escape_string($conn, $_POST["name"]);

// Trim whitespace
$name = trim($name);

// Cast to specific types
$price = (float) $_POST["price"]; // Ensures numeric
$stock = (int) $_POST["stock"];   // Ensures integer
$id = (int) $_GET["id"];          // Prevents SQL injection in WHERE
?&gt;</code></pre>
<div class="warning-box">
    <strong>Security:</strong> Always sanitize user input before putting it in SQL queries!
    <code>mysqli_real_escape_string()</code> escapes quotes and special characters.
    Type casting (<code>(int)</code>, <code>(float)</code>) ensures numeric values can't contain SQL.
</div>

<h2>3. mysqli_insert_id()</h2>
<p>Returns the auto-generated ID from the last INSERT:</p>
<pre><code>&lt;?php
mysqli_query($conn, "INSERT INTO products (name, price) VALUES ('Test', 100)");
$new_id = mysqli_insert_id($conn);
echo "New product ID: $new_id";
?&gt;</code></pre>

<h2>4. mysqli_affected_rows()</h2>
<p>Returns the number of rows affected by the last query:</p>
<pre><code>&lt;?php
mysqli_query($conn, "INSERT INTO products ...");
echo "Rows inserted: " . mysqli_affected_rows($conn);
?&gt;</code></pre>

<h2>5. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> Not sanitizing input — SQL injection vulnerability!
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> Not quoting string values in SQL — <code>VALUES ($name, ...)</code> should be <code>VALUES ('$name', ...)</code>
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Not checking for errors — <code>mysqli_error($conn)</code> helps debug issues.
</div>

<?php include '../includes/footer.php'; ?>
