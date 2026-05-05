<?php
$pageTitle = 'Lab 05: Selection – Explain';
$baseUrl = '../../style.css';
$currentLab = '05';
include '../includes/header.php';
?>

<pre class="box-header" aria-label="Lab Explain Header">
┌───────────────────────────────────┐
│ Lab 05: Selection – Explain       │
└───────────────────────────────────┘
</pre>

<div class="back-link"><a href="<?php echo $baseUrl; ?>" class="back-link">Back to Lab Home</a></div>

<h2 class="subtitle">What is Selection/Conditional Logic?</h2>
<div class="tip-box">
Selection and conditional logic let a PHP script decide which path to take based on tests, such as comparing numbers or evaluating string values. It enables branching behavior to produce different outputs.
</div>

<h3 class="subtitle">1) if Statement</h3>
<div class="warning-box">
An if statement runs its body only if the condition evaluates to true.
</div>
<pre><code>// Example
$score = 75;
if ($score &gt;= 50) {
    echo 'Passing';
}
</code></pre>

<h3 class="subtitle">2) if/else Statement</h3>
<div class="tip-box">The else branch executes when the condition is false.</div>
<pre><code>// Example
$age = 16;
if ($age &ge; 18) {
    echo 'Adult';
} else {
    echo 'Minor';
}
</code></pre>

<h3 class="subtitle">3) if/elseif/else</h3>
<div class="tip-box">Use elseif to chain multiple mutually exclusive conditions.</div>
<pre><code>// Example
$score = 88;
if ($score &ge; 90) {
    $grade = 'A';
} elseif ($score &ge; 80) {
    $grade = 'B';
} else {
    $grade = 'C or lower';
}
echo $grade;
</code></pre>

<h3 class="subtitle">4) switch/case (break, default)</h3>
<div class="tip-box">Switch handles many discrete values; remember to break or use match-default patterns in PHP 8+.</div>
<pre><code>// Example
$day = 'Wednesday';
switch ($day) {
    case 'Monday': echo 'Start'; break;
    case 'Friday': echo 'Finish'; break;
    default: echo 'Midweek';
}
</code></pre>

<h3 class="subtitle">5) match Expression (PHP 8 — stricter, returns values)</h3>
<div class="tip-box">match is like a switch but returns a value and uses strict comparison semantics. Requires PHP 8+.</div>
<pre><code>// Example
$score = 92;
$grade = match (true) {
    $score &ge; 90 => 'A',
    $score &ge; 80 => 'B',
    $score &ge; 70 => 'C',
    default => 'D',
};
echo $grade;
</code></pre>

<h3 class="subtitle">6) Ternary as Shorthand</h3>
<div class="tip-box">Ternary operator is a concise if/else expression.</div>
<pre><code>// Example
$loggedIn = true;
$status = $loggedIn ? 'Logged in' : 'Guest';
</code></pre>

<h3 class="subtitle">7) Nested Conditions</h3>
<div class="warning-box">Avoid excessive nesting; prefer early returns when possible for readability.</div>
<pre><code>// Example
$age = 25;
$hasTicket = true;
if ($age &gt;= 18) {
    if ($hasTicket) {
        echo 'Access granted';
    } else {
        echo 'Ticket required';
    }
} else {
    echo 'Too young';
}
</code></pre>

<h3 class="subtitle">8) Best Practices</h3>
<div class="tip-box">- Prefer early returns to reduce nesting. - Keep conditions small and readable. - Document non-obvious logic with comments.</div>

<h3 class="subtitle">9) Common Mistakes</h3>
<table class="compare" aria-label="Common mistakes table">
  <tr><th>Issue</th><th>Fix</th></tr>
  <tr><td>Using = instead of == or ===</td><td>Use == for loose comparison, === for strict type-safe comparison</td></tr>
  <tr><td>Missing braces</td><td>Always use braces for blocks to avoid ambiguity</td></tr>
  <tr><td>Not handling default cases</td><td>Provide a default branch</td></tr>
</table>

<div class="subtitle">Note</div>
<p class="tip-box">Place match() examples with PHP 8+ syntax to highlight newer features. Remember to run php -l on your files to verify syntax at every step.</p>
