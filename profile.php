<?php
session_start();
if ($_SESSION == false)
{
     function redirect_to($new_Location)
    {
        header("Location: ".$new_Location);
        exit;
    }
     redirect_to('login.php');
}
 else
{
    // // profile information with id
    if(isset($_SESSION['id1']))
    {
    $fetch_id = $_SESSION['id1'];
    $em = $_SESSION['email1'];
    $name = $_SESSION['name1'];
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
 <link rel = "icon" href = "ato.png" type = "image/x-icon">
    <title>Profile</title>
    <style>
        #link
        {
            transform:translate(auto);
           
        }
        .con
        {
            text-align:center;
        }
        .btn 
        {
            background-color:#4a2748;
            color:white;
        }
        .btn:hover
        {
            color:black;
            background-color:white;
            transition:0.5s ease-in-out;
        }
        td
        {
            line-height:35px;
        }
    </style>
</head>
<body style = "background-image:url('purple.jpeg'); background-repeat:no-repeat;
 background-size: cover;
">
    <table class = "table table-dark">
        <tr style = "text-align:center;">
            <th>ID</th>
            <th>NAME</th>
            <th>E-mail</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <tr style = "text-align:center;">
            <td><?php echo "$fetch_id";  ?></td>
            <td><?php echo "$name";  ?></td>
            <td><?php echo "$em";  ?></td>
            <td><a class="btn btn-simple" href = "update.php">UPDATE</a> </td>
            <td>
            <a class="btn btn-simple" href = "delete.php">DELETE</a>
            </td>
        </tr>
    </table>
    <div class = "con">
    <a class = "btn btn-simple" id ="link" href = "logout.php">LOGOUT</a>
    </div>
</body>
</html>
