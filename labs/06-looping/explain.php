<?php
$pageTitle = 'Lab 06: Looping — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '06';
include __DIR__ . '/../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 06: Looping</h1>
<p class="subtitle">Repeating actions with loops in PHP.</p>

<h2>1. for Loop</h2>
<p>The <code>for</code> loop is used when you know how many times you want to repeat:</p>
<pre><code>&lt;?php
for ($i = 1; $i &lt;= 5; $i++) {
    echo $i . " ";
}
// Output: 1 2 3 4 5
?&gt;</code></pre>
<div class="tip-box">
    <strong>Structure:</strong> <code>for (initialization; condition; increment) { body }</code><br>
    The initialization runs once, the condition is checked before each iteration, and the increment runs after each iteration.
</div>

<h2>2. while Loop</h2>
<p>The <code>while</code> loop repeats as long as the condition is true:</p>
<pre><code>&lt;?php
$count = 5;
while ($count &gt; 0) {
    echo $count . " ";
    $count--;
}
// Output: 5 4 3 2 1
?&gt;</code></pre>
<div class="warning-box">
    <strong>Warning:</strong> Make sure the condition eventually becomes false, or you'll create an infinite loop!
</div>

<h2>3. do-while Loop</h2>
<p>The <code>do-while</code> loop executes the body <strong>at least once</strong>, then checks the condition:</p>
<pre><code>&lt;?php
$number = 1;
do {
    echo $number . " ";
    $number++;
} while ($number &lt;= 3);
// Output: 1 2 3
?&gt;</code></pre>
<div class="tip-box">
    <strong>Key difference:</strong> <code>while</code> checks first, <code>do-while</code> executes first.
    Use <code>do-while</code> when you need at least one execution regardless of the condition.
</div>

<h2>4. foreach Loop</h2>
<p>The <code>foreach</code> loop is the best way to iterate over arrays:</p>
<pre><code>&lt;?php
$fruits = ["Apple", "Banana", "Cherry"];

// Iterate values only
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}

// Iterate key and value
$student = ["name" =&gt; "Alice", "age" =&gt; 20];
foreach ($student as $key =&gt; $value) {
    echo "$key: $value\n";
}
?&gt;</code></pre>

<h2>5. break and continue</h2>
<p><code>break</code> exits the loop entirely. <code>continue</code> skips the rest of the current iteration:</p>
<pre><code>&lt;?php
// break example — stop when we find 5
for ($i = 1; $i &lt;= 100; $i++) {
    if ($i == 5) break;
    echo $i . " "; // Output: 1 2 3 4
}

// continue example — skip even numbers
for ($i = 1; $i &lt;= 10; $i++) {
    if ($i % 2 == 0) continue;
    echo $i . " "; // Output: 1 3 5 7 9
}
?&gt;</code></pre>

<h2>6. Nested Loops</h2>
<p>You can put loops inside loops. The inner loop completes fully for each outer iteration:</p>
<pre><code>&lt;?php
for ($row = 1; $row &lt;= 3; $row++) {
    for ($col = 1; $col &lt;= 3; $col++) {
        echo $row * $col . " ";
    }
    echo "\n";
}
// Output:
// 1 2 3
// 2 4 6
// 3 6 9
?&gt;</code></pre>

<h2>7. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> Forgetting to update the loop variable — creates an infinite loop.<br>
    <code>while ($i &lt; 10) { echo $i; }</code> — forgot <code>$i++</code>!
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> Off-by-one errors — using <code>&lt;</code> instead of <code>&lt;=</code> or vice versa.
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Modifying an array while iterating over it with foreach — can cause unexpected behavior.
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
