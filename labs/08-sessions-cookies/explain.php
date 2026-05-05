<?php
$pageTitle = 'Lab 08: Sessions & Cookies — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '08';
include '../../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 08: Sessions &amp; Cookies</h1>
<p class="subtitle">Maintaining state between HTTP requests in PHP.</p>

<h2>1. Why Do We Need Sessions &amp; Cookies?</h2>
<p>
    HTTP is a <strong>stateless protocol</strong> — each request is independent with no memory of previous requests.
    Sessions and cookies solve this by storing data that persists across multiple page visits.
</p>
<pre><code>Browser Request 1 → Server (no memory of Request 1)
Browser Request 2 → Server (no memory of Request 2)

With Sessions:
Browser Request 1 → Server stores "username=Alice"
Browser Request 2 → Server reads "username=Alice" ✓</code></pre>

<h2>2. Sessions</h2>
<p>Sessions store data on the <strong>server</strong>. Only a session ID is sent to the client.</p>
<pre><code>&lt;?php
// Must be called before any output
session_start();

// Store data
$_SESSION["username"] = "Alice";
$_SESSION["login_time"] = date("H:i:s");

// Read data
echo $_SESSION["username"]; // "Alice"

// Check if session variable exists
if (isset($_SESSION["username"])) {
    echo "Welcome back!";
}

// Remove one variable
unset($_SESSION["login_time"]);

// Destroy entire session
session_unset();  // Remove all session variables
session_destroy(); // Delete the session file
?&gt;</code></pre>

<div class="tip-box">
    <strong>Key points:</strong> <code>session_start()</code> must be called before ANY output (even whitespace).
    Session data is stored in files on the server (typically in <code>/tmp/</code>).
</div>

<h2>3. Cookies</h2>
<p>Cookies store data on the <strong>client</strong> (browser). They are sent with every request.</p>
<pre><code>&lt;?php
// Set a cookie (must be before any output)
// Parameters: name, value, expiry (timestamp), path
setcookie("theme", "dark", time() + 3600, "/");  // Expires in 1 hour
setcookie("lang", "en", time() + 86400, "/");    // Expires in 1 day

// Read a cookie
echo $_COOKIE["theme"] ?? "default"; // "dark"

// Delete a cookie (set expiry in the past)
setcookie("theme", "", time() - 3600, "/");
?&gt;</code></pre>

<h2>4. Sessions vs Cookies</h2>
<table class="compare">
    <tr><th>Feature</th><th>Session</th><th>Cookie</th></tr>
    <tr><td>Storage location</td><td>Server</td><td>Client (browser)</td></tr>
    <tr><td>Storage limit</td><td>Unlimited (server space)</td><td>~4KB per cookie</td></tr>
    <tr><td>Security</td><td>More secure (data on server)</td><td>Less secure (data on client)</td></tr>
    <tr><td>Lifespan</td><td>Until browser closes (default)</td><td>Custom expiry time</td></tr>
    <tr><td>Access</td><td>PHP only (via $_SESSION)</td><td>Accessible via JavaScript</td></tr>
    <tr><td>Best for</td><td>Login state, shopping cart</td><td>Preferences, "remember me"</td></tr>
</table>

<h2>5. Important Rules</h2>
<div class="warning-box">
    <strong>session_start() and setcookie() must be called BEFORE any HTML output!</strong>
    Even a space or newline before <code>&lt;?php</code> will cause a "headers already sent" error.
</div>

<div class="danger-box">
    <strong>Never store sensitive data in cookies!</strong> Users can read and modify cookies in their browser.
    Always validate cookie data on the server.
</div>

<h2>6. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> Calling <code>session_start()</code> after HTML output — causes "headers already sent" error.
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> Reading <code>$_COOKIE["theme"]</code> immediately after <code>setcookie()</code> — the cookie won't be available until the NEXT request (page refresh).
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Forgetting <code>session_start()</code> and then trying to use <code>$_SESSION</code>.
</div>

<?php include '../../includes/footer.php'; ?>
