<?php
$pageTitle = 'Lab 04: Operators — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '04';
include '../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 04: Operators</h1>
<p class="subtitle">Performing operations on data in PHP.</p>

<h2>1. Arithmetic Operators</h2>
<p>Used for mathematical calculations:</p>
<table class="compare">
    <tr><th>Operator</th><th>Name</th><th>Example</th><th>Result</th></tr>
    <tr><td><code>+</code></td><td>Addition</td><td><code>5 + 3</code></td><td>8</td></tr>
    <tr><td><code>-</code></td><td>Subtraction</td><td><code>5 - 3</code></td><td>2</td></tr>
    <tr><td><code>*</code></td><td>Multiplication</td><td><code>5 * 3</code></td><td>15</td></tr>
    <tr><td><code>/</code></td><td>Division</td><td><code>10 / 3</code></td><td>3.333...</td></tr>
    <tr><td><code>%</code></td><td>Modulo (remainder)</td><td><code>10 % 3</code></td><td>1</td></tr>
    <tr><td><code>**</code></td><td>Exponentiation</td><td><code>2 ** 3</code></td><td>8</td></tr>
</table>
<pre><code>&lt;?php
$a = 15;
$b = 4;
echo $a + $b;  // 19
echo $a - $b;  // 11
echo $a * $b;  // 60
echo $a / $b;  // 3.75
echo $a % $b;  // 3 (remainder)
echo $a ** $b; // 50625
?&gt;</code></pre>

<div class="tip-box">
    <strong>Integer division:</strong> Use <code>intdiv(10, 3)</code> to get <code>3</code> instead of <code>3.333...</code>
</div>

<h2>2. Assignment Operators</h2>
<p>Assign and update values:</p>
<table class="compare">
    <tr><th>Operator</th><th>Equivalent</th><th>Example</th></tr>
    <tr><td><code>=</code></td><td>—</td><td><code>$x = 10;</code></td></tr>
    <tr><td><code>+=</code></td><td><code>$x = $x + 5</code></td><td><code>$x += 5;</code></td></tr>
    <tr><td><code>-=</code></td><td><code>$x = $x - 3</code></td><td><code>$x -= 3;</code></td></tr>
    <tr><td><code>*=</code></td><td><code>$x = $x * 2</code></td><td><code>$x *= 2;</code></td></tr>
    <tr><td><code>/=</code></td><td><code>$x = $x / 4</code></td><td><code>$x /= 4;</code></td></tr>
    <tr><td><code>.=</code></td><td><code>$x = $x . "text"</code></td><td><code>$x .= "text";</code></td></tr>
</table>
<pre><code>&lt;?php
$x = 10;
$x += 5;  // $x is now 15
$x -= 3;  // $x is now 12
$x *= 2;  // $x is now 24
$x /= 4;  // $x is now 6
echo $x;   // Output: 6
?&gt;</code></pre>

<h2>3. Comparison Operators</h2>
<p>Compare two values and return <code>true</code> or <code>false</code>:</p>
<table class="compare">
    <tr><th>Operator</th><th>Name</th><th>Result</th></tr>
    <tr><td><code>==</code></td><td>Equal (loose)</td><td><code>5 == "5"</code> → true</td></tr>
    <tr><td><code>===</code></td><td>Identical (strict)</td><td><code>5 === "5"</code> → false</td></tr>
    <tr><td><code>!=</code></td><td>Not equal</td><td><code>5 != 3</code> → true</td></tr>
    <tr><td><code>!==</code></td><td>Not identical</td><td><code>5 !== "5"</code> → true</td></tr>
    <tr><td><code>&lt;</code></td><td>Less than</td><td><code>3 &lt; 5</code> → true</td></tr>
    <tr><td><code>&gt;</code></td><td>Greater than</td><td><code>5 &gt; 3</code> → true</td></tr>
    <tr><td><code>&lt;=</code></td><td>Less than or equal</td><td><code>5 &lt;= 5</code> → true</td></tr>
    <tr><td><code>&gt;=</code></td><td>Greater than or equal</td><td><code>5 &gt;= 5</code> → true</td></tr>
</table>

<div class="warning-box">
    <strong>Critical:</strong> <code>==</code> does type juggling (coerces types before comparing),
    while <code>===</code> checks both value AND type. Always prefer <code>===</code> unless
    you explicitly want type coercion.
</div>
<pre><code>&lt;?php
$a = 5;
$b = "5";
var_dump($a == $b);   // bool(true)  — loose comparison
var_dump($a === $b);  // bool(false) — strict comparison
?&gt;</code></pre>

<h2>4. Logical Operators</h2>
<p>Combine boolean expressions:</p>
<table class="compare">
    <tr><th>Operator</th><th>Name</th><th>Example</th><th>Result</th></tr>
    <tr><td><code>&amp;&amp;</code> or <code>and</code></td><td>AND</td><td><code>true &amp;&amp; false</code></td><td>false</td></tr>
    <tr><td><code>||</code> or <code>or</code></td><td>OR</td><td><code>true || false</code></td><td>true</td></tr>
    <tr><td><code>!</code></td><td>NOT</td><td><code>!true</code></td><td>false</td></tr>
