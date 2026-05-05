<?php
$pageTitle = 'Lab 22: PHP Delete Data — Concept Guide';
$baseUrl = '../style.css';
$currentLab = '22';
include '../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 22: PHP Delete Data</h1>
<p class="subtitle">Deleting records from MySQL using PHP.</p>

<h2>1. The Delete Pattern</h2>
<pre><code>&lt;?php
include 'config.php';
$id = (int) $_GET["id"];

// Step 1: Fetch the record to confirm
$result = mysqli_query($conn, "SELECT name FROM products WHERE id = $id");
$product = mysqli_fetch_assoc($result);

if (!$product) {
    die("Product not found.");
}

// Step 2: If confirmed, execute DELETE
if (isset($_GET["confirm"])) {
    $sql = "DELETE FROM products WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        if (mysqli_affected_rows($conn) &gt; 0) {
            header("Location: ../20-php-select-data/index.php");
            exit;
        }
    }
}
?&gt;</code></pre>

<h2>2. Confirmation Patterns</h2>

<h3>Pattern A: Separate confirmation page (this lab)</h3>
<pre><code>&lt;!-- Show product info and ask for confirmation --&gt;
&lt;p&gt;Delete &lt;strong&gt;&lt;?php echo htmlspecialchars($product['name']); ?&gt;&lt;/strong&gt;?&lt;/p&gt;
&lt;a href="?id=&lt;?php echo $id; ?&gt;&amp;confirm=1"&gt;Yes, Delete&lt;/a&gt;
&lt;a href="../20-php-select-data/index.php"&gt;Cancel&lt;/a&gt;</code></pre>

<h3>Pattern B: JavaScript confirm()</h3>
<pre><code>&lt;a href="delete.php?id=&lt;?php echo $id; ?&gt;"
   onclick="return confirm('Are you sure?')"&gt;
   Delete
&lt;/a&gt;</code></pre>

<h2>3. Safety Rules</h2>
<div class="danger-box">
    <strong>ALWAYS use WHERE clause:</strong> <code>DELETE FROM products WHERE id = $id</code> — never <code>DELETE FROM products</code>
</div>
<div class="danger-box">
    <strong>ALWAYS cast the ID:</strong> <code>$id = (int) $_GET["id"]</code> — prevents SQL injection
</div>
<div class="danger-box">
    <strong>ALWAYS confirm first:</strong> Accidental deletes are irreversible
</div>

<h2>4. Redirect After Delete</h2>
<pre><code>&lt;?php
// After successful delete, redirect to the list page
header("Location: ../20-php-select-data/index.php");
exit; // Always call exit after header redirect
?&gt;</code></pre>
<div class="tip-box">
    <strong>Why redirect?</strong> Prevents the user from accidentally re-deleting by refreshing the page.
</div>

<h2>5. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> No confirmation step — user might click delete accidentally.
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> No redirect after delete — refreshing resubmits the delete.
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Not checking if the record exists — could show a confusing error.
</div>

<?php include '../includes/footer.php'; ?>
