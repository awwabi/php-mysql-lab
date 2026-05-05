-- ============================================
-- PHP & MySQL Learning Lab — Database Setup
-- ============================================
-- Run this script in phpMyAdmin's SQL tab
-- or import it via phpMyAdmin's Import feature
-- ============================================

-- Explanation notes:
-- - CREATE DATABASE IF NOT EXISTS creates the database only if it doesn't exist yet
-- - Column types define what kind of data is stored in each field
-- - AUTO_INCREMENT automatically fills successive values for a primary key
-- - FOREIGN KEY enforces referential integrity between tables
-- - ENGINE=InnoDB and CHARSET=utf8mb4 specify storage engine and character set
-- - DEFAULT CURRENT_TIMESTAMP auto-fills timestamp fields on insert
--
-- Run this script to set up the lab database with sample data
-- ============================================

-- Create the database
CREATE DATABASE IF NOT EXISTS php_mysql_lab;
USE php_mysql_lab;

-- Create categories table
CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create products table
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    stock INT NOT NULL DEFAULT 0,
    category_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert sample categories
INSERT INTO categories (name, description) VALUES
('Electronics', 'Electronic devices and gadgets'),
('Clothing', 'Apparel and fashion items'),
('Food & Beverage', 'Food and drink products'),
('Books', 'Books and publications'),
('Sports', 'Sports equipment and accessories');

-- Insert sample products
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

-- Educational SQL comments:
-- - CREATE DATABASE IF NOT EXISTS ensures the database is created only if it does not already exist.
-- - Each column type (INT, VARCHAR, TEXT, DECIMAL, TIMESTAMP) defines the kind of data stored.
-- - AUTO_INCREMENT automatically assigns a unique value to new rows.
-- - FOREIGN KEY enforces referential integrity between tables.
-- - ENGINE=InnoDB is a transactional storage engine supporting foreign keys.
-- - CHARSET=utf8mb4 supports full Unicode characters.
-- - DEFAULT CURRENT_TIMESTAMP fills the timestamp columns with the current time on insert.
