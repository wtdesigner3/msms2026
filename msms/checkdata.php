<?php
include('inc/function.php'); 

if(isset($_POST['user_name']))
{
    $name = mysqli_real_escape_string($conn, trim($_POST['user_name']));
    $checkdata = "SELECT slc_admissionno FROM tbl_certificate WHERE slc_admissionno='$name'";
    $query = mysqli_query($conn, $checkdata);

    if($query && mysqli_num_rows($query) > 0)
    {
        echo "OK";
    }
    else
    {
        echo "Admission Number Is Not Correct";
    }
    exit();
}

if(isset($_POST['user_email']))
{
    $emailId = mysqli_real_escape_string($conn, trim($_POST['user_email']));
    $checkdata = "SELECT slc_dob FROM tbl_certificate WHERE slc_dob='$emailId'";
    $query = mysqli_query($conn, $checkdata);

    if($query && mysqli_num_rows($query) > 0)
    {
        echo "OK";
    }
    else
    {
        echo "Date of Birth Not Matched";
    }
    exit();
}
?>
