<?php
$pageTitle = 'Lab 02: Variables';
$baseUrl = '../../style.css';
$currentLab = '02';
include '../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 2: VARIABLES                                           ║
║  Topic: Storing and Using Data in PHP                       ║
║                                                              ║
║  LEARNING OBJECTIVES:                                        ║
║  - Declare and use variables in PHP                          ║
║  - Understand variable naming rules                          ║
║  - Use string concatenation and interpolation                ║
║  - Reassign and update variable values                       ║
║                                                              ║
║  INSTRUCTIONS:                                               ║
║  Find all TODO comments and complete the missing code.       ║
║  Open this file in your browser via XAMPP (localhost).       ║
║  Read the HINT comments if you get stuck.                    ║
╚══════════════════════════════════════════════════════════════╝
-->

<!-- TODO 1: Declare a string variable with your name and echo it -->
<!-- HINT: $name = "Your Name"; echo $name; -->

<!-- TODO 2: Declare an integer variable and a float variable, echo both -->
<!-- HINT: $age = 20; $gpa = 3.85; echo $age; echo $gpa; -->

<!-- TODO 3: Use the dot (.) operator to concatenate two strings into one -->
<!-- HINT: $first = "Hello"; $second = "World"; echo $first . " " . $second; -->

<!-- TODO 4: Use double-quoted string interpolation to embed a variable -->
<!-- HINT: $name = "Alice"; echo "My name is $name"; -->

<!-- TODO 5: Show the difference between single and double quotes -->
<!-- HINT: $name = "Alice"; echo 'My name is $name'; echo "My name is $name"; -->

<!-- TODO 6: Reassign a variable to a new value and echo it -->
<!-- HINT: $score = 80; echo $score; $score = 95; echo $score; -->

<!-- TODO 7: Create multiple variables and use them in a sentence -->
<!-- HINT: $city = "Jakarta"; $year = 2026; echo "$city in $year"; -->

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES (Do these after completing           ║
║  all TODOs above!)                                          ║
╠══════════════════════════════════════════════════════════════╣
║  1. What happens if you echo a variable before assigning it? ║
║  2. Are variable names case-sensitive? Try $Name vs $name.   ║
║  3. Can a variable name start with a number? Try it.        ║
║  4. What happens if you put a variable in single quotes?     ║
║  5. Try using curly braces: echo "Hello {$name}!";          ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include '../includes/footer.php'; ?>
