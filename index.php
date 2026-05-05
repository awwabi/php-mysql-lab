<?php
$pageTitle = 'PHP & MySQL Learning Lab';
$baseUrl = 'style.css';
$currentLab = '';
include 'includes/header.php';
?>
<div class="container">
    <h1>PHP & MySQL Learning Lab</h1>
    <p class="subtitle">A progressive 26-lab course covering PHP fundamentals, MySQL, and CRUD operations.</p>
    
    <!-- Phase 1: PHP Basics -->
    <div class="group">
        <h2 class="group-title">Phase 1: PHP Basics</h2>
        <div class="lab-grid">
            <!-- Lab 01 -->
            <a href="labs/01-php-introduction/index.php" class="lab-card">
                <div class="lab-card-number">01</div>
                <div class="lab-card-content">
                    <h3>PHP Introduction</h3>
                    <p>Syntax, echo, embedding in HTML, phpinfo()</p>
                    <span class="lab-badge" aria-label="Phase 1 badge">Phase 1</span>
                    <a href="labs/01-php-introduction/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <!-- Lab 02 -->
            <a href="labs/02-variables/index.php" class="lab-card">
                <div class="lab-card-number">02</div>
                <div class="lab-card-content">
                    <h3>Variables</h3>
                    <p>Declaring, naming rules, scope</p>
                    <a href="labs/02-variables/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <!-- Lab 03 -->
            <a href="labs/03-data-types/index.php" class="lab-card">
                <div class="lab-card-number">03</div>
                <div class="lab-card-content">
                    <h3>Data Types</h3>
                    <p>String, int, float, bool, array, null</p>
                    <a href="labs/03-data-types/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <!-- Lab 04 -->
            <a href="labs/04-operators/index.php" class="lab-card">
                <div class="lab-card-number">04</div>
                <div class="lab-card-content">
                    <h3>Operators</h3>
                    <p>Arithmetic, comparison, logical, string</p>
                    <a href="labs/04-operators/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <!-- Lab 05 -->
            <a href="labs/05-selection/index.php" class="lab-card">
                <div class="lab-card-number">05</div>
                <div class="lab-card-content">
                    <h3>Selection</h3>
                    <p>if/else/elseif, switch, match</p>
                    <a href="labs/05-selection/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <!-- Lab 06 -->
            <a href="labs/06-looping/index.php" class="lab-card">
                <div class="lab-card-number">06</div>
                <div class="lab-card-content">
                    <h3>Looping</h3>
                    <p>for, while, do-while, foreach</p>
                    <a href="labs/06-looping/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <!-- Lab 07 -->
            <a href="labs/07-arrays/index.php" class="lab-card">
                <div class="lab-card-number">07</div>
                <div class="lab-card-content">
                    <h3>Arrays</h3>
                    <p>Indexed, associative, multidimensional</p>
                    <a href="labs/07-arrays/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <!-- Lab 08 -->
            <a href="labs/08-sessions-cookies/index.php" class="lab-card">
                <div class="lab-card-number">08</div>
                <div class="lab-card-content">
                    <h3>Sessions & Cookies</h3>
                    <p>State management in PHP</p>
                    <a href="labs/08-sessions-cookies/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <!-- Lab 09 -->
            <a href="labs/09-form-handling/index.php" class="lab-card">
                <div class="lab-card-number">09</div>
                <div class="lab-card-content">
                    <h3>Form Handling</h3>
                    <p>$_GET, $_POST, $_REQUEST</p>
                    <a href="labs/09-form-handling/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <!-- Lab 10 -->
            <a href="labs/10-form-validation/index.php" class="lab-card">
                <div class="lab-card-number">10</div>
                <div class="lab-card-content">
                    <h3>Form Validation</h3>
                    <p>Server-side validation & sanitization</p>
                    <a href="labs/10-form-validation/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
        </div>
    </div>

    <!-- Phase 2: MySQL Fundamentals -->
    <div class="group">
        <h2 class="group-title">Phase 2: MySQL Fundamentals</h2>
        <div class="lab-grid">
            <!-- Labs 11-17 with phpMyAdmin badge -->
            <a href="labs/11-mysql-introduction/index.php" class="lab-card">
                <div class="lab-card-number">11</div>
                <div class="lab-card-content">
                    <h3>MySQL Introduction</h3>
                    <p>What is MySQL, phpMyAdmin tour</p>
                    <span class="lab-badge" aria-label="phpMyAdmin badge">phpMyAdmin</span>
                    <a href="labs/11-mysql-introduction/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <a href="labs/12-mysql-datatypes/index.php" class="lab-card">
                <div class="lab-card-number">12</div>
                <div class="lab-card-content">
                    <h3>MySQL Data Types</h3>
                    <p>INT, VARCHAR, TEXT, DATE, DECIMAL</p>
                    <span class="lab-badge" aria-label="phpMyAdmin badge">phpMyAdmin</span>
                    <a href="labs/12-mysql-datatypes/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <a href="labs/13-mysql-create-table/index.php" class="lab-card">
                <div class="lab-card-number">13</div>
                <div class="lab-card-content">
                    <h3>MySQL Create Table</h3>
                    <p>CREATE TABLE, constraints</p>
                    <span class="lab-badge" aria-label="phpMyAdmin badge">phpMyAdmin</span>
                    <a href="labs/13-mysql-create-table/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <a href="labs/14-mysql-insert/index.php" class="lab-card">
                <div class="lab-card-number">14</div>
                <div class="lab-card-content">
                    <h3>MySQL Insert</h3>
                    <p>INSERT INTO queries</p>
                    <span class="lab-badge" aria-label="phpMyAdmin badge">phpMyAdmin</span>
                    <a href="labs/14-mysql-insert/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <a href="labs/15-mysql-select/index.php" class="lab-card">
                <div class="lab-card-number">15</div>
                <div class="lab-card-content">
                    <h3>MySQL Select</h3>
                    <p>SELECT, WHERE, ORDER BY, LIMIT</p>
                    <span class="lab-badge" aria-label="phpMyAdmin badge">phpMyAdmin</span>
                    <a href="labs/15-mysql-select/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <a href="labs/16-mysql-update-delete/index.php" class="lab-card">
                <div class="lab-card-number">16</div>
                <div class="lab-card-content">
                    <h3>MySQL Update & Delete</h3>
                    <p>UPDATE, DELETE with WHERE</p>
                    <span class="lab-badge" aria-label="phpMyAdmin badge">phpMyAdmin</span>
                    <a href="labs/16-mysql-update-delete/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <a href="labs/17-mysql-joins/index.php" class="lab-card">
                <div class="lab-card-number">17</div>
                <div class="lab-card-content">
                    <h3>MySQL Joins</h3>
                    <p>INNER JOIN, LEFT JOIN</p>
                    <span class="lab-badge" aria-label="phpMyAdmin badge">phpMyAdmin</span>
                    <a href="labs/17-mysql-joins/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
        </div>
    </div>

    <!-- Phase 3: PHP-MySQL Integration -->
    <div class="group">
        <h2 class="group-title">Phase 3: PHP-MySQL Integration</h2>
        <div class="lab-grid">
            <a href="labs/18-database-connection/index.php" class="lab-card">
                <div class="lab-card-number">18</div>
                <div class="lab-card-content">
                    <h3>Database Connection</h3>
                    <p>mysqli_connect(), connection file</p>
                    <a href="labs/18-database-connection/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <a href="labs/19-php-insert-data/index.php" class="lab-card">
                <div class="lab-card-number">19</div>
                <div class="lab-card-content">
                    <h3>PHP Insert Data</h3>
                    <p>Form → PHP → INSERT query</p>
                    <a href="labs/19-php-insert-data/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <a href="labs/20-php-select-data/index.php" class="lab-card">
                <div class="lab-card-number">20</div>
                <div class="lab-card-content">
                    <h3>PHP Select Data</h3>
                    <p>SELECT, fetch, display in table</p>
                    <a href="labs/20-php-select-data/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <a href="labs/21-php-update-data/index.php" class="lab-card">
                <div class="lab-card-number">21</div>
                <div class="lab-card-content">
                    <h3>PHP Update Data</h3>
                    <p>Edit form, pre-fill, UPDATE</p>
                    <a href="labs/21-php-update-data/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <a href="labs/22-php-delete-data/index.php" class="lab-card">
                <div class="lab-card-number">22</div>
                <div class="lab-card-content">
                    <h3>PHP Delete Data</h3>
                    <p>Delete with confirmation</p>
                    <a href="labs/22-php-delete-data/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
        </div>
    </div>

    <!-- Phase 4: CRUD Capstone -->
    <div class="group">
        <h2 class="group-title">Phase 4: CRUD Capstone</h2>
        <div class="lab-grid">
            <a href="labs/23-crud-setup/index.php" class="lab-card">
                <div class="lab-card-number">23</div>
                <div class="lab-card-content">
                    <h3>CRUD Setup</h3>
                    <p>Database design, seed data</p>
                    <span class="lab-badge" aria-label="Capstone badge">Capstone</span>
                    <a href="labs/23-crud-setup/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <a href="labs/24-crud-create-read/index.php" class="lab-card">
                <div class="lab-card-number">24</div>
                <div class="lab-card-content">
                    <h3>CRUD Create & Read</h3>
                    <p>Product form + listing</p>
                    <span class="lab-badge" aria-label="Capstone badge">Capstone</span>
                    <a href="labs/24-crud-create-read/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <a href="labs/25-crud-update-delete/index.php" class="lab-card">
                <div class="lab-card-number">25</div>
                <div class="lab-card-content">
                    <h3>CRUD Update & Delete</h3>
                    <p>Edit + delete functionality</p>
                    <span class="lab-badge" aria-label="Capstone badge">Capstone</span>
                    <a href="labs/25-crud-update-delete/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
            <a href="labs/26-crud-final-polish/index.php" class="lab-card">
                <div class="lab-card-number">26</div>
                <div class="lab-card-content">
                    <h3>CRUD Final Polish</h3>
                    <p>Search, filter, complete styling</p>
                    <span class="lab-badge" aria-label="Capstone badge">Capstone</span>
                    <a href="labs/26-crud-final-polish/explain.php" class="learn-link" style="margin-left:8px">Learn</a>
                </div>
            </a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
