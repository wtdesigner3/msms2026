<?php
require_once('../checksession.php');
require('../includes/function.php');
$b = intval($_REQUEST['cid'] ?? 0);
$data = mysqli_query($conn, "DELETE FROM `tbl_msmsprint_cat` WHERE `id`='$b'");
if ($data) {
    $_SESSION['warning'] = "Deleted successfully";
}
header("Location: ../manage-printcategory.php");
exit();
?>
