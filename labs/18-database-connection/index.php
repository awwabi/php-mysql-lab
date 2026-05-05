<?php
$pageTitle = 'Lab 18: Database Connection';
$baseUrl = '../../style.css';
$currentLab = '18';
include '../../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 18: DATABASE CONNECTION                                ║
║  Topic: Connecting PHP to MySQL using MySQLi                 ║
║                                                              ║
║  LEARNING OBJECTIVES:                                        ║
║  - Include the database config file                          ║
║  - Establish a connection using mysqli_connect()             ║
║  - Handle connection errors                                  ║
║  - Run a simple test query                                   ║
║  - Close the connection                                      ║
║                                                              ║
║  PREREQUISITES:                                              ║
║  - XAMPP running (Apache + MySQL)                            ║
║  - setup.sql executed in phpMyAdmin                          ║
║                                                              ║
║  INSTRUCTIONS:                                               ║
║  Find all TODO comments and complete the missing code.       ║
║  Open this file in your browser via XAMPP (localhost).       ║
╚══════════════════════════════════════════════════════════════╝
-->

<!-- TODO 1: Include the database config file -->
<!-- HINT: include '../../config.php'; -->

<!-- TODO 2: Create a connection using mysqli_connect() -->
<!-- HINT: $conn = mysqli_connect($host, $user, $pass, $dbname); -->

<!-- TODO 3: Check if the connection failed and display an error -->
<!-- HINT: if (!$conn) { die("Connection failed: " . mysqli_connect_error()); } -->

<!-- TODO 4: If connected, display a success message -->
<!-- HINT: echo "<p class='tip-box'>Connected successfully to database!</p>"; -->

<!-- TODO 5: Run a simple test query (SELECT 1) and display the result -->
<!-- HINT: $result = mysqli_query($conn, "SELECT 1 AS test"); $row = mysqli_fetch_assoc($result); echo $row["test"]; -->

<!-- TODO 6: Run a query to count products in the database -->
<!-- HINT: $result = mysqli_query($conn, "SELECT COUNT(*) as total FROM products"); $row = mysqli_fetch_assoc($result); echo "Total products: " . $row["total"]; -->

<!-- TODO 7: Close the connection when done -->
<!-- HINT: mysqli_close($conn); -->

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES                                       ║
╠══════════════════════════════════════════════════════════════╣
║  1. What happens if you use the wrong password?              ║
║  2. What happens if the database doesn't exist?              ║
║  3. Try connecting without the 4th parameter (database      ║
║     name) — what changes?                                    ║
║  4. Use mysqli_get_server_info() to display MySQL version.   ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include '../../includes/footer.php'; ?>
