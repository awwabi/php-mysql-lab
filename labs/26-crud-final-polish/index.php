<?php
$pageTitle = 'Lab 26: CRUD Final Polish';
$baseUrl = '../../style.css';
$currentLab = '26';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../../config.php';

$message = '';
$messageType = '';
$editProduct = null;
$search = trim($_GET["search"] ?? '');
$filterCat = (int) ($_GET["category"] ?? 0);

// Handle INSERT
if ($_SERVER["REQUEST_METHOD"] === "POST" && ($_POST["action"] ?? '') === 'create') {
    $name = mysqli_real_escape_string($conn, trim($_POST["name"] ?? ''));
    $price = (float) ($_POST["price"] ?? 0);
    $stock = (int) ($_POST["stock"] ?? 0);
    $category_id = (int) ($_POST["category_id"] ?? 0);
    if (!empty($name) && $price > 0) {
        $sql = "INSERT INTO products (name, price, stock, category_id) VALUES ('$name', $price, $stock, $category_id)";
        if (mysqli_query($conn, $sql)) {
            $message = 'Product added successfully!';
            $messageType = 'success';
        } else {
            $message = 'Error: ' . mysqli_error($conn);
            $messageType = 'error';
        }
    } else {
        $message = 'Product name and valid price are required.';
        $messageType = 'error';
    }
}

// Handle UPDATE
if ($_SERVER["REQUEST_METHOD"] === "POST" && ($_POST["action"] ?? '') === 'update') {
    $id = (int) $_POST["id"];
    $name = mysqli_real_escape_string($conn, trim($_POST["name"] ?? ''));
    $price = (float) ($_POST["price"] ?? 0);
    $stock = (int) ($_POST["stock"] ?? 0);
    $category_id = (int) ($_POST["category_id"] ?? 0);
    $sql = "UPDATE products SET name='$name', price=$price, stock=$stock, category_id=$category_id WHERE id=$id";
    mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        $message = 'Product updated!';
        $messageType = 'success';
        $editProduct = null;
    }
}

// Handle DELETE
if (isset($_GET["delete_id"]) && isset($_GET["confirm"])) {
    $id = (int) $_GET["delete_id"];
    mysqli_query($conn, "DELETE FROM products WHERE id = $id");
    header("Location: index.php" . ($search ? "?search=" . urlencode($search) : '') . ($filterCat ? "&category=$filterCat" : '') . "&deleted=1");
    exit;
}

// Handle EDIT mode
if (isset($_GET["edit_id"])) {
    $id = (int) $_GET["edit_id"];
    $result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
    if ($result) $editProduct = mysqli_fetch_assoc($result);
}

if (isset($_GET["cancel_edit"])) {
    $editProduct = null;
}

// Build search query
$whereClauses = ["1=1"];
if ($search) $whereClauses[] = "p.name LIKE '%" . mysqli_real_escape_string($conn, $search) . "%'";
if ($filterCat > 0) $whereClauses[] = "p.category_id = $filterCat";
$whereSQL = implode(" AND ", $whereClauses);

$products = [];
$result = mysqli_query($conn, "SELECT p.*, c.name AS category_name FROM products p LEFT JOIN categories c ON p.category_id = c.id WHERE $whereSQL ORDER BY p.id DESC");
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) $products[] = $row;
    mysqli_free_result($result);
}

$categories = [];
$catResult = mysqli_query($conn, "SELECT * FROM categories ORDER BY name");
if ($catResult) {
    while ($row = mysqli_fetch_assoc($catResult)) $categories[] = $row;
    mysqli_free_result($catResult);
}

$totalProducts = count($products);
$totalValue = 0;
foreach ($products as $p) $totalValue += $p['price'] * $p['stock'];
?>

<h1 class="maybe-title">Lab 26: CRUD — Final Polish</h1>
<p class="subtitle">Complete product inventory management system with search and filter.</p>

