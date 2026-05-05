<?php
$pageTitle = 'Lab 25: CRUD Update & Delete';
$baseUrl = '../style.css';
$currentLab = '25';
include '../includes/header.php';
include '../../config.php';

$message = '';
$messageType = '';
$editProduct = null;

// Handle UPDATE
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "update") {
    $id = (int) $_POST["id"];
    $name = mysqli_real_escape_string($conn, trim($_POST["name"] ?? ''));
    $price = (float) ($_POST["price"] ?? 0);
    $stock = (int) ($_POST["stock"] ?? 0);
    $category_id = (int) ($_POST["category_id"] ?? 0);

    $sql = "UPDATE products SET name='$name', price=$price, stock=$stock, category_id=$category_id WHERE id=$id";
    if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn) > 0) {
        $message = 'Product updated successfully!';
        $messageType = 'success';
    } elseif (mysqli_affected_rows($conn) === 0) {
        $message = 'No changes were made.';
        $messageType = 'warning';
    } else {
        $message = 'Error: ' . mysqli_error($conn);
        $messageType = 'error';
    }
}

// Handle DELETE
if (isset($_GET["delete_id"]) && isset($_GET["confirm"])) {
    $id = (int) $_GET["delete_id"];
    $sql = "DELETE FROM products WHERE id = $id";
    if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn) > 0) {
        header("Location: index.php?deleted=1");
        exit;
    }
}

// Handle EDIT mode (load product for editing)
if (isset($_GET["edit_id"])) {
    $id = (int) $_GET["edit_id"];
    $result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
    if ($result) {
        $editProduct = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
    }
}

// Handle cancel edit
if (isset($_GET["cancel_edit"])) {
    header("Location: index.php");
    exit;
}

// Fetch all products
$products = [];
$result = mysqli_query($conn, "SELECT p.*, c.name AS category_name FROM products p LEFT JOIN categories c ON p.category_id = c.id ORDER BY p.id DESC");
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
    mysqli_free_result($result);
}

// Fetch categories for dropdown
$categories = [];
$catResult = mysqli_query($conn, "SELECT * FROM categories ORDER BY name");
if ($catResult) {
    while ($row = mysqli_fetch_assoc($catResult)) {
        $categories[] = $row;
    }
    mysqli_free_result($catResult);
}
?>

<h1 class="maybe-title">Lab 25: CRUD — Update & Delete</h1>
<p class="subtitle">Full working example: Edit and delete products.</p>

<?php if ($message): ?>
<div class="<?php echo $messageType === 'error' ? 'danger-box' : ($messageType === 'warning' ? 'warning-box' : 'tip-box'); ?>">
    <?php echo htmlspecialchars($message); ?>
</div>
<?php endif; ?>

<?php if (isset($_GET["deleted"])): ?>
<div class="tip-box">Product deleted successfully.</div>
<?php endif; ?>

<?php if ($editProduct): ?>
<!-- EDIT FORM -->
<h2>Edit Product #<?php echo $editProduct['id']; ?></h2>
<form method="POST" action="" class="form-group">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="id" value="<?php echo $editProduct['id']; ?>">

    <label>Product Name:</label>
    <input type="text" name="name" required value="<?php echo htmlspecialchars($editProduct['name']); ?>">

    <label>Price (IDR):</label>
    <input type="number" name="price" step="0.01" min="0" required value="<?php echo $editProduct['price']; ?>">

    <label>Stock:</label>
    <input type="number" name="stock" min="0" required value="<?php echo $editProduct['stock']; ?>">

    <label>Category:</label>
    <select name="category_id">
        <?php foreach ($categories as $cat): ?>
            <option value="<?php echo $cat['id']; ?>" <?php echo ($editProduct['category_id'] == $cat['id']) ? 'selected' : ''; ?>>
                <?php echo htmlspecialchars($cat['name']); ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button type="submit" class="btn btn-primary">Save Changes</button>
    <a href="?cancel_edit=1" class="btn">Cancel</a>
</form>
<?php endif; ?>

<h2>Product List</h2>
<?php if (count($products) > 0): ?>
<table class="data-table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($products as $p): ?>
    <tr>
        <td><?php echo $p['id']; ?></td>
        <td><?php echo htmlspecialchars($p['name']); ?></td>
        <td><?php echo htmlspecialchars($p['category_name'] ?? '-'); ?></td>
        <td>Rp <?php echo number_format($p['price'], 0, ',', '.'); ?></td>
        <td><?php echo $p['stock']; ?></td>
        <td>
            <a href="?edit_id=<?php echo $p['id']; ?>" class="btn">Edit</a>
            <a href="?delete_id=<?php echo $p['id']; ?>&confirm=1" class="btn" onclick="return confirm('Delete <?php echo addslashes($p['name']); ?>?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
<p>No products found.</p>
<?php endif; ?>

<p><a href="../24-crud-create-read/index.php" class="back-link">← Back: Lab 24 — Create & Read</a> | <a href="../26-crud-final-polish/index.php" class="back-link">Next: Lab 26 — Final Polish →</a></p>

<?php
mysqli_close($conn);
include '../includes/footer.php';
?>
