<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign-up</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
            crossorigin="anonymous">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
            <link rel = "stylesheet" href = "style.css">
            <link rel = "icon" href = "ato.png" type = "image/x-icon">
            <title>Sign-Up</title>
    </head>
    <style>
        .container
        {
            margin:0px auto;
            /* background-image:url('bg2.jpg'); */
            /* align:center; */
            /* position:absolute; */
        }
    </style>
    <body style = "background-image:url('purple.jpeg'); background-size:cover; background-repeat:no-repeat;">
        <div class="container">
            <fieldset>
                <form class="form-group" method="post" enctype="multipart/form-data" action="signup.php">
                <legend class>Sign-Up</legend>
                <label for class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                <label for class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Enter registered email id" required>
                <label for class="form-label">Phone Number</label>
                <input type="number" class="form-control" name="number" placeholder="Enter registered phone number" required>
                <label for class="form-label">Password</label>
                <input type="password" class="form-control" name="password"
                    placeholder="Enter Password" required>
                <label for class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confpass"
                    placeholder="Confirm Password" required><br>
                <button type="submit" class="btn btn-simple" name="submit">Submit</button>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <button type="reset" class="btn btn-simple" name="reset">Reset</button>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href = "login.php" style = "text-decoration:none;" class = "btn">Already have an account?</a><br>
                </form>
                <!-- otp form -->
                <form class="form-group1" method="post" enctype="multipart/form-data">
                <label for class="form-label"></label>
                <input type="text" class="form-control" name="otpnum" placeholder="Enter received otp" required><br>
                <input type = "submit" class="btn btn-simple" value ="VERIFY" name = "otpbtn">
                
                </form>
            </fieldset>
        </div>
    </body>
</html>
<!-- php code -->
<?php
// $otpnum = $_POST['otpnum'];
// $email_otp = rand(000000,999999);
// setcookie("verify",$email_otp);
// $ver = $_COOKIE['verify'];
if(isset($_POST['submit']))
{
 include('connection.php');
    // $otpnum = $_POST['otpnum'];
    // $email_otp = rand(000000,999999);
    // setcookie("verify",$email_otp);
    // $ver = $_COOKIE['verify'];
    $data = [
    "num_otp" => rand(000000,999999),
    "name" => "$_POST[name]",
    "email" => "$_POST[email]",
    "pass" => md5($_POST['password']),
    "confirm_pass" => md5($_POST['confpass']),
    "num" => "$_POST[number]",
    "email_otp" => rand(000000,999999),

    ];
    // print_r($data['pass']);
    // object
    $obj = new database();
    // $obj->insert($name,$email,$pass,$num,$email_otp,$num_otp);
    // $obj->select($name,$email,$pass,$num,$email_otp,$num_otp);
    $password = $obj->confirm_pass($data);
    if($password)
    {
        $exist = $obj->select($data);
        if($exist)
        {
            echo "
        <script>
         alert('email or username already exist');
        </script>
        ";
        }
        else
        {
            $reg = $obj->insert($data);
            if($reg)
            {
                $exist = $obj->select($data);
                // sent email
                $to=$data['email'];
                $subject="Verification for registered email";
                $msg="Your OTP verification code is : ".$data['email_otp'];
                $from="dhruv.sharmaldh02@gmail.com";
                $headers="MIME-Version:1.0" . "\r\n";
                $headers="Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers="From: $from";
                if(mail($to, $subject, $msg, $headers))
                {
                    echo "<script>
                    alert('OTP sent');
                    </script>";
                    
                }
                else
                {
                    echo "
                    <script>
                    alert('Wrong E-mail ID')
                    </script>
                    ";
                }
                
            }
            else
            {
                echo "";
            }
        }
    }
    else
    {
        echo "
        <script>
         alert('Password and Confirm Password Does not match')
        </script>
        ";
      
    }
}
// die;
// otp verify button
if(isset($_POST['otpbtn']))
{
    $otpnum = $_POST['otpnum'];
    include('connection.php');
    $obj = new database();
    $otp = $obj->otp_verify($otpnum);
    if($otp)
    {
        // echo $otpnum;
        // echo "<br>";
        // echo $ver;
        // echo "<br>";
        session_start();
        echo "
        <script>
        alert('WELCOME!!');
        window.location.href = 'home.php';
        </script>
        ";
    }
    else
    {
        echo "dont verify";
    }    
}




?>
