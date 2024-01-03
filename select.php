<?php
include('simple_connect.php');
$se = "SELECT * FROM `resume` WHERE `email` = '$resume[email]'";
$run = mysqli_query($con,$se);
if($run)
{
    $fetc = mysqli_fetch_assoc($run);
    if($fetc)
    {
        // session_start();
        $_SESSION['id'] = $fetc['id'];
        $_SESSION['name'] = $fetc['name'];
        $_SESSION['email'] = $fetc['email'];
    }
}
?>