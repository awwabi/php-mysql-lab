<?php
$pageTitle = 'Lab 21: PHP Update Data';
$baseUrl = '../style.css';
$currentLab = '21';
include '../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 21: PHP UPDATE DATA                                    ║
║  Topic: Updating Records in MySQL from PHP                   ║
║                                                              ║
║  LEARNING OBJECTIVES:                                        ║
║  - Fetch existing data to pre-fill an edit form              ║
║  - Handle form POST to update a record                       ║
║  - Build UPDATE queries with WHERE clause                    ║
║  - Use mysqli_affected_rows() to verify the update           ║
║  - Redirect after successful update (PRG pattern)            ║
║                                                              ║
║  PREREQUISITES:                                              ║
║  - setup.sql executed in phpMyAdmin                          ║
║  - Labs 18-19 completed                                      ║
╚══════════════════════════════════════════════════════════════╝
-->

<!-- TODO 1: Include the database config file -->
<!-- HINT: include '../config.php'; -->

<!-- TODO 2: If an ID is provided in the URL ($_GET["id"]), fetch the product to edit -->
<!-- HINT: $id = (int) $_GET["id"]; $result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id"); $product = mysqli_fetch_assoc($result); -->

<!-- TODO 3: If the form was submitted (POST), sanitize and update the product -->
<!-- HINT: if ($_SERVER["REQUEST_METHOD"] === "POST") { $name = mysqli_real_escape_string($conn, trim($_POST["name"])); $sql = "UPDATE products SET name='$name', price=$price, stock=$stock WHERE id=$id"; mysqli_query($conn, $sql); } -->

<!-- TODO 4: Create an edit form pre-filled with the product's current data -->
<!-- HINT: <form method="POST"> <input name="name" value="<?php echo htmlspecialchars($product['name']); ?>"> <input name="price" value="<?php echo $product['price']; ?>"> ... <button type="submit">Update</button> </form> -->

<!-- TODO 5: After successful update, check affected rows and display a message -->
<!-- HINT: if (mysqli_affected_rows($conn) > 0) { echo "Product updated!"; } else { echo "No changes made."; } -->

<!-- TODO 6: Add a "Back to list" link -->
<!-- HINT: echo '<a href="../20-php-select-data/index.php">Back to Product List</a>'; -->

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES                                       ║
╠══════════════════════════════════════════════════════════════╣
║  1. Use the PRG pattern (Post-Redirect-Get) to prevent      ║
║     form resubmission on refresh.                            ║
║  2. What happens if someone changes the ID in the URL?       ║
║  3. Add validation to check that price is a positive number. ║
║  4. Display "Product not found" if the ID doesn't exist.     ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include '../includes/footer.php'; ?>
