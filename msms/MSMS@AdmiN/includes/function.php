<?php
if (session_status() === PHP_SESSION_NONE) {
    @session_start();
}
$isLocal = (isset($_SERVER['SERVER_NAME']) && in_array($_SERVER['SERVER_NAME'], ['localhost', '127.0.0.1']));

if ($isLocal) {
    $hostname = getenv('DB_HOST') ?: "localhost";
    $dbusername = getenv('DB_USER') ?: "root";
    $dbpassword = getenv('DB_PASS') ?: "";
    $dbname = getenv('DB_NAME') ?: "mahavirschool";
} else {
    $hostname = getenv('DB_HOST') ?: "localhost";
    $dbusername = getenv('DB_USER') ?: "msmsdelh_msms";
    $dbpassword = getenv('DB_PASS') ?: "vLd~&,zy[bR{";
    $dbname = getenv('DB_NAME') ?: "msmsdelh_msms";
}
$conn = @mysqli_connect($hostname, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    error_log("Admin DB connection error: " . mysqli_connect_error());
    die("A database connection error occurred. Please contact system administration.");
} 
?>