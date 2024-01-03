<?php
session_start();
$fetch_id = $_SESSION['id1'];
// $em = $_SESSION['email'];
// setcookie("verify",$otp);
// $ver = $_COOKIE['verify'];
// $otp = rand(000000,999999);
include('connection.php');
$upd = new database();
if($_SESSION == false)
{
    function redirect($loc)
{
    header("Location: " . $loc);
}
redirect('login.php');
exit();
}
else
{
    if(isset($_SESSION['id1']))
    {
    // $em = $_SESSION['email'];
    $name = $_SESSION['name1'];
    }   
// update profile name
    if(isset($_POST['new_name']))
    {
    // include('connection.php');
    // $fetch_id = $_SESSION['id'];
    $new_name = $_POST['name'];
    // $upd = new database();
    $run = $upd->update($new_name,$fetch_id);
    if($run)
    {
        echo "updated successfully";
    }
    else
    {
        echo "could not update";
    }
    }
    //update password
    if(isset($_POST['new_pass'])) 
    {
        $data = [
        "otp" => rand(000000,999999),
        "mail" => "$_SESSION[email1]",
        ];

        $new_password = md5($_POST['nwps']);
        $to = $data['mail'];
        $sub = "Verification for Password Updation";
        $msg = "Your OTP for updation of password is :".$data['otp'];
        $from="dhruv.sharmaldh02@gmail.com";
        $headers="MIME-Version:1.0" . "\r\n";
        $headers="Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers="From: $from";

        if(mail($to,$sub,$msg,$headers))
        {
            if($newotp = $upd->update_otp($data,$fetch_id))
            {  
                if($newp = $upd->update_pass($new_password,$fetch_id))
                {
                    echo "OTP Sended";
                }  
                else
                {
                    echo "Some error occur";
                }        
            }
            else
            {
                echo "OTP not Sended";
            }

        }
       
    }
    // OTP VERIFY
    if(isset($_POST['otp_btn']))
    {
        $notp = $_POST['otp'];
        if($veri = $upd->otp_verify($notp))
        {
            echo "<script>
            alert('Password Updated successfully');
            window.location.href = 'profile.php';
            </script>
            ";           
        }
        else
        {
            echo "Password not Updated";
        }
        
    }







}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
 crossorigin="anonymous"></script>
 <link rel = "stylesheet" href = "style.css">
 <link rel = "icon" href = "ato.png" type = "image/x-icon">
    <title>Update</title>
    <style>
        .head
        {
            text-align:center;
            color:white;
            font-size:50px;
            font-weight:600px;
        }
        
    </style>

</head>
<body style = "background-image:url('purple.jpeg'); background-size:cover; background-repeat:no-repeat;">
    <h3 class = "head">Want to Update</h3>
    
        <div class = "container1">
            <fieldset>
            <form method = "post" class = "form-group"  enctype ="multipart/form-data">
            <center><label>New Profile name</label></center>
                <input type ="text" class ="form-control" name = "name" placeholder = "Enter new profile name" required><br>
                <center><button type = "submit" name = "new_name" class = "btn btn-simple">UPDATE</button></center>
            </form>
            </fieldset>
        </div>
            <p style ="text-align:center; color:white;">`~``~``~``~``~``~``~`OR`~``~``~``~``~``~``~`</p>
            <div class = "container1">
                <form method = "post"  class = "form-group" enctype ="multipart/form-data">
                    <center><label>New Password</label></center>
                    <input type = "password" class ="form-control" name = "nwps" placeholder = "Enter new password" required><br>
                    <center><button type = "submit" name = "new_pass" class = "btn btn-simple">UPDATE</button></center>
                <!-- otp verification -->
                </form>
                <form method = "post" class = "form-group1" enctype ="multipart/form-data">
                <center>Enter OTP</center>
                <input type = "text" class ="form-control" name = "otp" placeholder = "Enter received OTP" required><br>
                <center><button type = "submit" name = "otp_btn" class = "btn btn-simple">VERIFY</button></center>
                </form><br><br>
            </div>
   
</body>
</html>