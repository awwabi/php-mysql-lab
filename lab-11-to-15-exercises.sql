-- ============================================
-- STEP 1: Run at phpMyAdmin HOME page (no database selected)
-- ============================================

CREATE DATABASE student_lab;

CREATE DATABASE IF NOT EXISTS datatype_lab;

CREATE DATABASE IF NOT EXISTS table_lab;


-- ============================================
-- DATABASE: student_lab (Lab 11)
-- Select "student_lab" from the left sidebar first
-- ============================================

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    major VARCHAR(50),
    gpa DECIMAL(3,2)
);

DESCRIBE students;

DROP TABLE students;


-- ============================================
-- DATABASE: datatype_lab (Lab 12)
-- Select "datatype_lab" from the left sidebar first
-- ============================================

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    stock INT UNSIGNED DEFAULT 0,
    weight FLOAT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    is_active TINYINT(1) DEFAULT 1
);

DESCRIBE products;

INSERT INTO products (name, description, price, stock, weight, is_active)
VALUES ('Laptop', 'A powerful laptop for programming', 15000000, 50, 2.3, 1);

INSERT INTO products (name, price, stock) VALUES ('Mouse', 'not a number', 100);

CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(100),
    event_date DATE,
    event_time TIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO events (event_name, event_date, event_time) VALUES
('Workshop', '2026-06-15', '09:00:00'),
('Exam', '2026-07-01', '13:30:00');

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    role ENUM('admin', 'editor', 'viewer') DEFAULT 'viewer',
    permissions SET('read', 'write', 'delete') DEFAULT 'read'
);

INSERT INTO users (username, role, permissions) VALUES
('alice', 'admin', 'read,write,delete'),
('bob', 'editor', 'read,write');


-- ============================================
-- DATABASE: table_lab (Lab 13)
-- Select "table_lab" from the left sidebar first
-- ============================================

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    description TEXT
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    stock INT UNSIGNED DEFAULT 0,
    category_id INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

INSERT INTO categories (name, description) VALUES
('Electronics', 'Electronic devices and gadgets'),
('Clothing', 'Apparel and accessories'),
('Books', 'Printed and digital books');

INSERT INTO products (name, price, stock, category_id) VALUES
('Laptop', 15000000, 25, 1),
('T-Shirt', 150000, 100, 2),
('PHP Programming', 250000, 50, 3),
('Mouse', 350000, 75, 1);

INSERT INTO products (name, price, stock, category_id) VALUES
('Invalid Product', 100000, 10, 999);

EXPLAIN products;

ALTER TABLE products ADD COLUMN sku VARCHAR(50) AFTER name;


-- ============================================
-- DATABASE: php_mysql_lab (Lab 14 & 15)
-- Select "php_mysql_lab" from the left sidebar first
-- Make sure you have run setup.sql to create this database
-- ============================================

INSERT INTO products (name, price, stock, category_id)
VALUES ('Wireless Keyboard', 450000, 30, 1);

INSERT INTO products (name, price, stock, category_id) VALUES
('USB Cable', 50000, 200, 1),
('Monitor', 3000000, 15, 1),
('Webcam', 750000, 40, 1);

INSERT INTO products (name, price, category_id)
VALUES ('Test Product', 100000, 2);

INSERT INTO products (id, name, price, stock, category_id)
VALUES (100, 'Special Item', 999999, 1, 3);

SELECT * FROM products ORDER BY id DESC LIMIT 10;

INSERT INTO categories (name, description) VALUES ('Electronics', 'Duplicate!');

SELECT * FROM products;

SELECT name, price, stock FROM products;

SELECT name, price FROM products WHERE price > 1000000;

SELECT name, price, stock FROM products
WHERE price > 500000 AND stock > 20;

SELECT name, price FROM products ORDER BY price DESC;

SELECT name, price FROM products ORDER BY price DESC LIMIT 5;

SELECT name FROM products WHERE name LIKE '%phone%';

SELECT DISTINCT category_id FROM products;


-- ============================================
-- STEP 3: Run at phpMyAdmin HOME page (cleanup)
-- ============================================

DROP DATABASE student_lab;
