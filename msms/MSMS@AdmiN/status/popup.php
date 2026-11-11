<?php
require_once('../checksession.php');
require('../includes/function.php');

$qs = intval($_REQUEST['id'] ?? 0);
if ($qs > 0) {
    $data = mysqli_query($conn, "SELECT $st FROM $t WHERE $id='$qs'");
    if ($data && $rec = mysqli_fetch_array($data)) {
        $newStatus = ($rec['abt_status'] == 0) ? 1 : 0;
        mysqli_query($conn, "UPDATE $t SET $st='$newStatus' WHERE $id='$qs'");
    }
}
?>
