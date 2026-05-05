<?php
$pageTitle = 'Lab 05: Selection';
$baseUrl = '../../style.css';
$currentLab = '05';
include '../includes/header.php';
?>

<pre class="box-header" aria-label="Lab header">
┌───────────────────────────────────┐
│          Lab 05: Selection        │
└───────────────────────────────────┘
</pre>

<div class="subtitle">Overview</div>
<div class="tip-box">
This lab covers conditional logic in PHP: if statements, elseif, switch, and the PHP 8 match expression. Implement 6 TODO exercises, each with hints to guide your reasoning.
</div>

<div class="subtitle">Exploration challenges</div>
<ul class="tip-box todo-list">
  <li>Understand numeric comparisons: positive/negative/zero.</li>
  <li>Map scores to letter grades using different constructs.</li>
  <li>Combine conditions using nesting and shorthand operators where appropriate.</li>
  <li>Note PHP 8 features when using match expressions.</li>
  <li>Keep code clean and readable with early returns where sensible.</li>
</ul>

<div class="subtitle">TODOs</div>
<ol class="pre">
  <li>
    <strong>TODO 1: If/else to check if a number is positive or negative</strong>
    <pre><code>// Hint: choose a number and test sign
$num = 7;
if ($num &gt; 0) {
    echo 'Positive';
} else {
    echo 'Negative or zero';
}
</code></pre>
  </li>
  <li>
    <strong>TODO 2: Use elseif to determine a letter grade (A/B/C/D/E)</strong>
    <pre><code>// Hint: map 0-100 to a letter grade
$score = 85;
if ($score &ge; 90) {
    $grade = 'A';
} elseif ($score &ge; 80) {
    $grade = 'B';
} elseif ($score &ge; 70) {
    $grade = 'C';
} elseif ($score &ge; 60) {
    $grade = 'D';
} else {
    $grade = 'E';
}
</code></pre>
  </li>
  <li>
    <strong>TODO 3: Write a switch/case for day of the week</strong>
    <pre><code>// Hint: use a string for the day
$day = 'Monday';
switch ($day) {
    case 'Monday':
        echo 'Start of the work week';
        break;
    case 'Friday':
        echo 'Almost weekend';
        break;
    default:
        echo 'Midweek';
}
</code></pre>
  </li>
  <li>
    <strong>TODO 4: Use match expression (PHP 8) for grade</strong>
    <pre><code>// Hint: PHP 8+ match expression
$score = 92;
$grade = match (true) {
    $score &ge; 90 => 'A',
    $score &ge; 80 => 'B',
    $score &ge; 70 => 'C',
    $score &ge; 60 => 'D',
    default => 'E',
};
echo $grade;
</code></pre>
  </li>
  <li>
    <strong>TODO 5: Write nested if conditions</strong>
    <pre><code>// Hint: combine multiple checks
$age = 25;
$hasTicket = true;
if ($age &gt;= 18) {
    if ($hasTicket) {
        echo 'Entry allowed';
    } else {
        echo 'Ticket required';
    }
} else {
    echo 'Too young';
}
</code></pre>
  </li>
  <li>
    <strong>TODO 6: Use ternary as shorthand</strong>
    <pre><code>// Hint: shorthand for simple condition
$likesPHP = true;
$message = $likesPHP ? 'PHP is great' : 'No strong opinion';
</code></pre>
  </li>
</ol>

<div class="back-link"><a href="<?php echo $baseUrl; ?>" class="back-link">Back to Lab Home</a></div>
