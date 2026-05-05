<?php
$pageTitle = 'Lab 11: MySQL Introduction — Concept Guide';
$baseUrl = '../style.css';
$currentLab = '11';
include '../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 11: MySQL Introduction</h1>
<p class="subtitle">Getting started with MySQL and phpMyAdmin.</p>

<h2>1. What is MySQL?</h2>
<p>
    MySQL is a <strong>Relational Database Management System (RDBMS)</strong>. It stores data in tables
    with rows and columns, and uses SQL (Structured Query Language) to manage the data.
</p>
<pre><code>Database → Table → Row → Column

Example:
Database: php_mysql_lab
  Table: products
    Row 1: id=1, name="Laptop", price=15000000
    Row 2: id=2, name="Mouse", price=350000</code></pre>

<h2>2. Setting Up phpMyAdmin</h2>
<p>phpMyAdmin is a web-based tool for managing MySQL databases:</p>
<ol>
    <li>Start XAMPP → Start Apache and MySQL services</li>
    <li>Open browser → Go to <code>http://localhost/phpmyadmin</code></li>
    <li>Login with username: <code>root</code>, password: (leave empty for XAMPP default)</li>
</ol>
<div class="tip-box">
    <strong>phpMyAdmin Interface:</strong> Left sidebar shows databases and tables. Top tabs include:
    Structure (table columns), SQL (run queries), Insert (add data), Browse (view data), Export/Import.
</div>

<h2>3. SQL Basics</h2>

<h3>CREATE DATABASE</h3>
<pre><code>CREATE DATABASE my_database;</code></pre>
<p>Creates a new database. Use <code>IF NOT EXISTS</code> to avoid errors:</p>
<pre><code>CREATE DATABASE IF NOT EXISTS my_database;</code></pre>

<h3>USE (Select Database)</h3>
<pre><code>USE my_database;</code></pre>
<p>Selects a database to work with. All subsequent queries target this database.</p>

<h3>DROP DATABASE</h3>
<pre><code>DROP DATABASE my_database;</code></pre>
<div class="danger-box">
    <strong>DANGER:</strong> This permanently deletes the database and ALL its tables and data. Cannot be undone!
</div>

<h2>4. SQL Syntax Rules</h2>
<ul>
    <li><strong>Keywords</strong> are case-insensitive but conventionally UPPERCASE (<code>SELECT</code>, <code>FROM</code>)</li>
    <li><strong>Statements</strong> end with a semicolon (<code>;</code>)</li>
    <li><strong>Strings</strong> are enclosed in single quotes (<code>'hello'</code>)</li>
    <li><strong>Identifiers</strong> (database, table, column names) can be backtick-quoted (<code>`my table`</code>)</li>
    <li><strong>Comments:</strong> <code>-- single line</code> or <code>/* multi-line */</code></li>
</ul>

<h2>5. Common Mistakes</h2>
<div class="danger-box">
    <strong>Mistake 1:</strong> Forgetting the semicolon at the end of a SQL statement.
</div>
<div class="danger-box">
    <strong>Mistake 2:</strong> Using double quotes instead of single quotes for string values.
</div>
<div class="danger-box">
    <strong>Mistake 3:</strong> Running DROP DATABASE on the wrong database — always double-check!
</div>

<?php include '../includes/footer.php'; ?>
