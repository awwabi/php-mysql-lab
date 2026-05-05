<?php
$pageTitle = 'Lab 06: Looping';
$baseUrl = '../../style.css';
$currentLab = '06';
include '../../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 6: LOOPING                                             ║
║  Topic: Repeating Actions with Loops in PHP                  ║
║                                                              ║
║  LEARNING OBJECTIVES:                                        ║
║  - Use for loops to repeat code a set number of times        ║
║  - Use while loops when the count is unknown                 ║
║  - Use do-while for at-least-once execution                  ║
║  - Use foreach to iterate over arrays                        ║
║  - Control loop flow with break and continue                 ║
║                                                              ║
║  INSTRUCTIONS:                                               ║
║  Find all TODO comments and complete the missing code.       ║
║  Open this file in your browser via XAMPP (localhost).       ║
║  Read the HINT comments if you get stuck.                    ║
╚══════════════════════════════════════════════════════════════╝
-->

<!-- TODO 1: Use a for loop to print numbers 1 to 10 -->
<!-- HINT: for ($i = 1; $i <= 10; $i++) { echo $i . " "; } -->

<!-- TODO 2: Use a while loop to count down from 5 to 1 -->
<!-- HINT: $n = 5; while ($n >= 1) { echo $n . " "; $n--; } -->

<!-- TODO 3: Use a do-while loop to print "Hello" at least once -->
<!-- HINT: $count = 0; do { echo "Hello "; $count++; } while ($count < 3); -->

<!-- TODO 4: Use foreach to loop through an array of fruits -->
<!-- HINT: $fruits = ["Apple", "Banana", "Cherry"]; foreach ($fruits as $fruit) { echo $fruit . " "; } -->

<!-- TODO 5: Use foreach with key => value on an associative array -->
<!-- HINT: $student = ["name" => "Alice", "age" => 20]; foreach ($student as $key => $value) { echo "$key: $value "; } -->

<!-- TODO 6: Use break to stop a loop when a condition is met -->
<!-- HINT: for ($i = 1; $i <= 100; $i++) { if ($i == 5) break; echo $i . " "; } -->

<!-- TODO 7: Use continue to skip even numbers in a loop -->
<!-- HINT: for ($i = 1; $i <= 10; $i++) { if ($i % 2 == 0) continue; echo $i . " "; } -->

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES (Do these after completing           ║
║  all TODOs above!)                                          ║
╠══════════════════════════════════════════════════════════════╣
║  1. Create a nested loop to print a multiplication table.    ║
║  2. What happens with a while loop if you forget $i++?      ║
║  3. Use a for loop to print only odd numbers from 1 to 20.  ║
║  4. Create an infinite loop intentionally, then stop it.     ║
║  5. Use foreach to calculate the sum of an array of numbers. ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include '../../includes/footer.php'; ?>
