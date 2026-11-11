<?php
include_once __DIR__ . '/checksession.php';
$msg = "";
$erromsg = '';
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$addr = $protocol . $_SERVER['HTTP_HOST'];

if (isset($_POST['getlink'])) {
    if (!empty($_FILES['img']['tmp_name']) && is_uploaded_file($_FILES['img']['tmp_name'])) {
        $srcpath = $_FILES['img']['tmp_name'];
        $origName = basename($_FILES['img']['name']);
        $ext = strtolower(pathinfo($origName, PATHINFO_EXTENSION));
        
        $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif', 'pdf');
        $allowedMimes = array('image/jpeg', 'image/pjpeg', 'image/png', 'image/gif', 'application/pdf');
        
        $mimeType = '';
        if (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimeType = finfo_file($finfo, $srcpath);
            finfo_close($finfo);
        } else {
            $mimeType = $_FILES['img']['type'];
        }
        
        if (!in_array($ext, $allowedExtensions) || (!empty($mimeType) && !in_array($mimeType, $allowedMimes))) {
            $erromsg = "Error: Invalid file type. Only JPG, PNG, GIF, and PDF files are permitted.";
        } else {
            if (in_array($ext, array('jpg', 'jpeg', 'png', 'gif'))) {
                $imgCheck = @getimagesize($srcpath);
                if ($imgCheck === false) {
                    $erromsg = "Error: Corrupted or invalid image file.";
                }
            }
            
            if (empty($erromsg)) {
                $targetDir = __DIR__ . '/../uploads';
                if (!is_dir($targetDir)) {
                    @mkdir($targetDir, 0755, true);
                }
                
                $safeBase = preg_replace('/[^a-zA-Z0-9_-]/', '_', pathinfo($origName, PATHINFO_FILENAME));
                $safeName = time() . '_' . substr($safeBase, 0, 40) . '.' . $ext;
                $targetPath = $targetDir . '/' . $safeName;
                
                if (move_uploaded_file($srcpath, $targetPath)) {
                    $msg = $addr . "/mjms/uploads/" . $safeName;
                    $successflag = 1;
                } else {
                    $erromsg = "Error: Failed to move uploaded file.";
                }
            }
        }
    } else {
        $erromsg = "Please select a valid file to upload.";
    }
}
?>
