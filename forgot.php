<?php 
include('connection.php');
    $otp = rand(000000,999999);
    // $mail =$_POST['email'];
$obj = new database();
// $data = [
//     "otp" => rand(000000,999999),
// ];
// $otp = rand(000000,999999);
// setcookie("verify",$otp);
// $otp = $_COOKIE['verify'];
// session_start();
// $fetch_id = $_SESSION['id'];
// if($_SESSION == true)
// {
//     function redirect($loc)
// {
//     header("Location: " . $loc);
// }
// redirect('login.php');
// exit();
// }
// else
// {
    // send mail for forgot password
    if(isset($_POST['submit']))
    {
        // include('connection.php');
        $data = [
            "mail" => $_POST['email'],
            "otp" => rand(000000,999999),
        ];
        $mail = $_POST['email'];
        // $obj = new database();
        $sent = $obj->sent_email($data);
        // print_r($sent);die;
        if($sent)
        {
            include_once('simple_connect.php');
            $sel = mysqli_query($con, "SELECT * FROM  `globiz_data` WHERE `email` = '$data[mail]'");
            if($sel)
            {
                if($r = mysqli_num_rows($sel) == 1)
                {
                    if($fetc = mysqli_fetch_assoc($sel))
                    {
                        session_start();
                        $_SESSION['iden'] = $fetc['id'];
                        $fetch_id = $_SESSION['iden'];
                    }
                }

            }
            // session_start();
            // $fetch_id = $_SESSION['iden'];
            $verify = $obj->update_otp($data,$fetch_id);
            if($verify)
            {
                // $Otp = $_POST['OTP'];
                // $otp_ver = $obj->otp_verify($Otp);
                // if($otp_ver)
                // {
                //     echo "<script>
                //     window.location.href = 'newpass.php';
                //     </script>";
                // }
                // else
                // {
                //     echo "dontttt verify";
                // }

                // $fetch_id = $_SESSION['iden'];
                echo "otp sended";
                // echo $fetch_id;
            }
            else
            {
                echo "dont verify";
            }
        }
        else
        {
            echo "mail dont sended";
        }
    }
    // otp verification for forgot password
    if(isset($_POST['otp_btn']))
    {
        $Otp = $_POST['OTP'];
        $otp_ver = $obj->otp_verify($Otp);
        if($otp_ver)
        {
            echo "<script>
            window.location.href = 'newpass.php';
            </script>";
        }
        else
        {
            echo "dont verify";
        }

    }







  
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="ato.png" type="image/x-icon">
    <title>Forgot password</title>
    <style>

    </style>
</head>

<body style="background-image:url('purple.jpeg'); background-size:cover; background-repeat:no-repeat;">
    <div class="container1">
        <fieldset>
            <form method="post" class="form-group" enctype="multipart/form-data">
                <legend>Forgot password?</legend>
                <label>Enter email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter registered email"><br>
                <button type="submit" name="submit" class="btn btn-simple">SEND OTP</button><br><br>
                <!-- </form>
                <form method="post" enctype="multipart/form-data"> -->
                <label>Enter OTP</label>
                <input type="text" name="OTP" class="form-control" placeholder="Enter received OTP"><br>
                <button type="submit" name="otp_btn" class="btn btn-simple">VERIFY</button>
            </form>
        </fieldset>
    </div>
    </div>
</body>

</html>