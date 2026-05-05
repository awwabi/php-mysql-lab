<?php
$pageTitle = 'Lab 12: MySQL Data Types — Concept Guide';
$baseUrl = '../style.css';
$currentLab = '12';
include '../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 12: MySQL Data Types</h1>
<p class="subtitle">Choosing the right data type for each column.</p>

<h2>1. Numeric Types</h2>
<table class="compare">
    <tr><th>Type</th><th>Storage</th><th>Range</th><th>Use For</th></tr>
    <tr><td><code>INT</code></td><td>4 bytes</td><td>±2.1 billion</td><td>IDs, counts, ages</td></tr>
    <tr><td><code>BIGINT</code></td><td>8 bytes</td><td>±9.2 quintillion</td><td>Large IDs</td></tr>
    <tr><td><code>FLOAT</code></td><td>4 bytes</td><td>~7 decimal digits</td><td>Approximate decimals</td></tr>
    <tr><td><code>DOUBLE</code></td><td>8 bytes</td><td>~15 decimal digits</td><td>More precise decimals</td></tr>
    <tr><td><code>DECIMAL(m,d)</code></td><td>Variable</td><td>Exact</td><td>Money, prices (DECIMAL(10,2))</td></tr>
    <tr><td><code>TINYINT(1)</code></td><td>1 byte</td><td>0-255</td><td>Boolean (0/1)</td></tr>
</table>
<div class="tip-box">
    <strong>For money:</strong> Always use <code>DECIMAL</code>, never <code>FLOAT</code> or <code>DOUBLE</code>.
    Floating-point types have rounding errors that can cause financial discrepancies.
</div>

<h2>2. String Types</h2>
<table class="compare">
    <tr><th>Type</th><th>Max Length</th><th>Use For</th></tr>
    <tr><td><code>CHAR(n)</code></td><td>255 chars</td><td>Fixed-length (names, codes)</td></tr>
    <tr><td><code>VARCHAR(n)</code></td><td>65,535 chars</td><td>Variable-length (emails, titles)</td></tr>
    <tr><td><code>TEXT</code></td><td>65,535 chars</td><td>Long text (descriptions)</td></tr>
    <tr><td><code>MEDIUMTEXT</code></td><td>16.7 MB</td><td>Articles, content</td></tr>
    <tr><td><code>LONGTEXT</code></td><td>4.3 GB</td><td>Very large content</td></tr>
</table>
<div class="tip-box">
    <strong>CHAR vs VARCHAR:</strong> CHAR pads with spaces to fixed length (faster for exact-length data).
    VARCHAR stores only actual characters + length prefix (better for varying-length data like names).
</div>

<h2>3. Date &amp; Time Types</h2>
<table class="compare">
    <tr><th>Type</th><th>Format</th><th>Use For</th></tr>
    <tr><td><code>DATE</code></td><td>YYYY-MM-DD</td><td>Birthdays, publish dates</td></tr>
    <tr><td><code>TIME</code></td><td>HH:MM:SS</td><td>Opening hours, durations</td></tr>
    <tr><td><code>DATETIME</code></td><td>YYYY-MM-DD HH:MM:SS</td><td>Event timestamps</td></tr>
    <tr><td><code>TIMESTAMP</code></td><td>YYYY-MM-DD HH:MM:SS</td><td>Auto-updating timestamps</td></tr>
</table>
<div class="warning-box">
    <strong>DATETIME vs TIMESTAMP:</strong> DATETIME stores as-is. TIMESTAMP converts to UTC for storage and back to local time for display.
    TIMESTAMP range is limited to 1970-2038.
</div>

<h2>4. AUTO_INCREMENT</h2>
<pre><code>CREATE TABLE example (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50)
);</code></pre>
<div class="tip-box">
    <code>AUTO_INCREMENT</code> automatically generates a unique number for each new row.
    Commonly used for PRIMARY KEY columns. You don't need to specify it in INSERT statements.
</div>

<h2>5. Choosing the Right Type</h2>
<table class="compare">
    <tr><th>Data</th><th>Recommended Type</th></tr>
    <tr><td>Money/Price</td><td><code>DECIMAL(10,2)</code></td></tr>
    <tr><td>Username</td><td><code>VARCHAR(50)</code></td></tr>
    <tr><td>Email</td><td><code>VARCHAR(100)</code></td></tr>
    <tr><td>Password hash</td><td><code>VARCHAR(255)</code></td></tr>
    <tr><td>Yes/No</td><td><code>TINYINT(1)</code></td></tr>
    <tr><td>Created date</td><td><code>DATETIME</code> or <code>TIMESTAMP</code></td></tr>
    <tr><td>Long description</td><td><code>TEXT</code></td></tr>
    <tr><td>Quantity/Count</td><td><code>INT UNSIGNED</code></td></tr>
</table>

<h2>6. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> Using VARCHAR without a length limit — always specify the max length.
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> Using FLOAT for money — use DECIMAL for exact precision.
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Using TEXT for short strings — VARCHAR is more efficient for strings under 255 chars.
</div>

<?php include '../includes/footer.php'; ?>
