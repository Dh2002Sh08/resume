<?php 
// session_start();
// if($_SESSION == false)
// {
//     function redirect_to($new_Location)
//     {
//         header("Location: ".$new_Location);
//         exit;
//     }
//     redirect_to('login.php');
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
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
        crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = "style.css">
    <!-- ==== Font Awesome CSS ==== -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel = "icon" href = "ato.png" type = "image/x-icon">
    <title>Home</title>
    <style>
        /* .welcome-text a
        {
            color:white;
        } */
        .logo1
        {
            float:left;
            padding: 30px 0 30px 25px;
            margin-left:75px;
            padding-top:20px;
        }
        .logo1 img:hover
        {
            transform: scale(1.1);
            transition: 0.5s ease-in-out;
        }
        /* .logo1 img
        { */
            /* width:25%; */
            /* padding: 15px 0; */
        /* } */
        /* .wrapper1
        {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;

        } */
    </style>
</head>
<body  style = "background-image:url('purple.jpeg');  background-size: cover; background-repeat:no-repeat; height:auto;" >

<header>
    <div class="wrapper">
    <div class="logo1">
            <img src="ato.png" style = "height:50px; width:50px;">
        </div>
                <ul class="nav-area">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <?php
                    session_start();
                    if($_SESSION == true)
                    {
                        $name = $_SESSION['name1'];
                        echo "<li style = 'color:rgb(249, 247, 204);'><a1>"."WELCOME  ".$name."</a1></li>";
                        ?>
                        <li><a href="login.php">Profile</a></li>
                      <?php  
                    } 
                    else
                    {
                        ?>
                        <li><a href="signup.php">Sign-up</a></li>
                        <li><a href="login.php">Login</a></li>
                        <?php
                    }
                    ?>
                    
                </ul>
    </div>
                <div class="welcome-text">
                    <h1>Welcome to Resume makers</h1>
                    <a href="about.php" class = "btn btn-dark"><i class="fas fa-arrow-right fa-lg" style="color: ##cccac8;"> Explore</i></a>
                </div>
</header>







</body>
</html>