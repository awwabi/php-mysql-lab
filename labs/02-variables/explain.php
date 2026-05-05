<?php
$pageTitle = 'Lab 02: Variables — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '02';
include '../../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 02: Variables</h1>
<p class="subtitle">Storing and using data in PHP.</p>

<h2>1. What are Variables?</h2>
<p>
    A variable is a <strong>container for storing data</strong>. Think of it as a labeled box
    where you put a value, and you can retrieve it later using the label (variable name).
</p>
<p>
    In PHP, all variables start with a dollar sign (<code>$</code>). This makes it easy to
    distinguish variables from functions and keywords.
</p>

<h2>2. Declaring Variables</h2>
<p>
    You create (declare) a variable by using the assignment operator (<code>=</code>):
</p>
<pre><code>&lt;?php
$name = "Alice";      // string
$age = 20;            // integer
$price = 99.99;       // float
$isStudent = true;    // boolean
$grades = [85, 90, 78]; // array
?&gt;</code></pre>

<div class="tip-box">
    <strong>Key point:</strong> PHP automatically determines the data type based on the value
    you assign. You don't need to declare the type beforehand (unlike Java or C).
</div>

<h2>3. Naming Rules</h2>
<p>Variable names must follow these rules:</p>
<table class="compare">
    <tr>
        <th>Rule</th>
        <th>Valid</th>
        <th>Invalid</th>
    </tr>
    <tr>
        <td>Must start with <code>$</code></td>
        <td><code>$name</code>, <code>$_count</code>, <code>$item1</code></td>
        <td><code>name</code>, <code>1item</code></td>
    </tr>
    <tr>
        <td>Second character: letter or underscore</td>
        <td><code>$my_var</code>, <code>$firstName</code></td>
        <td><code>$1name</code>, <code>$my-var</code></td>
    </tr>
    <tr>
        <td>Case-sensitive</td>
        <td><code>$Name</code> and <code>$name</code> are different</td>
        <td>—</td>
    </tr>
    <tr>
        <td>No spaces or hyphens</td>
        <td><code>$myName</code>, <code>$my_name</code></td>
        <td><code>$my Name</code>, <code>$my-name</code></td>
    </tr>
</table>

<h2>4. String Concatenation vs Interpolation</h2>
<p>There are two ways to include variables inside strings:</p>

<h3>Concatenation with <code>.</code> operator:</h3>
<pre><code>&lt;?php
$first = "Hello";
$second = "World";
$full = $first . " " . $second;
echo $full; // Output: Hello World
?&gt;</code></pre>

<h3>Interpolation (inside double quotes):</h3>
<pre><code>&lt;?php
$name = "Alice";
echo "My name is $name"; // Output: My name is Alice
?&gt;</code></pre>

<div class="warning-box">
    <strong>Important:</strong> Variable interpolation ONLY works inside <strong>double quotes</strong>.
    Single quotes treat variables as plain text:
</div>
<pre><code>&lt;?php
$name = "Alice";
echo 'My name is $name'; // Output: My name is $name (literally!)
echo "My name is $name"; // Output: My name is Alice
?&gt;</code></pre>

<h2>5. Single Quotes vs Double Quotes</h2>
<table class="compare">
    <tr>
        <th>Feature</th>
        <th>Single Quotes <code>'...'</code></th>
        <th>Double Quotes <code>"..."</code></th>
    </tr>
    <tr>
        <td>Variable parsing</td>
        <td>No — treats as plain text</td>
        <td>Yes — replaces with value</td>
    </tr>
    <tr>
        <td>Escape sequences</td>
        <td>Only <code>\\</code> and <code>\'</code></td>
        <td>All: <code>\n</code>, <code>\t</code>, <code>\$</code></td>
    </tr>
    <tr>
        <td>Performance</td>
        <td>Slightly faster</td>
        <td>Slightly slower (parses for vars)</td>
    </tr>
</table>

<div class="tip-box">
    <strong>Best practice:</strong> Use single quotes for plain strings and double quotes
    when you need variable interpolation or escape sequences.
</div>

<h2>6. Reassigning Variables</h2>
<p>Variables can be reassigned at any time. The old value is lost:</p>
<pre><code>&lt;?php
$score = 80;
echo $score; // Output: 80
$score = 95;
echo $score; // Output: 95 (old value is gone)
?&gt;</code></pre>

<h2>7. Variable Scope</h2>
<p>
    <strong>Scope</strong> refers to where a variable can be accessed:
</p>
<ul>
    <li><strong>Global scope:</strong> Variables declared outside functions</li>
    <li><strong>Local scope:</strong> Variables declared inside functions (not accessible outside)</li>
</ul>
<pre><code>&lt;?php
$greeting = "Hello"; // Global scope

function sayHello() {
    $greeting = "Hi"; // Local scope (different variable!)
    echo $greeting; // Output: Hi
}

sayHello();
echo $greeting; // Output: Hello (global variable unchanged)
?&gt;</code></pre>

<div class="tip-box">
    <strong>Note:</strong> We'll cover scope in more detail when we learn functions later.
    For now, just know that variables inside functions are separate from variables outside.
</div>

<h2>8. Common Mistakes</h2>

<h3>Mistake 1: Forgetting the <code>$</code> sign</h3>
<div class="danger-box">
    <strong>Wrong:</strong> <code>name = "Alice";</code><br>
    <strong>Right:</strong> <code>$name = "Alice";</code>
</div>

<h3>Mistake 2: Using undefined variables</h3>
<div class="danger-box">
    <strong>Wrong:</strong> Echoing <code>$undefinedVar</code> without assigning it first (shows a warning in PHP 8).<br>
    <strong>Right:</strong> Always assign a value before using a variable.
</div>

<h3>Mistake 3: Case sensitivity confusion</h3>
<div class="danger-box">
    <strong>Wrong:</strong> Setting <code>$Name</code> then reading <code>$name</code> (they're different!).<br>
    <strong>Right:</strong> Be consistent with your naming convention.
</div>

<?php include '../../includes/footer.php'; ?>
