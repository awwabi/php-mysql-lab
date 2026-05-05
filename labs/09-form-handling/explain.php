<?php
$pageTitle = 'Lab 09: Form Handling — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '09';
include __DIR__ . '/../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 09: Form Handling</h1>
<p class="subtitle">Processing HTML forms with PHP.</p>

<h2>1. How Forms Work</h2>
<pre><code>User fills form → Browser submits data → PHP receives data → PHP processes &amp; responds</code></pre>
<p>When a user submits an HTML form, the browser sends the form data to the server. PHP receives this data in superglobal arrays.</p>

<h2>2. GET vs POST</h2>
<table class="compare">
    <tr><th>Feature</th><th>GET</th><th>POST</th></tr>
    <tr><td>Data in URL</td><td>Yes (query string)</td><td>No (request body)</td></tr>
    <tr><td>Data length</td><td>Limited (~2048 chars)</td><td>No limit</td></tr>
    <tr><td>Security</td><td>Visible in URL, browser history</td><td>Hidden from URL</td></tr>
    <tr><td>Idempotent</td><td>Yes (safe to repeat)</td><td>No (not safe to repeat)</td></tr>
    <tr><td>Use for</td><td>Search, filtering, pagination</td><td>Login, registration, data changes</td></tr>
    <tr><td>PHP superglobal</td><td><code>$_GET</code></td><td><code>$_POST</code></td></tr>
</table>

<h2>3. Creating an HTML Form</h2>
<pre><code>&lt;form method="POST" action="process.php"&gt;
    &lt;label for="name"&gt;Name:&lt;/label&gt;
    &lt;input type="text" id="name" name="name" required&gt;

    &lt;label for="email"&gt;Email:&lt;/label&gt;
    &lt;input type="email" id="email" name="email"&gt;

    &lt;button type="submit"&gt;Submit&lt;/button&gt;
&lt;/form&gt;</code></pre>
<div class="tip-box">
    <strong>Key attributes:</strong> <code>name</code> is what PHP uses to access the value.
    <code>method</code> is GET or POST. <code>action</code> is the URL to submit to (empty = same page).
</div>

<h2>4. Handling GET Submissions</h2>
<pre><code>&lt;?php
// URL: ?search=laptop&amp;category=electronics
echo $_GET["search"];   // "laptop"
echo $_GET["category"]; // "electronics"

// Always check if the parameter exists first
if (isset($_GET["search"])) {
    echo "You searched for: " . htmlspecialchars($_GET["search"]);
}
?&gt;</code></pre>

<h2>5. Handling POST Submissions</h2>
<pre><code>&lt;?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    echo "Name: " . htmlspecialchars($name);
    echo "Email: " . htmlspecialchars($email);
}
?&gt;</code></pre>

<h2>6. htmlspecialchars() — Always Use It!</h2>
<p>When outputting user input, ALWAYS escape it to prevent XSS attacks:</p>
<pre><code>&lt;?php
// DANGEROUS — user could inject HTML/JavaScript
echo $_POST["comment"];

// SAFE — special characters are escaped
echo htmlspecialchars($_POST["comment"]);
?&gt;</code></pre>
<div class="danger-box">
    <strong>Without htmlspecialchars():</strong> If a user enters <code>&lt;script&gt;alert('hacked')&lt;/script&gt;</code>,
    it will execute as JavaScript. With it, it displays as plain text.
</div>

<h2>7. Common Form Input Types</h2>
<table class="compare">
    <tr><th>Type</th><th>HTML</th><th>PHP Access</th></tr>
    <tr><td>Text</td><td><code>&lt;input type="text" name="q"&gt;</code></td><td><code>$_POST["q"]</code></td></tr>
    <tr><td>Email</td><td><code>&lt;input type="email" name="email"&gt;</code></td><td><code>$_POST["email"]</code></td></tr>
    <tr><td>Password</td><td><code>&lt;input type="password" name="pw"&gt;</code></td><td><code>$_POST["pw"]</code></td></tr>
    <tr><td>Number</td><td><code>&lt;input type="number" name="age"&gt;</code></td><td><code>$_POST["age"]</code></td></tr>
    <tr><td>Textarea</td><td><code>&lt;textarea name="msg"&gt;&lt;/textarea&gt;</code></td><td><code>$_POST["msg"]</code></td></tr>
    <tr><td>Select</td><td><code>&lt;select name="color"&gt;...&lt;/select&gt;</code></td><td><code>$_POST["color"]</code></td></tr>
    <tr><td>Checkbox</td><td><code>&lt;input type="checkbox" name="agree"&gt;</code></td><td><code>isset($_POST["agree"])</code></td></tr>
    <tr><td>Radio</td><td><code>&lt;input type="radio" name="gender" value="m"&gt;</code></td><td><code>$_POST["gender"]</code></td></tr>
</table>

<h2>8. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> Forgetting the <code>name</code> attribute on form inputs — PHP won't receive the data.
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> Accessing <code>$_POST["field"]</code> without checking if it exists first — causes an "Undefined array key" warning.
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Not using <code>htmlspecialchars()</code> when displaying user input — XSS vulnerability!
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
