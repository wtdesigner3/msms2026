<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin_ses']) || $_SESSION['admin_ses'] !== "mahavirschool@#p9w84r" . session_id()) {
    header("Location: login/login.php");
    exit();
}
?>
