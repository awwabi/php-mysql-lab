<?php
// Database Connection Configuration
// This file is included by PHP-MySQL integration labs (18+)
// XAMPP default credentials: root / no password

$host = 'localhost';
$user = 'root';
$pass = '';          // XAMPP default: empty password
$dbname = 'php_mysql_lab';

// Create connection
// mysqli_connect() opens a new connection to the MySQL server.
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
// If the connection fails, mysqli_connect_error() returns a string describing the error.
if (!$conn) {
    // die() prints the message and halts script execution
    die("Connection failed: " . mysqli_connect_error());
}

// What each parameter means:
// - $host: the MySQL server host (e.g., 'localhost')
// - $user: the MySQL user name (e.g., 'root')
// - $pass: the MySQL password for the user ('' for root on XAMPP)
// - $dbname: the database to connect to (our lab database)

// Why we check the connection:
// - To fail early and provide a clear error if the database isn't accessible.
// - Prevents running further queries on an invalid connection.

// How to change credentials if needed:
// - Update $host, $user, $pass, or $dbname with the new values.
// - Ensure the MySQL user has privileges for the database.
// - Re-run the script; on failure, mysqli_connect_error() will reflect the issue.
?>
