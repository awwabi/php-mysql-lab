<?php
$pageTitle = 'Lab 22: PHP Delete Data';
$baseUrl = '../../style.css';
$currentLab = '22';
include '../../includes/header.php';
?>
<!--
╔══════════════════════════════════════════════════════════════╗
║  LAB 22: PHP DELETE DATA                                    ║
║  Topic: Deleting Records from MySQL using PHP                ║
║                                                              ║
║  LEARNING OBJECTIVES:                                        ║
║  - Create a delete link with an ID parameter                 ║
║  - Confirm deletion before executing                         ║
║  - Build DELETE queries with WHERE clause                    ║
║  - Use mysqli_affected_rows() to verify deletion             ║
║  - Redirect after successful deletion                        ║
║                                                              ║
║  PREREQUISITES:                                              ║
║  - setup.sql executed in phpMyAdmin                          ║
║  - Labs 18-20 completed                                      ║
║                                                              ║
║  WARNING: Always use WHERE clause with DELETE!                ║
╚══════════════════════════════════════════════════════════════╝
-->

<div class="warning-box">
    <strong>SAFETY WARNING:</strong> DELETE without WHERE removes ALL rows. Always verify the ID before deleting.
</div>

<!-- TODO 1: Include the database config file -->
<!-- HINT: include '../../config.php'; -->

<!-- TODO 2: If an ID is provided in the URL, first fetch the product to show its name -->
<!-- HINT: $id = (int) $_GET["id"]; $result = mysqli_query($conn, "SELECT name FROM products WHERE id = $id"); $product = mysqli_fetch_assoc($result); -->

<!-- TODO 3: If the user confirmed deletion (via $_GET["confirm"]), execute the DELETE query -->
<!-- HINT: if (isset($_GET["confirm"])) { $sql = "DELETE FROM products WHERE id = $id"; mysqli_query($conn, $sql); } -->

<!-- TODO 4: Display the product name and ask for confirmation -->
<!-- HINT: echo "<p>Are you sure you want to delete <strong>" . htmlspecialchars($product["name"]) . "</strong>?</p>"; echo '<a href="?id=' . $id . '&confirm=1">Yes, Delete</a>'; echo ' <a href="../20-php-select-data/index.php">Cancel</a>'; -->

<!-- TODO 5: After successful deletion, check affected rows and redirect -->
<!-- HINT: if (mysqli_affected_rows($conn) > 0) { header("Location: ../20-php-select-data/index.php"); exit; } -->

<!-- TODO 6: Handle the case when the product ID doesn't exist -->
<!-- HINT: if (!$product) { echo "<p>Product not found.</p>"; } -->

<!--
╔══════════════════════════════════════════════════════════════╗
║  EXPLORATION CHALLENGES                                       ║
╠══════════════════════════════════════════════════════════════╣
║  1. Use JavaScript confirm() instead of a separate page      ║
║     for confirmation.                                        ║
║  2. What happens if you try to delete a product that is      ║
║     referenced by a foreign key?                             ║
║  3. Add a "soft delete" pattern — add a deleted_at column    ║
║     and use UPDATE instead of DELETE.                        ║
║  4. Show a list of products with delete links (combining    ║
║     Lab 20 select with Lab 22 delete).                       ║
╚══════════════════════════════════════════════════════════════╝
-->

<?php include '../../includes/footer.php'; ?>
