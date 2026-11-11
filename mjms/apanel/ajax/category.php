<?php
require_once('../checksession.php');
include('../includes/function.php');
$country_id = intval($_POST['country_id'] ?? 0);
$abc = mysqli_query($conn, "SELECT * FROM `tbl_subcategory` WHERE `cat_id`='" . $country_id . "' AND `sub_status`='1'");
?>
<option value="" selected="" disabled="">Select Category</option>
<?php
while ($abcd = mysqli_fetch_array($abc)) {
?>
<option value="<?php echo htmlspecialchars($abcd['sub_id'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($abcd['sub_title'], ENT_QUOTES, 'UTF-8'); ?></option>
<?php } ?>
