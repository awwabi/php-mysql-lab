<?php
$pageTitle = 'Lab 10: Form Validation';
$baseUrl = '../../style.css';
$currentLab = '10';
include '../../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 10: FORM VALIDATION                                     ║
║  Topic: Validating and Sanitizing User Input in PHP          ║
║                                                              ║
║  LEARNING OBJECTIVES:                                        ║
║  - Validate required fields with empty() and isset()         ║
║  - Validate email format with filter_var()                   ║
║  - Validate number ranges                                    ║
║  - Sanitize input with htmlspecialchars() and trim()         ║
║  - Display validation errors to the user                     ║
║                                                              ║
║  INSTRUCTIONS:                                               ║
║  Find all TODO comments and complete the missing code.       ║
║  Open this file in your browser via XAMPP (localhost).       ║
║  Read the HINT comments if you get stuck.                    ║
╚══════════════════════════════════════════════════════════════╝
-->

<!-- TODO 1: Create a registration form with name, email, age, and password fields -->
<!-- HINT: <form method="POST" action=""> <input type="text" name="name" required> <input type="email" name="email"> <input type="number" name="age"> <input type="password" name="password"> <button type="submit">Register</button> </form> -->

<!-- TODO 2: Check if the form was submitted and validate that name is not empty -->
<!-- HINT: if ($_SERVER["REQUEST_METHOD"] === "POST") { if (empty(trim($_POST["name"]))) { $errors[] = "Name is required"; } } -->

<!-- TODO 3: Validate the email format using filter_var() -->
<!-- HINT: if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { $errors[] = "Invalid email format"; } -->

<!-- TODO 4: Validate that age is a number between 1 and 120 -->
<!-- HINT: $age = $_POST["age"]; if ($age < 1 || $age > 120) { $errors[] = "Age must be between 1 and 120"; } -->

<!-- TODO 5: Validate that password is at least 8 characters long -->
<!-- HINT: if (strlen($_POST["password"]) < 8) { $errors[] = "Password must be at least 8 characters"; } -->

<!-- TODO 6: Sanitize the name input before displaying it -->
<!-- HINT: $name = htmlspecialchars(trim($_POST["name"])); echo $name; -->

<!-- TODO 7: Display all validation errors (if any) above the form -->
<!-- HINT: if (!empty($errors)) { foreach ($errors as $error) { echo "<p style='color:red'>$error</p>"; } } -->

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES (Do these after completing           ║
║  all TODOs above!)                                          ║
╠══════════════════════════════════════════════════════════════╣
║  1. Validate that password contains at least one number.     ║
║  2. Use preg_match() to validate a phone number format.     ║
║  3. Keep form values after validation fails (sticky form).  ║
║  4. Use stripslashes() to clean magic quotes input.         ║
║  5. Implement a "confirm password" field and check match.    ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include '../../includes/footer.php'; ?>
