<?php
$pageTitle = 'Lab 10: Form Validation — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '10';
include __DIR__ . '/../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 10: Form Validation</h1>
<p class="subtitle">Validating and sanitizing user input in PHP.</p>

<h2>1. Why Validate?</h2>
<p>
    <strong>Never trust user input.</strong> Users can submit empty fields, wrong formats, malicious code, or extremely long strings.
    Validation ensures data is correct before you process or store it.
</p>
<pre><code>Form Submit → Validate → If errors: show form + errors → If valid: process data</code></pre>

<h2>2. Checking for Empty/Existing Values</h2>
<pre><code>&lt;?php
// Check if a variable exists and is not null
if (isset($_POST["name"])) {
    echo "Name was submitted";
}

// Check if a variable is empty ("", 0, null, false, "0")
if (empty($_POST["name"])) {
    echo "Name is required";
}

// Best practice: trim whitespace first, then check
$name = trim($_POST["name"] ?? "");
if ($name === "") {
    echo "Name is required";
}
?&gt;</code></pre>
<div class="tip-box">
    <strong>empty() vs isset():</strong> <code>isset()</code> checks if a variable exists and is not null.
    <code>empty()</code> checks if a variable is falsy (not set, null, "", 0, "0", false, []).
</div>

<h2>3. Validating Email</h2>
<pre><code>&lt;?php
$email = trim($_POST["email"] ?? "");

if (empty($email)) {
    $errors[] = "Email is required";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format";
}
?&gt;</code></pre>
<div class="tip-box">
    <strong>filter_var()</strong> with <code>FILTER_VALIDATE_EMAIL</code> checks that the email has a valid format.
    It doesn't check if the email actually exists — only the format.
</div>

<h2>4. Validating Numbers</h2>
<pre><code>&lt;?php
$age = $_POST["age"] ?? "";

if (!is_numeric($age)) {
    $errors[] = "Age must be a number";
} elseif ($age &lt; 1 || $age &gt; 120) {
    $errors[] = "Age must be between 1 and 120";
}
?&gt;</code></pre>

<h2>5. Sanitizing Input</h2>
<pre><code>&lt;?php
// Remove extra whitespace
$name = trim($_POST["name"]);

// Remove backslashes added by "magic quotes" (old PHP)
$name = stripslashes($name);

// Escape HTML special characters (prevents XSS)
$name = htmlspecialchars($name);

// All-in-one: filter_input() for GET/POST
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
?&gt;</code></pre>

<h2>6. Validation Pattern (Best Practice)</h2>
<pre><code>&lt;?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate each field
    if (empty(trim($_POST["name"]))) {
        $errors[] = "Name is required";
    }
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    if (strlen($_POST["password"]) &lt; 8) {
        $errors[] = "Password must be at least 8 characters";
    }

    // If no errors, process the data
    if (empty($errors)) {
        // Safe to process
        header("Location: success.php");
        exit;
    }
}

// Show errors
foreach ($errors as $error) {
    echo "&lt;p style='color:red'&gt;$error&lt;/p&gt;";
}
?&gt;</code></pre>

<h2>7. Sticky Forms (Keep Values After Error)</h2>
<p>When validation fails, keep the user's input so they don't have to retype everything:</p>
<pre><code>&lt;input type="text" name="name"
    value="&lt;?php echo htmlspecialchars($_POST['name'] ?? ''); ?&gt;"&gt;</code></pre>

<h2>8. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> Only validating on the client side (HTML5 <code>required</code>, <code>pattern</code>) — users can bypass these with browser dev tools. Always validate on the server too.
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> Not using <code>trim()</code> — a string of spaces would pass <code>empty()</code> check? No, actually <code>empty("  ")</code> is false. Use <code>empty(trim($input))</code>.
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Showing detailed error messages to users that reveal system information. Keep error messages user-friendly and vague about internals.
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
