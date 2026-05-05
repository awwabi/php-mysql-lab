-- ============================================
-- PHP & MySQL Learning Lab - Database Setup
-- ============================================
--
-- STEP 1: Create the database
--   Go to your SQL client and run:
--
--   CREATE DATABASE php_mysql_lab;
--
-- STEP 2: Select the database
--   Click "php_mysql_lab" in the sidebar to select it
--
-- STEP 3: Run the rest of this file
--   Run each statement below one by one
-- ============================================

DROP TABLE IF EXISTS products;
DROP TABLE IF EXISTS categories;

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    stock INT NOT NULL DEFAULT 0,
    category_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO categories (name, description) VALUES
('Electronics', 'Electronic devices and gadgets'),
('Clothing', 'Apparel and fashion items'),
('Food & Beverage', 'Food and drink products'),
('Books', 'Books and publications'),
('Sports', 'Sports equipment and accessories');

INSERT INTO products (name, description, price, stock, category_id) VALUES
('Laptop ASUS VivoBook', '14" display, Intel Core i5, 8GB RAM, 512GB SSD', 8500000, 15, 1),
('Wireless Mouse Logitech', 'Ergonomic wireless mouse with USB receiver', 350000, 50, 1),
('Mechanical Keyboard', 'Blue switches, RGB backlight, full-size', 750000, 30, 1),
('USB-C Hub 7-in-1', 'HDMI, USB 3.0, SD card reader', 450000, 25, 1),
('Cotton T-Shirt', '100% cotton, comfortable fit, various colors', 150000, 100, 2),
('Denim Jeans', 'Classic fit, dark blue, all sizes available', 350000, 60, 2),
('Running Shoes Nike', 'Lightweight, breathable mesh, good cushioning', 1200000, 20, 5),
('Yoga Mat', '6mm thick, non-slip surface, carry strap included', 280000, 40, 5),
('Instant Noodle Pack (24pcs)', 'Popular Indonesian instant noodles, assorted flavors', 96000, 200, 3),
('Premium Coffee Beans 1kg', 'Arabica single origin, medium roast', 185000, 45, 3),
('Introduction to PHP', 'Comprehensive guide for beginners, 2024 edition', 320000, 35, 4),
('MySQL Crash Course', 'Learn MySQL in 30 days, practical examples', 275000, 28, 4);