</table>
<pre><code>&lt;?php
$age = 25;
$hasID = true;
echo ($age >= 18 &amp;&amp; $hasID); // true — both conditions met
echo ($age >= 18 || $hasID);    // true — at least one met
echo !($age >= 18);             // false — negated
?&gt;</code></pre>

<div class="warning-box">
    <strong>Precedence difference:</strong> <code>&amp;&amp;</code> has higher precedence than <code>and</code>,
    and <code>||</code> has higher precedence than <code>or</code>. This can cause subtle bugs
    when mixing with assignment. Prefer <code>&amp;&amp;</code> and <code>||</code>.
</div>

<h2>5. String Operators</h2>
<p>The dot (<code>.</code>) operator concatenates strings:</p>
<pre><code>&lt;?php
$first = "Hello";
$last = "World";
echo $first . " " . $last; // Output: Hello World

// Append with .=
$msg = "Hello";
$msg .= " World";
echo $msg; // Output: Hello World
?&gt;</code></pre>

<h2>6. Increment / Decrement</h2>
<table class="compare">
    <tr><th>Operator</th><th>Name</th><th>Description</th></tr>
    <tr><td><code>++$x</code></td><td>Pre-increment</td><td>Increment first, then return</td></tr>
    <tr><td><code>$x++</code></td><td>Post-increment</td><td>Return first, then increment</td></tr>
    <tr><td><code>--$x</code></td><td>Pre-decrement</td><td>Decrement first, then return</td></tr>
    <tr><td><code>$x--</code></td><td>Post-decrement</td><td>Return first, then decrement</td></tr>
</table>
<pre><code>&lt;?php
$n = 5;
echo $n++;  // Output: 5 (returns 5, then $n becomes 6)
echo $n;    // Output: 6
echo ++$n;  // Output: 7 ($n becomes 7 first, then returns 7)
echo --$n;  // Output: 6 ($n becomes 6 first, then returns 6)
?&gt;</code></pre>

<h2>7. Ternary and Null Coalescing</h2>
<h3>Ternary operator (<code>? :</code>)</h3>
<pre><code>&lt;?php
$score = 75;
$status = ($score >= 60) ? "Pass" : "Fail";
echo $status; // Output: Pass
?&gt;</code></pre>

<h3>Null coalescing operator (<code>??</code>)</h3>
<p>Returns the left operand if it exists and is not null, otherwise the right operand:</p>
<pre><code>&lt;?php
$name = $_GET["name"] ?? "Guest";
echo $name; // Uses $_GET["name"] if set, otherwise "Guest"

$city = null;
$city = $city ?? "Jakarta";
echo $city; // Output: Jakarta
?&gt;</code></pre>

<div class="tip-box">
    <strong>Tip:</strong> Use <code>??</code> instead of <code>isset()</code> checks — it's cleaner and safer.
    It also doesn't throw an error if the variable doesn't exist.
</div>

<h2>8. Spaceship Operator (<code>&lt;=&gt;</code>)</h2>
<p>Returns <code>-1</code>, <code>0</code>, or <code>1</code> based on comparison:</p>
<pre><code>&lt;?php
echo 5 &lt;=&gt; 3; // 1  (5 is greater)
echo 3 &lt;=&gt; 5; // -1 (3 is smaller)
echo 5 &lt;=&gt; 5; // 0  (equal)
?&gt;</code></pre>
<div class="tip-box">
    Useful for sorting with <code>usort()</code> — returns a consistent comparison value.
</div>

<h2>9. Operator Precedence</h2>
<p>When multiple operators are used, PHP follows precedence rules:</p>
<pre><code>&lt;?php
echo 2 + 3 * 4;      // 14 (multiplication before addition)
echo (2 + 3) * 4;    // 20 (parentheses override precedence)
echo true &amp;&amp; false || true; // true (&& before ||)
?&gt;</code></pre>
<div class="warning-box">
    <strong>Rule of thumb:</strong> When in doubt, use parentheses. It makes your intent clear
    and avoids precedence bugs.
</div>

<h2>10. Common Mistakes</h2>

<div class="danger-box">
    <strong>Mistake 1:</strong> Using <code>=</code> (assignment) instead of <code>==</code> (comparison) in conditions.<br>
    <code>if ($x = 5)</code> always evaluates to true because it assigns 5 and returns 5 (truthy).
</div>

<div class="danger-box">
    <strong>Mistake 2:</strong> Using <code>==</code> when you need <code>===</code>.<br>
    <code>0 == "hello"</code> is actually <code>false</code> (PHP coerces "hello" to 0), but the behavior is confusing.
</div>

<div class="danger-box">
    <strong>Mistake 3:</strong> Mixing <code>and</code>/<code>or</code> with assignment.<br>
    <code>$result = false || true</code> gives <code>$result = true</code>,<br>
    but <code>$result = false or true</code> gives <code>$result = false</code> (because <code>=</code> has higher precedence than <code>or</code>).
</div>

<?php include '../includes/footer.php'; ?>
