<?php
$pageTitle = 'Lab 18: Database Connection — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '18';
include '../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 18: Database Connection</h1>
<p class="subtitle">Connecting PHP to MySQL using MySQLi.</p>

<h2>1. The Connection Pattern</h2>
<pre><code>&lt;?php
// Step 1: Include config (or define variables directly)
include 'config.php';

// Step 2: Connect
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Step 3: Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 4: Run queries...
// Step 5: Close connection
mysqli_close($conn);
?&gt;</code></pre>

<h2>2. mysqli_connect() Parameters</h2>
<table class="compare">
    <tr><th>Parameter</th><th>Description</th><th>Example</th></tr>
    <tr><td><code>$host</code></td><td>Server address</td><td><code>"localhost"</code></td></tr>
    <tr><td><code>$user</code></td><td>MySQL username</td><td><code>"root"</code></td></tr>
    <tr><td><code>$pass</code></td><td>MySQL password</td><td><code>""</code> (XAMPP default: empty)</td></tr>
    <tr><td><code>$dbname</code></td><td>Database name</td><td><code>"php_mysql_lab"</code></td></tr>
</table>

<h2>3. Error Handling</h2>
<pre><code>&lt;?php
$conn = mysqli_connect("localhost", "root", "", "php_mysql_lab");

if (!$conn) {
    // Connection failed
    die("Connection failed: " . mysqli_connect_error());
    // mysqli_connect_error() returns a human-readable error message
}

echo "Connected successfully!";
?&gt;</code></pre>

<h2>4. Running a Test Query</h2>
<pre><code>&lt;?php
$result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM products");

if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo "Total products: " . $row["total"];
    mysqli_free_result($result); // Free memory
}
?&gt;</code></pre>

<h2>5. include vs require</h2>
<table class="compare">
    <tr><th>Feature</th><th><code>include</code></th><th><code>require</code></th></tr>
    <tr><td>File not found</td><td>Warning, script continues</td><td>Fatal error, script stops</td></tr>
    <tr><td>Use when</td><td>Optional file</td><td>Essential file (like config)</td></tr>
</table>
<div class="tip-box">
    <strong>Best practice:</strong> Use <code>require</code> for essential files like database config.
    If the config is missing, the page should NOT load.
</div>

<h2>6. Closing the Connection</h2>
<pre><code>&lt;?php
mysqli_close($conn); // Explicitly close (optional — PHP closes it at script end)
?&gt;</code></pre>

<h2>7. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> MySQL service not started in XAMPP — connection will always fail.
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> Wrong database name — check phpMyAdmin for the exact name.
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Not checking connection before running queries — causes cryptic errors later.
</div>

<?php include '../includes/footer.php'; ?>
