<?php
$pageTitle = 'Lab 03: Data Types';
$baseUrl = '../../style.css';
$currentLab = '03';
include __DIR__ . '/../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 3: DATA TYPES                                          ║
║  Topic: Understanding Data Types in PHP                     ║
║                                                              ║
║  LEARNING OBJECTIVES:                                        ║
║  - Identify PHP data types (string, int, float, bool, etc.) ║
║  - Use gettype() to check a variable's type                  ║
║  - Understand type juggling                                  ║
║  - Cast between types explicitly                             ║
║  - Use type-checking functions (is_string, is_int, etc.)     ║
║                                                              ║
║  INSTRUCTIONS:                                               ║
║  Find all TODO comments and complete the missing code.       ║
║  Open this file in your browser via XAMPP (localhost).       ║
║  Read the HINT comments if you get stuck.                    ║
╚══════════════════════════════════════════════════════════════╝
-->

<!-- TODO 1: Create variables of different types and echo them -->
<!-- HINT: $text = "Hello"; $num = 42; $price = 9.99; $active = true; echo $text; -->

<!-- TODO 2: Use gettype() to display the type of each variable -->
<!-- HINT: echo gettype($text); echo gettype($num); -->

<!-- TODO 3: Demonstrate type juggling — add a string number to an integer -->
<!-- HINT: $result = "10" + 5; echo $result; echo gettype($result); -->

<!-- TODO 4: Cast a string to an integer and a float to an integer -->
<!-- HINT: $val = "42"; $intVal = (int) $val; echo $intVal; echo gettype($intVal); -->

<!-- TODO 5: Use is_string(), is_int(), is_float(), is_bool() to check types -->
<!-- HINT: echo is_string($text); echo is_int($num); -->

<!-- TODO 6: Create a NULL variable and check its type -->
<!-- HINT: $empty = null; echo gettype($empty); echo is_null($empty); -->

<!-- TODO 7: Create an array and check its type -->
<!-- HINT: $colors = ["red", "green", "blue"]; echo gettype($colors); -->

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES (Do these after completing           ║
║  all TODOs above!)                                          ║
╠══════════════════════════════════════════════════════════════╣
║  1. What type does gettype() return for true and false?     ║
║  2. What happens when you cast an array to a string?        ║
║  3. Use settype() to change a variable's type in-place.     ║
║  4. What is the difference between (int) and intval()?      ║
║  5. What type does gettype() return for an object?          ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include __DIR__ . '/../includes/footer.php'; ?>
