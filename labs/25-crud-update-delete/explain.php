<?php
$pageTitle = 'Lab 25: CRUD Update & Delete — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '25';
include '../../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 25: CRUD Update &amp; Delete</h1>
<p class="subtitle">Full working example of Update and Delete operations.</p>

<h2>1. Edit Flow: SELECT → Form → UPDATE</h2>
<pre><code>&lt;?php
// Step 1: User clicks "Edit" → URL has ?edit_id=5
if (isset($_GET["edit_id"])) {
    $id = (int) $_GET["edit_id"];
    $result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
    $product = mysqli_fetch_assoc($result);
    // Step 2: Show form pre-filled with $product data
}

// Step 3: User submits form → POST with action=update
if ($_POST["action"] === "update") {
    $id = (int) $_POST["id"];
    $name = mysqli_real_escape_string($conn, trim($_POST["name"]));
    $sql = "UPDATE products SET name='$name', ... WHERE id=$id";
    mysqli_query($conn, $sql);
}
?&gt;</code></pre>

<h2>2. Delete Flow: Confirm → DELETE → Redirect</h2>
<pre><code>&lt;?php
// Step 1: User clicks "Delete" link with JS confirm
// &lt;a href="?delete_id=5&amp;confirm=1" onclick="return confirm('Sure?')"&gt;Delete&lt;/a&gt;

// Step 2: PHP executes DELETE
if (isset($_GET["delete_id"]) &amp;&amp; isset($_GET["confirm"])) {
    $id = (int) $_GET["delete_id"];
    mysqli_query($conn, "DELETE FROM products WHERE id = $id");

    // Step 3: Redirect to prevent resubmission
    header("Location: index.php?deleted=1");
    exit;
}
?&gt;</code></pre>

<h2>3. Key Patterns</h2>
<ul>
    <li><strong>Hidden input for ID:</strong> <code>&lt;input type="hidden" name="id"&gt;</code> — passes the record ID through POST</li>
    <li><strong>JavaScript confirm:</strong> <code>onclick="return confirm('Are you sure?')"</code> — client-side confirmation</li>
    <li><strong>Redirect after action:</strong> <code>header("Location: ...")</code> — prevents double-submit on refresh</li>
    <li><strong>Cancel edit:</strong> Link back to the list page to exit edit mode</li>
    <li><strong>mysqli_affected_rows():</strong> Check if UPDATE actually changed anything (0 = no changes)</li>
</ul>

<h2>4. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> Forgetting <code>exit;</code> after <code>header()</code> — script continues executing after the redirect.
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> Not casting the ID with <code>(int)</code> — SQL injection via URL parameter.
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Using UPDATE without WHERE — updates all rows in the table!
</div>

<?php include '../../includes/footer.php'; ?>
