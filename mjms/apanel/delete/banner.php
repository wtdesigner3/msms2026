<?php
require_once('../checksession.php');
require('../includes/function.php');
$b = intval($_REQUEST['cid'] ?? 0);
$data = mysqli_query($conn, "DELETE FROM `tbl_banner` WHERE `bnr_id`='$b'");
if ($data) {
    $_SESSION['warning'] = "Banner Deleted successfully";
}
header("Location: ../view-banner.php");
exit();
?>
