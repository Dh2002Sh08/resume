<?php
session_start();
$fetch_id = $_SESSION['id1'];
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
    // delete account
    if(isset($_POST['yes']))
    {
    include('connection.php');
    $obj = new database();
    $delete = $obj->delete($fetch_id);
    if($delete)
    {
        echo "<script>
        alert('DELETED SUCCESSFULLY');
        window.location.href = 'login.php';
        </script>
        ";
    }
    else
    {
        echo "not deleted";
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
 <link rel = "icon" href = "atom1.png" type = "image/x-icon">
    <title>DELETE</title>
    <style>
        h2
        {
            text-align:center;
        }
        .but
        {
            display:grid;
            text-align:center;
            margin:0px 70px 0px 70px;
        }
    </style>
</head>
<body style = "background-image:url('purple.jpeg'); background-size:cover; background-repeat:no-repeat;">
   <div class = "container1">
    <form method = "post" class = "form-group" enctype = "multipart/form-data">
        <h2>Are you sure ?<br><br> You want to <span style = "color:red;">DELETE</span> your Account ?</h2>
        <br><br>
        <!-- <div class = "but"> -->
       <center><button type = "submit" class = "btn btn-simple" name = "yes" >YES</button>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href = "profile.php" class = "btn btn-simple" name = "no">NO</a>
    </center>
        &nbsp;&nbsp;&nbsp;&nbsp;
        
    <!-- </div> -->
    </form>
   </div> 
</body>
</html>