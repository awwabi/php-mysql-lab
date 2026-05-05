<?php
$pageTitle = 'Lab 03: Data Types — Concept Guide';
$baseUrl = '../style.css';
$currentLab = '03';
include '../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 03: Data Types</h1>
<p class="subtitle">Understanding how PHP handles different kinds of data.</p>

<h2>1. Scalar Types</h2>
<p>Scalar types hold a single value:</p>
<pre><code>&lt;?php
$text = "Hello";    // String — text, enclosed in quotes
$age = 20;          // Integer — whole numbers
$price = 9.99;      // Float — decimal numbers
$active = true;     // Boolean — true or false
?&gt;</code></pre>

<div class="tip-box">
    <strong>String:</strong> Can be enclosed in single or double quotes. Double quotes support
    variable interpolation and escape sequences (<code>\n</code>, <code>\t</code>).
</div>

<h2>2. Compound Types</h2>
<p>Compound types hold multiple values:</p>
<pre><code>&lt;?php
$colors = ["red", "green", "blue"]; // Array — ordered list of values
$student = new stdClass();           // Object — instance of a class
$student->name = "Alice";           // Object properties
?&gt;</code></pre>

<h2>3. Special Types</h2>
<pre><code>&lt;?php
$nothing = null;          // NULL — explicitly no value
$file = fopen("test.txt", "r"); // Resource — reference to external resource
?&gt;</code></pre>

<div class="tip-box">
    <strong>NULL vs empty string vs 0:</strong> These are all different in PHP.
    <code>null</code> means "no value at all", <code>""</code> is an empty string,
    and <code>0</code> is an integer. Use <code>===</code> to distinguish them.
</div>

<h2>4. Checking Types with gettype()</h2>
<p><code>gettype()</code> returns a string describing the variable's type:</p>
<pre><code>&lt;?php
$x = 42;
echo gettype($x); // Output: integer

$name = "Alice";
echo gettype($name); // Output: string

$active = true;
echo gettype($active); // Output: boolean
?&gt;</code></pre>

<div class="warning-box">
    <strong>Warning:</strong> <code>gettype()</code> returns <code>"double"</code> for float values
    (historical reason). Don't let this confuse you — <code>float</code> and <code>double</code>
    mean the same thing in PHP.
</div>

<h2>5. Type Juggling</h2>
<p>PHP automatically converts types when needed. This is called <strong>type juggling</strong>:</p>
<pre><code>&lt;?php
$result = "10" + 5;  // PHP converts "10" to int, result: 15
echo gettype($result); // Output: integer

$result = "Hello" . 42; // PHP converts 42 to string, result: "Hello42"
echo gettype($result); // Output: string

$result = 0 == false;  // true — PHP converts false to 0 for comparison
?&gt;</code></pre>

<div class="warning-box">
    <strong>Be careful:</strong> Type juggling can cause unexpected bugs. Always be aware
    of what types you're working with, especially in comparisons.
</div>

<h2>6. Type Casting</h2>
<p>You can explicitly convert a value to a specific type using casting:</p>
<pre><code>&lt;?php
$val = "42abc";
$int = (int) $val;    // 42
$float = (float) $val; // 42.0
$bool = (bool) $val;   // true (non-empty string)
$str = (string) 123;   // "123"
$arr = (array) "hello"; // ["hello"]
?&gt;</code></pre>

<table class="compare">
    <tr>
        <th>Cast</th>
        <th>Example</th>
        <th>Result</th>
    </tr>
    <tr>
        <td><code>(int)</code> or <code>(integer)</code></td>
        <td><code>(int) "42abc"</code></td>
        <td>42</td>
    </tr>
    <tr>
        <td><code>(float)</code> or <code>(double)</code></td>
        <td><code>(float) "3.14"</code></td>
        <td>3.14</td>
    </tr>
    <tr>
        <td><code>(string)</code></td>
        <td><code>(string) 123</code></td>
        <td>"123"</td>
    </tr>
    <tr>
        <td><code>(bool)</code></td>
        <td><code>(bool) ""</code></td>
        <td>false</td>
    </tr>
    <tr>
        <td><code>(array)</code></td>
        <td><code>(array) "hello"</code></td>
        <td>["hello"]</td>
    </tr>
</table>

<h2>7. Type-Checking Functions</h2>
<p>Use <code>is_*</code> functions to check if a variable is a specific type:</p>
<pre><code>&lt;?php
$x = "Hello";
echo is_string($x);   // true
echo is_int($x);      // false
echo is_float($x);    // false
echo is_bool($x);     // false
echo is_array($x);    // false
echo is_null($x);     // false
echo is_numeric($x);  // false (it's a non-numeric string)
?&gt;</code></pre>

<div class="tip-box">
    <strong>Useful:</strong> <code>is_numeric()</code> returns true for numeric strings like "42"
    and "3.14", which is handy for validating form input.
</div>

<h2>8. settype() — In-Place Type Conversion</h2>
<p>Unlike casting (which creates a new value), <code>settype()</code> modifies the variable directly:</p>
<pre><code>&lt;?php
$x = "42";
settype($x, "integer");
echo $x;           // 42
echo gettype($x);  // integer
?&gt;</code></pre>

<h2>9. Values That Evaluate to false</h2>
<p>The following values are considered <strong>falsy</strong> in boolean contexts:</p>
<table class="compare">
    <tr><th>Value</th><th>Type</th><th>Description</th></tr>
    <tr><td><code>false</code></td><td>Boolean</td><td>The boolean false itself</td></tr>
    <tr><td><code>0</code></td><td>Integer</td><td>Integer zero</td></tr>
    <tr><td><code>0.0</code></td><td>Float</td><td>Float zero</td></tr>
    <tr><td><code>""</code></td><td>String</td><td>Empty string</td></tr>
    <tr><td><code>"0"</code></td><td>String</td><td>String "0"</td></tr>
    <tr><td><code>null</code></td><td>NULL</td><td>No value</td></tr>
    <tr><td><code>[]</code></td><td>Array</td><td>Empty array</td></tr>
</table>

<div class="tip-box">
    Everything else evaluates to <code>true</code>, including <code>-1</code>, <code>"false"</code> (a non-empty string!), and <code>"0.0"</code>.
</div>

<h2>10. Common Mistakes</h2>

<div class="danger-box">
    <strong>Mistake 1:</strong> Comparing with <code>==</code> instead of <code>===</code>.
    <code>0 == false</code> is <code>true</code>, but <code>0 === false</code> is <code>false</code>.
    Always use <code>===</code> when types matter.
</div>

<div class="danger-box">
    <strong>Mistake 2:</strong> Assuming <code>"0"</code> is the same as <code>0</code>.
    <code>"0" == 0</code> is <code>true</code> but <code>"0" === 0</code> is <code>false</code>.
</div>

<div class="danger-box">
    <strong>Mistake 3:</strong> Not understanding type juggling in arithmetic.
    <code>"10 apples" + 5</code> gives <code>15</code> (PHP extracts the leading number).
</div>

<?php include '../includes/footer.php'; ?>
