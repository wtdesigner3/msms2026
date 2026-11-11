<?php
$isLocal = (isset($_SERVER['SERVER_NAME']) && in_array($_SERVER['SERVER_NAME'], ['localhost', '127.0.0.1']));

if ($isLocal) {
    $hostname = getenv('DB_HOST') ?: "localhost";
    $dbusername = getenv('DB_USER') ?: "root";
    $dbpassword = getenv('DB_PASS') ?: "";
    $dbname = getenv('DB_NAME') ?: "mahavirschool";
    @define('SITE_URL', 'http://localhost/office/mjms/');
} else {
    $hostname = getenv('DB_HOST') ?: "localhost";
    $dbusername = getenv('DB_USER') ?: "msmsdelh_mjms";
    $dbpassword = getenv('DB_PASS') ?: "(3vf@[a.XGOt";
    $dbname = getenv('DB_NAME') ?: "msmsdelh_mjsm";
    @define('SITE_URL', 'https://msmsdelhi.in/mjms/');
    @define('RECAPTCHA_SITE_KEY', '6LcEux8sAAAAAI2z1rjwnH1AngYU-M1Iv65pfKvo');
    @define('RECAPTCHA_SECRET_KEY', '6LcEux8sAAAAAGThB0em59dYe95itEfMMp2c41Ut');
}

$conn = @mysqli_connect($hostname, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    error_log("Database connection failure: " . mysqli_connect_error());
    die("A database connection error occurred. Please contact the administrator.");
} 
//=============================//**********//Extra Codes\\************\\===============================\\
@define("SITE_NAME", "Mahavir School");
//=============================//**********//Extra Codes\\************\\===============================\\
$phpdate = date("Y-m-d");
?>