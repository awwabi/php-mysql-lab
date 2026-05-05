<?php
$pageTitle = 'Lab 01: PHP Introduction — Concept Guide';
$baseUrl = '../style.css';
$currentLab = '01';
include '../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 01: PHP Introduction</h1>
<p class="subtitle">Getting started with PHP — the language that powers the web.</p>

<h2>1. What is PHP?</h2>
<p>
  PHP is a server-side scripting language designed for web development. It runs on the server,
  generates HTML, and sends it to the browser. This means PHP code is executed before the
  page is sent to the client, and the client only sees the resulting HTML.
</p>
<p class="diagram"><strong>Server-side vs Client-side:</strong> PHP runs on the server; JavaScript
  runs in the browser. PHP can interact with databases, files, and server resources, then output HTML.</p>

<h2>2. How PHP Works</h2>
<p class="diagram">Browser &lt;--&gt; Web Server (Apache/Nginx) &lt;--&gt; PHP Engine &lt;--&gt; HTML &lt;--&gt; Browser</p>

<h2>3. PHP Syntax Basics</h2>
<p>PHP tags indicate where the PHP code starts and ends. The common forms are:</p>
<pre><code>&lt;?php ... ?&gt;</code></pre>
<p>There is also a short echo tag: &lt;?&gt; or &lt;?= ... ?&gt; (where enabled). Use full tags for compatibility.</p>

<h2>4. Output: echo and print</h2>
<p>Two common language constructs to output text:</p>
<pre><code>&lt;?php
echo "Hello from PHP!";
print "Another line.";
?&gt;</code></pre>

<h2>5. Comments in PHP</h2>
<p>Comments explain code and are ignored by the interpreter. Options:</p>
<pre><code>// single-line comment
# another single-line comment
/* multi-line
   comment */
&lt;?php
  // example usage
?&gt;</code></pre>

<h2>6. Embedding PHP in HTML</h2>
<p>You can mix HTML and PHP freely. For example:</p>
<pre><code>&lt;?php echo &quot;Today is &quot; . date(&quot;F j, Y&quot;); ?&gt;
&lt;h2&gt;Welcome!&lt;/h2&gt;</code></pre>

<h2>7. phpinfo()</h2>
<p>phpinfo() prints a large amount of information about the current PHP configuration. Use it for
troubleshooting in a development environment. It should not be exposed in production.</p>
<pre><code>&lt;?php
// Displays current PHP configuration; uncomment to run
// phpinfo();
?&gt;</code></pre>

<h2>8. Common Mistakes</h2>
<ul>
  <li>Forgetting the semicolon ends a statement with a parse error.</li>
  <li>Using PHP opening tags that don’t match your server configuration.</li>
  <li>Mixing HTML and PHP without proper escaping can break markup.</li>
</ul>

<?php include '../includes/footer.php'; ?>
