<?php
session_start();
if($_SESSION == false)
{
    function redirect_to($new_Location)
    {
        header("Location: ".$new_Location);
        exit;
    }
     redirect_to('signup.php');
}
else
{

if(isset($_POST['submit']))
{
$fetch_id = $_SESSION['iden'];
// echo $fetch_id;
$data = [
    "pass" => md5($_POST['newpass']),
    "confirm_pass" => md5($_POST['confpass']),
];
// $new_password = $_POST['newpass'];
include('connection.php');
$obj = new database;
if($confirm = $obj->confirm_pass($data))
{
    if($new = $obj->update_pass($data['pass'],$fetch_id))
    {
        echo "<script>
        alert('password updated successfully');
        </script>";
    }
    else
    {
        echo "dont updated";
    }
}

}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>New-password</title>
</head>
<body style = "background-image:url('purple.jpeg'); background-size:cover; background-repeat:no-repeat;">
    <div class = "container1">
        <fieldset>
            <form method = "post" class = "form-group" enctype = "multipart/form-data">
                <label>New password</label>
                <input type = "password" name = "newpass" class = "form-control" placeholder = "Enter new password" required><br>
                <label>Confirm password</label>
                <input type = "password" name = "confpass" class = "form-control" placeholder = "Enter new password" required>
                <br>
                <br>
                <button type = "submit" name = "submit" class = "btn btn-success">UPDATE</button>&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href = "logout.php" class = "btn btn-info">GO to LOGIN</a>
            </form>
        </fieldset>
    </div>
</body>
</html>
