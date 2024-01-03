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
    <title>LOGIN</title>
</head>
<body style = "background-image:url('purple.jpeg');background-size:cover; background-repeat:no-repeat;">
<div class="container1">
            <fieldset>
                <form class="form-group" method="post" enctype="multipart/form-data" action="login.php">
                <legend class>LOGIN</legend>
                <label for class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Enter registered email id" required>
                <label for class="form-label">Password</label>
                <input type="password" class="form-control" name="password"
                    placeholder="Enter Password" required><br>
                <button type="submit" class="btn btn-simple" name="submit" value ="LOGIN">LOGIN</button>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href = "signup.php" style = "text-decoration:none;" class = "btn">Want Sign-up</a>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href = "forgot.php" style = "text-decoration:none;" class = "btn">Forgot password?</a>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                </form>
            </fieldset>
        </div> 
</body>
</html>
<?php
session_start();
if($_SESSION == true)
{
    function redirect_to($new_Location)
    {
        header("Location: ".$new_Location);
        exit;
    }
     redirect_to('profile.php');
}
else
{
if(isset($_POST['submit']))
{
    $data = [
    "mail" => $_POST['email'],
    "pwd" => md5($_POST['password']),
    ];
    include('connection.php');
    
    // calling class
    $login = new database();
    $sql = $login->login($data);
    if($sql)
    {
        header('Location:home.php');
    }
    else
    {
        echo "wrong username or password";
    }

}
}


?>