<?php
$pageTitle = 'Lab 05: Selection';
$baseUrl = '../../style.css';
$currentLab = '05';
include __DIR__ . '/../includes/header.php';
?>

<?php
/*
╔══════════════════════════════════════════════════════════════╗
║  LAB 5: SELECTION                                            ║
║  Topic: Making Decisions with Conditional Logic in PHP       ║
║                                                              ║
║  LEARNING OBJECTIVES:                                        ║
║  - Use if/else statements to branch based on conditions       ║
║  - Use elseif to chain multiple conditions                    ║
║  - Use switch/case for discrete value matching                ║
║  - Use the PHP 8 match expression for strict matching         ║
║  - Write nested conditional logic                             ║
║  - Use the ternary operator as shorthand                      ║
║                                                              ║
║  INSTRUCTIONS:                                               ║
║  Find all TODO comments and complete the missing code.       ║
║  Read the HINT comments if you get stuck.                    ║
╚══════════════════════════════════════════════════════════════╝
*/

// TODO 1: If/else to check if a number is positive or negative
// HINT: $num = 7; if ($num > 0) { echo 'Positive'; } else { echo 'Negative or zero'; }

// TODO 2: Use elseif to determine a letter grade (A/B/C/D/E)
// HINT: $score = 85; if ($score >= 90) { $grade = 'A'; } elseif ($score >= 80) { $grade = 'B'; } elseif ($score >= 70) { $grade = 'C'; } elseif ($score >= 60) { $grade = 'D'; } else { $grade = 'E'; }

// TODO 3: Write a switch/case for day of the week
// HINT: $day = 'Monday'; switch ($day) { case 'Monday': echo 'Start of the work week'; break; case 'Friday': echo 'Almost weekend'; break; default: echo 'Midweek'; }

// TODO 4: Use match expression (PHP 8) for grade
// HINT: $score = 92; $grade = match (true) { $score >= 90 => 'A', $score >= 80 => 'B', $score >= 70 => 'C', $score >= 60 => 'D', default => 'E', }; echo $grade;

// TODO 5: Write nested if conditions
// HINT: $age = 25; $hasTicket = true; if ($age >= 18) { if ($hasTicket) { echo 'Entry allowed'; } else { echo 'Ticket required'; } } else { echo 'Too young'; }

// TODO 6: Use ternary as shorthand
// HINT: $likesPHP = true; $message = $likesPHP ? 'PHP is great' : 'No strong opinion'; echo $message;

/*
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES (Do these after completing           ║
║  all TODOs above!)                                          ║
╠══════════════════════════════════════════════════════════════╣
║  1. What happens if you use = instead of == in a condition?║
║  2. Can you nest switch statements? Try it.                ║
║  3. What's the difference between match and switch?         ║
║  4. Use the null coalescing operator (??) in a condition.  ║
║  5. Write a program that checks if a year is a leap year.  ║
╚══════════════════════════════════════════════════════════════╝
*/

include __DIR__ . '/../includes/footer.php';
?>
