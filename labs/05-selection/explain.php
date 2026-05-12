<?php
$pageTitle = 'Lab 05: Selection — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '05';
include __DIR__ . '/../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 05: Selection</h1>
<p class="subtitle">Making decisions with conditional logic in PHP.</p>

<h2>1. What is Selection/Conditional Logic?</h2>
<p>
  Selection and conditional logic let a PHP script decide which path to take based on tests,
  such as comparing numbers or evaluating string values. It enables branching behavior to
  produce different outputs depending on the input or state.
</p>

<h2>2. if Statement</h2>
<p>An if statement runs its body only if the condition evaluates to true.</p>
<pre><code>$score = 75;
if ($score &gt;= 50) {
    echo 'Passing';
}</code></pre>

<h2>3. if/else Statement</h2>
<p>The else branch executes when the condition is false.</p>
<pre><code>$age = 16;
if ($age &ge; 18) {
    echo 'Adult';
} else {
    echo 'Minor';
}</code></pre>

<h2>4. if/elseif/else</h2>
<p>Use elseif to chain multiple mutually exclusive conditions.</p>
<pre><code>$score = 88;
if ($score &ge; 90) {
    $grade = 'A';
} elseif ($score &ge; 80) {
    $grade = 'B';
} else {
    $grade = 'C or lower';
}
echo $grade;</code></pre>

<h2>5. switch/case</h2>
<p>Switch handles many discrete values. Remember to break or use match-default patterns in PHP 8+.</p>
<pre><code>$day = 'Wednesday';
switch ($day) {
    case 'Monday': echo 'Start'; break;
    case 'Friday': echo 'Finish'; break;
    default: echo 'Midweek';
}</code></pre>

<h2>6. match Expression (PHP 8)</h2>
<p>match is like a switch but returns a value and uses strict comparison semantics. Requires PHP 8+.</p>
<pre><code>$score = 92;
$grade = match (true) {
    $score &ge; 90 =&gt; 'A',
    $score &ge; 80 =&gt; 'B',
    $score &ge; 70 =&gt; 'C',
    default =&gt; 'D',
};
echo $grade;</code></pre>

<h2>7. Ternary Operator</h2>
<p>The ternary operator is a concise if/else expression.</p>
<pre><code>$loggedIn = true;
$status = $loggedIn ? 'Logged in' : 'Guest';</code></pre>

<h2>8. Nested Conditions</h2>
<p>Avoid excessive nesting; prefer early returns when possible for readability.</p>
<pre><code>$age = 25;
$hasTicket = true;
if ($age &gt;= 18) {
    if ($hasTicket) {
        echo 'Access granted';
    } else {
        echo 'Ticket required';
    }
} else {
    echo 'Too young';
}</code></pre>

<h2>9. Best Practices</h2>
<ul>
  <li>Prefer early returns to reduce nesting.</li>
  <li>Keep conditions small and readable.</li>
  <li>Document non-obvious logic with comments.</li>
</ul>

<h2>10. Common Mistakes</h2>
<ul>
  <li>Using <code>=</code> instead of <code>==</code> or <code>===</code> — use <code>==</code> for loose comparison, <code>===</code> for strict type-safe comparison.</li>
  <li>Missing braces — always use braces for blocks to avoid ambiguity.</li>
  <li>Not handling default cases — provide a default branch in switch/match.</li>
</ul>

<p class="diagram"><strong>Tip:</strong> Place match() examples with PHP 8+ syntax to highlight newer features.
  Remember to run <code>php -l</code> on your files to verify syntax at every step.</p>

<?php include __DIR__ . '/../includes/footer.php'; ?>
