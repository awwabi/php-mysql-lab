<?php
$pageTitle = 'Lab 24: CRUD Create & Read — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '24';
include '../../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 24: CRUD Create &amp; Read</h1>
<p class="subtitle">Full working example of Create and Read operations.</p>

<h2>1. The Complete Create Flow</h2>
<pre><code>&lt;?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 1. Sanitize
    $name = mysqli_real_escape_string($conn, trim($_POST["name"]));
    $price = (float) $_POST["price"];
    $stock = (int) $_POST["stock"];
    $category_id = (int) $_POST["category_id"];

    // 2. Validate
    if (empty($name) || $price &lt;= 0) {
        $error = "Invalid input";
    } else {
        // 3. Build & execute query
        $sql = "INSERT INTO products (name, price, stock, category_id)
                VALUES ('$name', $price, $stock, $category_id)";
        mysqli_query($conn, $sql);
    }
}
?&gt;</code></pre>

<h2>2. The Complete Read Flow</h2>
<pre><code>&lt;?php
// Query with JOIN for category name
$sql = "SELECT p.*, c.name AS category_name
        FROM products p
        LEFT JOIN categories c ON p.category_id = c.id
        ORDER BY p.id DESC";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    // Display each product
    echo $row["name"] . " - Rp " . number_format($row["price"], 0, ',', '.');
}
mysqli_free_result($result);
?&gt;</code></pre>

<h2>3. Key Patterns Used</h2>
<ul>
    <li><strong>Sticky form:</strong> <code>value="&lt;?php echo htmlspecialchars($_POST['name'] ?? ''); ?&gt;"</code> — keeps input after error</li>
    <li><strong>Type casting:</strong> <code>(float)</code>, <code>(int)</code> — prevents SQL injection in numeric fields</li>
    <li><strong>LEFT JOIN:</strong> Includes products even if they have no category</li>
    <li><strong>number_format():</strong> Formats prices as Indonesian Rupiah (e.g., 15.000.000)</li>
    <li><strong>htmlspecialchars():</strong> Escapes output to prevent XSS</li>
</ul>

<h2>4. Form Layout Best Practices</h2>
<ul>
    <li>Use <code>&lt;label&gt;</code> elements for accessibility</li>
    <li>Set <code>required</code> attribute for mandatory fields</li>
    <li>Use appropriate input types (<code>number</code>, <code>text</code>, <code>email</code>)</li>
    <li>Provide placeholders as hints</li>
    <li>Show clear success/error messages</li>
</ul>

<?php include '../../includes/footer.php'; ?>
