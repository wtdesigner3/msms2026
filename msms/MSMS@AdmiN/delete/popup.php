<?php
require_once('../checksession.php');
require('../includes/function.php');
$b = intval($_REQUEST['cid'] ?? 0);

$image = "SELECT * FROM `tbl_popup` WHERE `abt_id`='$b'";
$query = mysqli_query($conn, $image);
if ($query && $after = mysqli_fetch_assoc($query)) {
    $filename = basename($after['abt_images']);
    if (!empty($filename) && file_exists('../../uploads/popup/' . $filename)) {
        @unlink('../../uploads/popup/' . $filename);
    }
}

$data = mysqli_query($conn, "DELETE FROM `tbl_popup` WHERE `abt_id`='$b'");
if ($data) {	
    $_SESSION['success'] = "Popup Deleted Successfully";
}
header("Location: ../view_popup.php");
exit();
?>
