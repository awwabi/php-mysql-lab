<?php
$pageTitle = 'Lab 20: PHP Select Data';
$baseUrl = '../../style.css';
$currentLab = '20';
include '../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 20: PHP SELECT DATA                                    ║
║  Topic: Fetching and Displaying Data from MySQL               ║
║                                                              ║
║  LEARNING OBJECTIVES:                                        ║
║  - Run SELECT queries with mysqli_query()                    ║
║  - Fetch rows with mysqli_fetch_assoc()                      ║
║  - Display results in an HTML table                          ║
║  - Add row numbering                                         ║
║  - Format output (currency for prices)                       ║
║                                                              ║
║  PREREQUISITES:                                              ║
║  - setup.sql executed in phpMyAdmin                          ║
║  - Lab 18 (Database Connection) completed                    ║
╚══════════════════════════════════════════════════════════════╝
-->

<!-- TODO 1: Include the database config file -->
<!-- HINT: include '../../config.php'; -->

<!-- TODO 2: Run a SELECT query to get all products -->
<!-- HINT: $result = mysqli_query($conn, "SELECT * FROM products ORDER BY id"); -->

<!-- TODO 3: Check if there are results and count the rows -->
<!-- HINT: if (mysqli_num_rows($result) > 0) { echo "Total: " . mysqli_num_rows($result) . " products"; } -->

<!-- TODO 4: Create an HTML table header -->
<!-- HINT: echo "<table><tr><th>No</th><th>Name</th><th>Price</th><th>Stock</th></tr>"; -->

<!-- TODO 5: Loop through results with mysqli_fetch_assoc() and display each row -->
<!-- HINT: $no = 1; while ($row = mysqli_fetch_assoc($result)) { echo "<tr><td>$no</td><td>" . htmlspecialchars($row["name"]) . "</td><td>" . number_format($row["price"], 0, ',', '.') . "</td><td>" . $row["stock"] . "</td></tr>"; $no++; } -->

<!-- TODO 6: Close the table and free the result set -->
<!-- HINT: echo "</table>"; mysqli_free_result($result); -->

<!-- TODO 7: Handle the case when no products exist -->
<!-- HINT: } else { echo "<p>No products found.</p>"; } -->

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES                                       ║
╠══════════════════════════════════════════════════════════════╣
║  1. Add a WHERE clause to filter by category.                ║
║  2. Add ORDER BY to sort by price (highest first).           ║
║  3. Add LIMIT to show only 5 products per page.              ║
║  4. Add a search box that filters products by name           ║
║     (use LIKE in the query).                                 ║
║  5. Display the category name instead of category_id        ║
║     (use a JOIN).                                            ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include '../includes/footer.php'; ?>
