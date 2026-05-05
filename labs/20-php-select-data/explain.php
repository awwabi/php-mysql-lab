<?php
$pageTitle = 'Lab 20: PHP Select Data — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '20';
include '../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 20: PHP Select Data</h1>
<p class="subtitle">Fetching and displaying data from MySQL.</p>

<h2>1. The Select Pattern</h2>
<pre><code>&lt;?php
include 'config.php';

// Step 1: Run the query
$result = mysqli_query($conn, "SELECT * FROM products ORDER BY id");

// Step 2: Check results
if (mysqli_num_rows($result) &gt; 0) {
    // Step 3: Loop through rows
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["name"] . " - " . $row["price"] . "&lt;br&gt;";
    }
} else {
    echo "No results found.";
}

// Step 4: Free result
mysqli_free_result($result);
mysqli_close($conn);
?&gt;</code></pre>

<h2>2. mysqli_fetch_assoc()</h2>
<p>Returns one row as an associative array (column names as keys):</p>
<pre><code>&lt;?php
$row = mysqli_fetch_assoc($result);
// $row = ["id" =&gt; 1, "name" =&gt; "Laptop", "price" =&gt; 15000000, ...]

echo $row["name"];   // "Laptop"
echo $row["price"];  // 15000000
?&gt;</code></pre>
<div class="tip-box">
    <strong>while loop pattern:</strong> <code>mysqli_fetch_assoc()</code> returns NULL when there are no more rows,
    so the while loop automatically stops.
</div>

<h2>3. Building an HTML Table</h2>
<pre><code>&lt;?php
echo '&lt;table class="data-table"&gt;';
echo '&lt;tr&gt;&lt;th&gt;No&lt;/th&gt;&lt;th&gt;Name&lt;/th&gt;&lt;th&gt;Price&lt;/th&gt;&lt;th&gt;Stock&lt;/th&gt;&lt;/tr&gt;';

$no = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo '&lt;tr&gt;';
    echo '&lt;td&gt;' . $no++ . '&lt;/td&gt;';
    echo '&lt;td&gt;' . htmlspecialchars($row["name"]) . '&lt;/td&gt;';
    echo '&lt;td&gt;' . number_format($row["price"], 0, ',', '.') . '&lt;/td&gt;';
    echo '&lt;td&gt;' . $row["stock"] . '&lt;/td&gt;';
    echo '&lt;/tr&gt;';
}

echo '&lt;/table&gt;';
?&gt;</code></pre>

<h2>4. mysqli_num_rows()</h2>
<p>Returns the number of rows in the result set:</p>
<pre><code>&lt;?php
echo "Total products: " . mysqli_num_rows($result);
?&gt;</code></pre>

<h2>5. Formatting Output</h2>
<pre><code>&lt;?php
// Currency format (Indonesian Rupiah)
$price = 15000000;
echo "Rp " . number_format($price, 0, ',', '.');
// Output: Rp 15.000.000

// Date format
echo date("d M Y", strtotime($row["created_at"]));
?&gt;</code></pre>

<h2>6. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> Not using <code>htmlspecialchars()</code> when displaying user data — XSS vulnerability.
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> Not freeing the result — wastes server memory for large datasets.
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Calling <code>mysqli_fetch_assoc()</code> after the loop — the result pointer is already at the end.
</div>

<?php include '../includes/footer.php'; ?>
