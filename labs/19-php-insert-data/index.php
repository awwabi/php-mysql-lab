<?php
$pageTitle = 'Lab 19: PHP Insert Data';
$baseUrl = '../../style.css';
$currentLab = '19';
include '../../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 19: PHP INSERT DATA                                    ║
║  Topic: Inserting Data into MySQL from PHP Forms             ║
║                                                              ║
║  LEARNING OBJECTIVES:                                        ║
║  - Create an HTML form for data input                        ║
║  - Handle form submission with PHP                           ║
║  - Sanitize user input before database insertion             ║
║  - Build and execute INSERT queries                          ║
║  - Display success/error messages                            ║
║                                                              ║
║  PREREQUISITES:                                              ║
║  - setup.sql executed in phpMyAdmin                          ║
║  - Lab 18 (Database Connection) completed                    ║
╚══════════════════════════════════════════════════════════════╝
-->

<!-- TODO 1: Include the database config and start processing if form was submitted -->
<!-- HINT: include '../../config.php'; if ($_SERVER["REQUEST_METHOD"] === "POST") { ... } -->

<!-- TODO 2: Sanitize the form inputs -->
<!-- HINT: $name = mysqli_real_escape_string($conn, trim($_POST["name"])); $price = mysqli_real_escape_string($conn, $_POST["price"]); -->

<!-- TODO 3: Build the INSERT query with the sanitized values -->
<!-- HINT: $sql = "INSERT INTO products (name, price, stock, category_id) VALUES ('$name', $price, $stock, $category_id)"; -->

<!-- TODO 4: Execute the query and check if it succeeded -->
<!-- HINT: if (mysqli_query($conn, $sql)) { echo "Product added successfully!"; } else { echo "Error: " . mysqli_error($conn); } -->

<!-- TODO 5: Create the HTML form for adding a product -->
<!-- HINT: <form method="POST"> <input name="name" placeholder="Product Name"> <input name="price" type="number" step="0.01"> <input name="stock" type="number"> <select name="category_id"> <option value="1">Electronics</option> ... </select> <button type="submit">Add Product</button> </form> -->

<!-- TODO 6: After successful insert, display the number of affected rows -->
<!-- HINT: echo "Rows affected: " . mysqli_affected_rows($conn); -->

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES                                       ║
╠══════════════════════════════════════════════════════════════╣
║  1. What happens if you try to insert without sanitizing?   ║
║  2. Try inserting a product with an invalid category_id.    ║
║  3. Make the form "sticky" — keep values after error.       ║
║  4. Use mysqli_insert_id() to get the auto-generated ID.    ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include '../../includes/footer.php'; ?>
