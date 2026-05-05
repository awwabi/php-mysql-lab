<?php
$pageTitle = 'Lab 21: PHP Update Data — Concept Guide';
$baseUrl = '../style.css';
$currentLab = '21';
include '../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 21: PHP Update Data</h1>
<p class="subtitle">Updating records in MySQL from PHP.</p>

<h2>1. The Update Pattern</h2>
<pre><code>&lt;?php
include 'config.php';
$id = (int) $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Step 1: Sanitize input
    $name = mysqli_real_escape_string($conn, trim($_POST["name"]));
    $price = (float) $_POST["price"];
    $stock = (int) $_POST["stock"];

    // Step 2: Build UPDATE query with WHERE
    $sql = "UPDATE products SET name='$name', price=$price, stock=$stock WHERE id=$id";

    // Step 3: Execute
    if (mysqli_query($conn, $sql)) {
        if (mysqli_affected_rows($conn) &gt; 0) {
            echo "Product updated!";
        } else {
            echo "No changes made.";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?&gt;</code></pre>

<h2>2. Pre-filling the Edit Form</h2>
<p>Before showing the form, fetch the current data:</p>
<pre><code>&lt;?php
$id = (int) $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
$product = mysqli_fetch_assoc($result);
?&gt;

&lt;form method="POST"&gt;
    &lt;input name="name" value="&lt;?php echo htmlspecialchars($product['name']); ?&gt;"&gt;
    &lt;input name="price" type="number" value="&lt;?php echo $product['price']; ?&gt;"&gt;
    &lt;input name="stock" type="number" value="&lt;?php echo $product['stock']; ?&gt;"&gt;
    &lt;button type="submit"&gt;Update&lt;/button&gt;
&lt;/form&gt;</code></pre>

<h2>3. The PRG Pattern (Post-Redirect-Get)</h2>
<p>Prevent form resubmission on browser refresh:</p>
<pre><code>&lt;?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // ... process update ...

    // Redirect to the same page (GET request)
    header("Location: index.php?id=$id&success=1");
    exit; // Stop script execution
}

// On GET, show success message if redirected
if (isset($_GET["success"])) {
    echo "&lt;p class='tip-box'&gt;Product updated successfully!&lt;/p&gt;";
}
?&gt;</code></pre>

<h2>4. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> Forgetting WHERE clause — <code>UPDATE products SET price = 0</code> updates ALL rows!
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> Not casting the ID — <code>$_GET["id"]</code> could be malicious. Always use <code>(int)</code>.
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Not checking if the record exists before showing the form.
</div>

<?php include '../includes/footer.php'; ?>
