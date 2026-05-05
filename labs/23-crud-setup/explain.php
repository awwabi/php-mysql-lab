<?php
$pageTitle = 'Lab 23: CRUD Setup — Concept Guide';
$baseUrl = '../../style.css';
$currentLab = '23';
include '../includes/header.php';
?>
<a href="index.php" class="back-link">&larr; Back to Lab Exercise</a>

<h1 class="maybe-title">Lab 23: CRUD Setup</h1>
<p class="subtitle">Understanding CRUD and setting up the database.</p>

<h2>1. What is CRUD?</h2>
<p>CRUD is the set of four basic operations for managing data in any application:</p>
<table class="compare">
    <tr><th>Operation</th><th>SQL</th><th>HTTP</th><th>Description</th></tr>
    <tr><td><strong>Create</strong></td><td><code>INSERT</code></td><td>POST</td><td>Add new data</td></tr>
    <tr><td><strong>Read</strong></td><td><code>SELECT</code></td><td>GET</td><td>View existing data</td></tr>
    <tr><td><strong>Update</strong></td><td><code>UPDATE</code></td><td>PUT/POST</td><td>Modify existing data</td></tr>
    <tr><td><strong>Delete</strong></td><td><code>DELETE</code></td><td>DELETE</td><td>Remove data</td></tr>
</table>

<h2>2. Why CRUD Matters</h2>
<p>Almost every web application revolves around CRUD operations:</p>
<ul>
    <li><strong>Social media:</strong> Create post, Read feed, Update profile, Delete post</li>
    <li><strong>E-commerce:</strong> Add to cart (Create), Browse products (Read), Change quantity (Update), Remove item (Delete)</li>
    <li><strong>Blogging:</strong> Write article (Create), View articles (Read), Edit article (Update), Remove article (Delete)</li>
</ul>

<h2>3. Database Design</h2>
<p>Our product inventory uses two tables with a foreign key relationship:</p>
<pre><code>categories (parent table)
├── id (PRIMARY KEY)
├── name
└── description

products (child table)
├── id (PRIMARY KEY)
├── name
├── price
├── stock
├── category_id (FOREIGN KEY → categories.id)
└── created_at</code></pre>

<h2>4. Project Structure</h2>
<pre><code>php-mysql-lab/
├── index.php          (Landing page)
├── style.css          (Shared styles)
├── config.php         (Database connection)
├── setup.sql          (Database setup)
├── includes/
│   ├── header.php     (Navigation)
│   └── footer.php     (Footer)
└── labs/
    ├── 23-crud-setup/       (This lab - setup guide)
    ├── 24-crud-create-read/ (Create + Read operations)
    ├── 25-crud-update-delete/ (Update + Delete operations)
    └── 26-crud-final-polish/  (Complete CRUD application)</code></pre>

<h2>5. The CRUD Flow</h2>
<pre><code>User visits page
    → PHP connects to MySQL
    → PHP runs SELECT query
    → PHP displays results in HTML table

User submits form
    → PHP receives POST data
    → PHP sanitizes input
    → PHP builds INSERT/UPDATE query
    → PHP executes query
    → PHP redirects to list page

User clicks delete
    → PHP receives ID from URL
    → PHP shows confirmation
    → PHP builds DELETE query
    → PHP executes query
    → PHP redirects to list page</code></pre>

<h2>6. Prerequisites Checklist</h2>
<ul>
    <li>✅ XAMPP installed and running (Apache + MySQL)</li>
    <li>✅ phpMyAdmin accessible at <code>http://localhost/phpmyadmin</code></li>
    <li>✅ <code>setup.sql</code> executed (database + tables + sample data created)</li>
    <li>✅ <code>config.php</code> has correct connection settings</li>
    <li>✅ Lab 18 (Database Connection) completed successfully</li>
</ul>

<?php include '../includes/footer.php'; ?>
