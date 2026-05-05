<?php
$pageTitle = 'Lab 07: Arrays — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '07';
include __DIR__ . '/../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 07: Arrays</h1>
<p class="subtitle">Storing and managing multiple values in PHP.</p>

<h2>1. Indexed Arrays</h2>
<p>Arrays with numeric keys (auto-assigned starting from 0):</p>
<pre><code>&lt;?php
$colors = ["red", "green", "blue"];
echo $colors[0];   // "red"
echo $colors[1];   // "green"
echo count($colors); // 3
?&gt;</code></pre>
<div class="tip-box">
    <strong>Note:</strong> PHP arrays start at index 0. The <code>count()</code> function returns the total number of elements.
</div>

<h2>2. Associative Arrays</h2>
<p>Arrays with named keys (string keys):</p>
<pre><code>&lt;?php
$student = [
    "name" =&gt; "Alice",
    "nim" =&gt; "2701234567",
    "major" =&gt; "Computer Science"
];
echo $student["name"];  // "Alice"
echo $student["nim"];   // "2701234567"
?&gt;</code></pre>

<h2>3. Multidimensional Arrays</h2>
<p>Arrays containing other arrays (arrays of arrays):</p>
<pre><code>&lt;?php
$students = [
    ["name" =&gt; "Alice", "grade" =&gt; "A"],
    ["name" =&gt; "Bob", "grade" =&gt; "B"],
    ["name" =&gt; "Charlie", "grade" =&gt; "A"]
];

echo $students[0]["name"];  // "Alice"
echo $students[1]["grade"]; // "B"

// Loop through all students
foreach ($students as $s) {
    echo $s["name"] . ": " . $s["grade"] . "\n";
}
?&gt;</code></pre>

<h2>4. Adding and Removing Elements</h2>
<pre><code>&lt;?php
$fruits = ["Apple", "Banana"];

// Add to end
array_push($fruits, "Cherry");
// Or: $fruits[] = "Cherry";

// Remove from end
$removed = array_pop($fruits);  // "Cherry"

// Add to beginning
array_unshift($fruits, "Avocado");

// Remove from beginning
$removed = array_shift($fruits); // "Avocado"
?&gt;</code></pre>

<h2>5. Common Array Functions</h2>
<table class="compare">
    <tr><th>Function</th><th>Purpose</th><th>Example</th></tr>
    <tr><td><code>count()</code></td><td>Count elements</td><td><code>count($arr)</code> → 3</td></tr>
    <tr><td><code>sort()</code></td><td>Sort indexed array</td><td><code>sort($numbers)</code></td></tr>
    <tr><td><code>asort()</code></td><td>Sort associative by value</td><td><code>asort($assoc)</code></td></tr>
    <tr><td><code>ksort()</code></td><td>Sort associative by key</td><td><code>ksort($assoc)</code></td></tr>
    <tr><td><code>in_array()</code></td><td>Check if value exists</td><td><code>in_array("red", $arr)</code></td></tr>
    <tr><td><code>array_merge()</code></td><td>Combine arrays</td><td><code>array_merge($a, $b)</code></td></tr>
    <tr><td><code>array_keys()</code></td><td>Get all keys</td><td><code>array_keys($assoc)</code></td></tr>
    <tr><td><code>array_values()</code></td><td>Get all values</td><td><code>array_values($assoc)</code></td></tr>
    <tr><td><code>explode()</code></td><td>String to array</td><td><code>explode(",", "a,b,c")</code></td></tr>
    <tr><td><code>implode()</code></td><td>Array to string</td><td><code>implode(",", $arr)</code></td></tr>
</table>

<h2>6. Iterating with foreach</h2>
<pre><code>&lt;?php
$fruits = ["Apple", "Banana", "Cherry"];

// Values only
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

$person = ["name" =&gt; "Alice", "age" =&gt; 20];

// Key and value
foreach ($person as $key =&gt; $value) {
    echo "$key: $value\n";
}
?&gt;</code></pre>

<h2>7. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> Accessing an index that doesn't exist — causes an "undefined array key" warning in PHP 8.
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> Using <code>sort()</code> on an associative array — it re-indexes the keys! Use <code>asort()</code> instead.
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Forgetting that <code>array_pop()</code> and <code>array_shift()</code> modify the original array (not just return a value).
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
