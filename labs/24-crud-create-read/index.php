<?php
$pageTitle = 'Lab 24: CRUD Create & Read';
$baseUrl = '../../style.css';
$currentLab = '24';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../../config.php';

$message = '';
$messageType = '';

// Handle form submission (CREATE)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = mysqli_real_escape_string($conn, trim($_POST["name"] ?? ''));
    $price = (float) ($_POST["price"] ?? 0);
    $stock = (int) ($_POST["stock"] ?? 0);
    $category_id = (int) ($_POST["category_id"] ?? 0);

    if (empty($name)) {
        $message = 'Product name is required.';
        $messageType = 'error';
    } elseif ($price <= 0) {
        $message = 'Price must be greater than 0.';
        $messageType = 'error';
    } else {
        $sql = "INSERT INTO products (name, price, stock, category_id) VALUES ('$name', $price, $stock, $category_id)";
        if (mysqli_query($conn, $sql)) {
            $message = 'Product added successfully! (ID: ' . mysqli_insert_id($conn) . ')';
            $messageType = 'success';
        } else {
            $message = 'Error: ' . mysqli_error($conn);
            $messageType = 'error';
        }
    }
}

// Fetch all products with category name (READ)
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

<h1 class="maybe-title">Lab 24: CRUD — Create & Read</h1>
<p class="subtitle">Full working example: Add products and view the product list.</p>

<?php if ($message): ?>
<div class="<?php echo $messageType === 'error' ? 'danger-box' : 'tip-box'; ?>">
    <?php echo htmlspecialchars($message); ?>
</div>
<?php endif; ?>

<h2>Add New Product</h2>
<form method="POST" action="" class="form-group">
    <label>Product Name:</label>
    <input type="text" name="name" required value="<?php echo htmlspecialchars($_POST["name"] ?? ''); ?>" placeholder="e.g. Wireless Mouse">

    <label>Price (IDR):</label>
    <input type="number" name="price" step="0.01" min="0" required value="<?php echo htmlspecialchars($_POST["price"] ?? ''); ?>" placeholder="e.g. 350000">

    <label>Stock:</label>
    <input type="number" name="stock" min="0" required value="<?php echo htmlspecialchars($_POST["stock"] ?? ''); ?>" placeholder="e.g. 50">

    <label>Category:</label>
    <select name="category_id">
        <option value="0">-- Select Category --</option>
        <?php foreach ($categories as $cat): ?>
            <option value="<?php echo $cat['id']; ?>" <?php echo (($_POST["category_id"] ?? 0) == $cat['id']) ? 'selected' : ''; ?>>
                <?php echo htmlspecialchars($cat['name']); ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button type="submit" class="btn btn-primary">Add Product</button>
</form>

<h2>Product List (<?php echo count($products); ?> items)</h2>
<?php if (count($products) > 0): ?>
<table class="data-table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Created</th>
    </tr>
    <?php foreach ($products as $p): ?>
    <tr>
        <td><?php echo $p['id']; ?></td>
        <td><?php echo htmlspecialchars($p['name']); ?></td>
        <td><?php echo htmlspecialchars($p['category_name'] ?? '-'); ?></td>
        <td>Rp <?php echo number_format($p['price'], 0, ',', '.'); ?></td>
        <td><?php echo $p['stock']; ?></td>
        <td><?php echo date('d M Y', strtotime($p['created_at'])); ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
<p>No products found. Add one using the form above.</p>
<?php endif; ?>

<p><a href="../25-crud-update-delete/index.php" class="back-link">Next: Lab 25 — Update & Delete →</a></p>

<?php
mysqli_close($conn);
include __DIR__ . '/../includes/footer.php';
?>
