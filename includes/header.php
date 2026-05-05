<?php
// Expect $pageTitle to be set before including this file
if (!isset($pageTitle)) $pageTitle = 'PHP & MySQL Learning Lab';
if (!isset($currentLab)) $currentLab = '';
// Determine active lab from URL if not provided
$activeLab = $currentLab;
if (empty($activeLab) && isset($_SERVER['PHP_SELF'])) {
    if (preg_match('#/labs/([0-9]{2})-#', $_SERVER['PHP_SELF'], $m)) {
        $activeLab = $m[1];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="stylesheet" href="<?= $baseUrl ?? '../style.css' ?>">
</head>
<body>
    <!-- Minimal mobile navigation toggle (no external libs) -->
    <button id="nav-toggle" class="nav-toggle" aria-label="Toggle navigation">☰</button>
    <nav class="sidebar" aria-label="Labs navigation">
        <div class="sidebar-header">
            <a href="<?= $baseUrl ?? '../index.php' ?>" class="sidebar-logo">PHP & MySQL Lab</a>
        </div>
        <!-- Phase 1: PHP Basics (Labs 01-10) -->
        <div class="sidebar-group">
            <div class="sidebar-group-title">Phase 1: PHP Basics</div>
            <a href="../labs/01-php-introduction/index.php" class="sidebar-link <?= $activeLab === '01' ? 'active' : '' ?>">01. PHP Introduction</a>
            <a href="../labs/02-variables/index.php" class="sidebar-link <?= $activeLab === '02' ? 'active' : '' ?>">02. Variables</a>
            <a href="../labs/03-data-types/index.php" class="sidebar-link <?= $activeLab === '03' ? 'active' : '' ?>">03. Data Types</a>
            <a href="../labs/04-operators/index.php" class="sidebar-link <?= $activeLab === '04' ? 'active' : '' ?>">04. Operators</a>
            <a href="../labs/05-selection/index.php" class="sidebar-link <?= $activeLab === '05' ? 'active' : '' ?>">05. Selection</a>
            <a href="../labs/06-looping/index.php" class="sidebar-link <?= $activeLab === '06' ? 'active' : '' ?>">06. Looping</a>
            <a href="../labs/07-arrays/index.php" class="sidebar-link <?= $activeLab === '07' ? 'active' : '' ?>">07. Arrays</a>
            <a href="../labs/08-sessions-cookies/index.php" class="sidebar-link <?= $activeLab === '08' ? 'active' : '' ?>">08. Sessions & Cookies</a>
            <a href="../labs/09-form-handling/index.php" class="sidebar-link <?= $activeLab === '09' ? 'active' : '' ?>">09. Form Handling</a>
            <a href="../labs/10-form-validation/index.php" class="sidebar-link <?= $activeLab === '10' ? 'active' : '' ?>">10. Form Validation</a>
        </div>
        <!-- Phase 2: MySQL Fundamentals (Labs 11-17) -->
        <div class="sidebar-group">
            <div class="sidebar-group-title">Phase 2: MySQL Fundamentals</div>
            <a href="../labs/11-mysql-introduction/index.php" class="sidebar-link <?= $activeLab === '11' ? 'active' : '' ?>">11. MySQL Introduction</a>
            <a href="../labs/12-mysql-data-types/index.php" class="sidebar-link <?= $activeLab === '12' ? 'active' : '' ?>">12. MySQL Data Types</a>
            <a href="../labs/13-mysql-create-table/index.php" class="sidebar-link <?= $activeLab === '13' ? 'active' : '' ?>">13. MySQL Create Table</a>
            <a href="../labs/14-mysql-insert/index.php" class="sidebar-link <?= $activeLab === '14' ? 'active' : '' ?>">14. MySQL Insert</a>
            <a href="../labs/15-mysql-select/index.php" class="sidebar-link <?= $activeLab === '15' ? 'active' : '' ?>">15. MySQL Select</a>
            <a href="../labs/16-mysql-update-delete/index.php" class="sidebar-link <?= $activeLab === '16' ? 'active' : '' ?>">16. MySQL Update & Delete</a>
            <a href="../labs/17-mysql-joins/index.php" class="sidebar-link <?= $activeLab === '17' ? 'active' : '' ?>">17. MySQL Joins</a>
        </div>
        <!-- Phase 3: PHP-MySQL Integration (Labs 18-22) -->
        <div class="sidebar-group">
            <div class="sidebar-group-title">Phase 3: PHP-MySQL Integration</div>
            <a href="../labs/18-database-connection/index.php" class="sidebar-link <?= $activeLab === '18' ? 'active' : '' ?>">18. Database Connection</a>
            <a href="../labs/19-php-insert-data/index.php" class="sidebar-link <?= $activeLab === '19' ? 'active' : '' ?>">19. PHP Insert Data</a>
            <a href="../labs/20-php-select-data/index.php" class="sidebar-link <?= $activeLab === '20' ? 'active' : '' ?>">20. PHP Select Data</a>
            <a href="../labs/21-php-update-data/index.php" class="sidebar-link <?= $activeLab === '21' ? 'active' : '' ?>">21. PHP Update Data</a>
            <a href="../labs/22-php-delete-data/index.php" class="sidebar-link <?= $activeLab === '22' ? 'active' : '' ?>">22. PHP Delete Data</a>
        </div>
        <!-- Phase 4: CRUD Capstone (Labs 23-26) -->
        <div class="sidebar-group">
            <div class="sidebar-group-title">Phase 4: CRUD Capstone</div>
            <a href="../labs/23-crud-setup/index.php" class="sidebar-link <?= $activeLab === '23' ? 'active' : '' ?>">23. CRUD Setup</a>
            <a href="../labs/24-crud-create-read/index.php" class="sidebar-link <?= $activeLab === '24' ? 'active' : '' ?>">24. CRUD Create & Read</a>
            <a href="../labs/25-crud-update-delete/index.php" class="sidebar-link <?= $activeLab === '25' ? 'active' : '' ?>">25. CRUD Update & Delete</a>
            <a href="../labs/26-crud-final-polish/index.php" class="sidebar-link <?= $activeLab === '26' ? 'active' : '' ?>">26. CRUD Final Polish</a>
        </div>
    </nav>
    <div class="content">
        <script>
        (function(){
            var btn = document.getElementById('nav-toggle');
            if (!btn) return;
            btn.addEventListener('click', function(){
                document.body.classList.toggle('nav-open');
            });
        })();
        </script>
