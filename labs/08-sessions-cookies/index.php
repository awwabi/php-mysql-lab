<?php
$pageTitle = 'Lab 08: Sessions & Cookies';
$baseUrl = '../../style.css';
$currentLab = '08';
include '../../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 8: SESSIONS & COOKIES                                  ║
║  Topic: Maintaining State Between Requests                   ║
║                                                              ║
║  LEARNING OBJECTIVES:                                        ║
║  - Start and use PHP sessions                                ║
║  - Store and retrieve data in $_SESSION                      ║
║  - Set and read cookies with setcookie()                     ║
║  - Understand the difference between sessions and cookies     ║
║  - Destroy sessions and delete cookies                       ║
║                                                              ║
║  INSTRUCTIONS:                                               ║
║  Find all TODO comments and complete the missing code.       ║
║  Open this file in your browser via XAMPP (localhost).       ║
║  Read the HINT comments if you get stuck.                    ║
║                                                              ║
║  NOTE: Refresh the page after setting cookies to see them.   ║
╚══════════════════════════════════════════════════════════════╝
-->

<!-- TODO 1: Start a session -->
<!-- HINT: session_start(); must be at the very top before any HTML output -->

<!-- TODO 2: Store a value in the session -->
<!-- HINT: $_SESSION["username"] = "Alice"; -->

<!-- TODO 3: Read and display a session value -->
<!-- HINT: echo $_SESSION["username"] ?? "No session set"; -->

<!-- TODO 4: Set a cookie that expires in 1 hour -->
<!-- HINT: setcookie("theme", "dark", time() + 3600, "/"); -->

<!-- TODO 5: Read and display a cookie value -->
<!-- HINT: echo $_COOKIE["theme"] ?? "No cookie set"; -->

<!-- TODO 6: Destroy a session completely -->
<!-- HINT: session_unset(); session_destroy(); -->

<!-- TODO 7: Delete a cookie by setting expiry in the past -->
<!-- HINT: setcookie("theme", "", time() - 3600, "/"); -->

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES (Do these after completing           ║
║  all TODOs above!)                                          ║
╠══════════════════════════════════════════════════════════════╣
║  1. Create a page visit counter using sessions.              ║
║  2. What happens if you call session_start() after output?   ║
║  3. Set multiple cookies and display them all.               ║
║  4. Check if a session variable is set with isset().        ║
║  5. What is the default session timeout in PHP?              ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include '../../includes/footer.php'; ?>
