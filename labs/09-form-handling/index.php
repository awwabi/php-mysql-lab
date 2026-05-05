<?php
$pageTitle = 'Lab 09: Form Handling';
$baseUrl = '../style.css';
$currentLab = '09';
include '../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 9: FORM HANDLING                                        ║
║  Topic: Processing HTML Forms with PHP                       ║
║                                                              ║
║  LEARNING OBJECTIVES:                                        ║
║  - Create HTML forms with different input types              ║
║  - Handle GET form submissions with $_GET                    ║
║  - Handle POST form submissions with $_POST                  ║
║  - Understand the difference between GET and POST            ║
║  - Use htmlspecialchars() for safe output                    ║
║                                                              ║
║  INSTRUCTIONS:                                               ║
║  Find all TODO comments and complete the missing code.       ║
║  Open this file in your browser via XAMPP (localhost).       ║
║  Read the HINT comments if you get stuck.                    ║
╚══════════════════════════════════════════════════════════════╝
-->

<!-- TODO 1: Create an HTML form with method="GET" and a text input -->
<!-- HINT: <form method="GET" action=""> <input type="text" name="search"> <button type="submit">Search</button> </form> -->

<!-- TODO 2: After the form, display the submitted GET value -->
<!-- HINT: if (isset($_GET["search"])) { echo "You searched for: " . htmlspecialchars($_GET["search"]); } -->

<!-- TODO 3: Create an HTML form with method="POST" and multiple fields -->
<!-- HINT: <form method="POST" action=""> <input type="text" name="name"> <input type="email" name="email"> <button type="submit">Submit</button> </form> -->

<!-- TODO 4: After the form, display the submitted POST values -->
<!-- HINT: if ($_SERVER["REQUEST_METHOD"] === "POST") { echo "Name: " . htmlspecialchars($_POST["name"]); } -->

<!-- TODO 5: Create a form with a dropdown (select) and handle the selection -->
<!-- HINT: <select name="color"><option value="red">Red</option><option value="blue">Blue</option></select> -->

<!-- TODO 6: Create a form with a checkbox and check if it was checked -->
<!-- HINT: <input type="checkbox" name="agree" value="yes"> Then check: isset($_POST["agree"]) -->

<!-- TODO 7: Show the difference between GET (query string) and POST (hidden) -->
<!-- HINT: Submit the same form with GET, look at the URL. Then change to POST and submit again. -->

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES (Do these after completing           ║
║  all TODOs above!)                                          ║
╠══════════════════════════════════════════════════════════════╣
║  1. Create a form with radio buttons and handle the          ║
║     selected value.                                          ║
║  2. What happens if you submit a form with GET — where      ║
║     does the data appear in the URL?                         ║
║  3. Use $_REQUEST instead of $_GET or $_POST. Does it       ║
║     work the same?                                           ║
║  4. Create a form that submits to a different page           ║
║     using the action attribute.                              ║
║  5. What happens if you don't use htmlspecialchars()        ║
║     and someone enters HTML tags in the form?                ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include '../includes/footer.php'; ?>
