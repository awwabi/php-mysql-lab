<?php
$pageTitle = 'Lab 04: Operators';
$baseUrl = '../../style.css';
$currentLab = '04';
include __DIR__ . '/../includes/header.php';
?>

<?php
/*
╔══════════════════════════════════════════════════════════════╗
║  LAB 4: OPERATORS                                           ║
║  Topic: Performing Operations on Data in PHP                ║
║                                                              ║
║  LEARNING OBJECTIVES:                                        ║
║  - Use arithmetic operators (+, -, *, /, %, **)              ║
║  - Use assignment operators (=, +=, -=, *=, /=)              ║
║  - Use comparison operators (==, ===, !=, <, >, etc.)        ║
║  - Use logical operators (&&, ||, !)                         ║
║  - Use string concatenation (.) and increment/decrement      ║
║  - Use ternary (?:) and null coalescing (??) operators       ║
║                                                              ║
║  INSTRUCTIONS:                                               ║
║  Find all TODO comments and complete the missing code.       ║
║  Open this file in your browser via XAMPP (localhost).       ║
║  Read the HINT comments if you get stuck.                    ║
╚══════════════════════════════════════════════════════════════╝
*/

// TODO 1: Use arithmetic operators (+, -, *, /, %, **) with two numbers
// HINT: $a = 15; $b = 4; echo $a + $b; echo $a % $b; echo $a ** $b;

// TODO 2: Use assignment operators to update a variable
// HINT: $x = 10; $x += 5; echo $x; $x -= 3; echo $x; $x *= 2; echo $x;

// TODO 3: Compare two values with == and ===, explain the difference
// HINT: $a = 5; $b = "5"; echo ($a == $b); echo ($a === $b);

// TODO 4: Use logical operators to combine conditions
// HINT: $age = 25; $hasID = true; echo ($age >= 18 && $hasID);

// TODO 5: Use the string concatenation operator (.)
// HINT: $first = "Hello"; $last = "World"; echo $first . " " . $last;

// TODO 6: Demonstrate pre-increment and post-increment
// HINT: $n = 5; echo $n++; echo ++$n; echo $n--; echo --$n;

// TODO 7: Use the ternary operator and null coalescing operator
// HINT: $score = 75; echo ($score >= 60) ? "Pass" : "Fail"; echo $_GET["name"] ?? "Guest";

/*
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES (Do these after completing           ║
║  all TODOs above!)                                          ║
╠══════════════════════════════════════════════════════════════╣
║  1. What is the result of 2 + 3 * 4? Why? (precedence)     ║
║  2. What is the difference between / and intdiv()?          ║
║  3. Use the spaceship operator (<=>) to compare two values. ║
║  4. What does the null coalescing operator do if the        ║
║     variable is set to an empty string?                      ║
║  5. What is the result of !true && false? Trace it step      ║
║     by step.                                                ║
╚══════════════════════════════════════════════════════════════╝
*/

include __DIR__ . '/../includes/footer.php';
?>