<?php if ($message): ?>
<div class="<?php echo $messageType === 'error' ? 'danger-box' : 'tip-box'; ?>"><?php echo htmlspecialchars($message); ?></div>
<?php endif; ?>
<?php if (isset($_GET["deleted"])): ?>
<div class="tip-box">Product deleted.</div>
<?php endif; ?>

<div style="display:flex; gap:20px; margin-bottom:20px; flex-wrap:wrap;">
    <div class="tip-box" style="flex:1; min-width:200px;">
        <strong>Total Products:</strong> <?php echo $totalProducts; ?>
    </div>
    <div class="tip-box" style="flex:1; min-width:200px;">
        <strong>Total Inventory Value:</strong> Rp <?php echo number_format($totalValue, 0, ',', '.'); ?>
    </div>
</div>

<?php if ($editProduct): ?>
<h2>Edit Product #<?php echo $editProduct['id']; ?></h2>
<form method="POST" class="form-group">
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
            <option value="<?php echo $cat['id']; ?>" <?php echo ($editProduct['category_id'] == $cat['id']) ? 'selected' : ''; ?>><?php echo htmlspecialchars($cat['name']); ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit" class="btn btn-primary">Save Changes</button>
    <a href="?cancel_edit=1" class="btn">Cancel</a>
</form>
<?php else: ?>
<h2>Add New Product</h2>
<form method="POST" class="form-group">
    <input type="hidden" name="action" value="create">
    <label>Product Name:</label>
    <input type="text" name="name" required placeholder="e.g. Wireless Mouse">
    <label>Price (IDR):</label>
    <input type="number" name="price" step="0.01" min="0" required placeholder="e.g. 350000">
    <label>Stock:</label>
    <input type="number" name="stock" min="0" required placeholder="e.g. 50">
    <label>Category:</label>
    <select name="category_id">
        <option value="0">-- Select Category --</option>
        <?php foreach ($categories as $cat): ?>
            <option value="<?php echo $cat['id']; ?>"><?php echo htmlspecialchars($cat['name']); ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit" class="btn btn-primary">Add Product</button>
</form>
<?php endif; ?>

<h2>Product List</h2>
<form method="GET" style="display:flex; gap:10px; margin-bottom:15px; flex-wrap:wrap; align-items:center;">
    <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>" placeholder="Search products..." style="flex:1; min-width:200px; padding:8px;">
    <select name="category" style="padding:8px;">
        <option value="0">All Categories</option>
        <?php foreach ($categories as $cat): ?>
            <option value="<?php echo $cat['id']; ?>" <?php echo ($filterCat == $cat['id']) ? 'selected' : ''; ?>><?php echo htmlspecialchars($cat['name']); ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit" class="btn">Filter</button>
    <?php if ($search || $filterCat): ?>
        <a href="index.php" class="btn">Clear</a>
    <?php endif; ?>
</form>

<?php if ($totalProducts > 0): ?>
<table class="data-table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Value</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($products as $p): ?>
    <tr>
        <td><?php echo $p['id']; ?></td>
        <td><?php echo htmlspecialchars($p['name']); ?></td>
        <td><?php echo htmlspecialchars($p['category_name'] ?? '-'); ?></td>
        <td>Rp <?php echo number_format($p['price'], 0, ',', '.'); ?></td>
        <td><?php echo $p['stock']; ?></td>
        <td>Rp <?php echo number_format($p['price'] * $p['stock'], 0, ',', '.'); ?></td>
        <td>
            <a href="?edit_id=<?php echo $p['id']; ?>" class="btn">Edit</a>
            <a href="?delete_id=<?php echo $p['id']; ?>&confirm=1" class="btn" onclick="return confirm('Delete <?php echo addslashes($p['name']); ?>?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
<p>No products found<?php if ($search) echo ' matching "' . htmlspecialchars($search) . '"'; ?>.</p>
<?php endif; ?>

<p style="margin-top:20px;"><a href="../25-crud-update-delete/index.php" class="back-link">← Back: Lab 25</a></p>

<?php
mysqli_close($conn);
include __DIR__ . '/../includes/footer.php';
?>
