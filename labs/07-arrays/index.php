<?php
$pageTitle = 'Lab 07: Arrays';
$baseUrl = '../../style.css';
$currentLab = '07';
include __DIR__ . '/../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 7: ARRAYS                                              ║
║  Topic: Storing Multiple Values in PHP                       ║
║                                                              ║
║  LEARNING OBJECTIVES:                                        ║
║  - Create indexed and associative arrays                     ║
║  - Add, remove, and access array elements                    ║
║  - Use common array functions                                ║
║  - Loop through arrays with foreach                          ║
║  - Work with multidimensional arrays                         ║
║                                                              ║
║  INSTRUCTIONS:                                               ║
║  Find all TODO comments and complete the missing code.       ║
║  Open this file in your browser via XAMPP (localhost).       ║
║  Read the HINT comments if you get stuck.                    ║
╚══════════════════════════════════════════════════════════════╝
-->

<!-- TODO 1: Create an indexed array of 5 colors and print them -->
<!-- HINT: $colors = ["red", "green", "blue", "yellow", "purple"]; print_r($colors); -->

<!-- TODO 2: Create an associative array for a student and print it -->
<!-- HINT: $student = ["name" => "Alice", "nim" => "2701234567", "major" => "Computer Science"]; print_r($student); -->

<!-- TODO 3: Add an element to an array using array_push() and print the count -->
<!-- HINT: array_push($colors, "orange"); echo count($colors); -->

<!-- TODO 4: Remove the last element with array_pop() and print the result -->
<!-- HINT: $removed = array_pop($colors); echo $removed; print_r($colors); -->

<!-- TODO 5: Check if a value exists in an array using in_array() -->
<!-- HINT: echo in_array("green", $colors); echo in_array("pink", $colors); -->

<!-- TODO 6: Sort an array with sort() and print it -->
<!-- HINT: $numbers = [40, 10, 50, 20, 30]; sort($numbers); print_r($numbers); -->

<!-- TODO 7: Create a multidimensional array (array of students) and loop through it -->
<!-- HINT: $students = [["name" => "Alice", "grade" => "A"], ["name" => "Bob", "grade" => "B"]]; foreach ($students as $s) { echo $s["name"] . ": " . $s["grade"] . " "; } -->

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES (Do these after completing           ║
║  all TODOs above!)                                          ║
╠══════════════════════════════════════════════════════════════╣
║  1. Use explode() to split a string into an array.          ║
║  2. Use implode() to join an array into a string.           ║
║  3. What is the difference between sort() and asort()?      ║
║  4. Use array_merge() to combine two arrays.                ║
║  5. Create a 3x3 multiplication table using a              ║
║     multidimensional array.                                 ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include __DIR__ . '/../includes/footer.php'; ?>
