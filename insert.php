<?php 
$con=mysqli_connect('localhost','root','','ajax');
if($con)
{
    echo " ";
}
else{
    echo "Error";
}

if(!empty($_POST))
{

    $name = $_POST['name'];
    $num = $_POST['number'];
    $choice = $_POST['choice'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pass = md5($_POST['password']);

    $insert = "INSERT INTO `data`( `name`, `number`, `choice` , `country` , `state` , `city` , `password`)
    VALUES ('$name','$num','$choice' , '$country' , '$state' , '$city' , '$pass')";

    if(mysqli_query( $con , $insert))
    {
        echo 1 ;
    }
    else
    {
        echo 0;
    }

}
else
{
// echo 'insert query commented!!';
    $select = "SELECT * FROM `data`";
    $run = mysqli_query( $con , $select);
    $out = '';
    if(mysqli_num_rows($run) > 0)
    {
        $out = '
        <table border = "1" width = "100%" cellspacing = "0" cellpadding = "10px" id = "table">
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Number</th>
        <th>Choice</th>
        <th>Country</th>
        <th>State</th>
        <th>City</th>
        <th>Password</th>
        <th>Delete</th>
        </tr>
        ';
        while($fe = mysqli_fetch_assoc($run))
        {
            $out .= "<tr>
            <td>{$fe["id"]}</td>
            <td>{$fe['name']}</td>
            <td>{$fe['number']}</td>
            <td>{$fe['choice']}</td>
            <td>{$fe['country']}</td>
            <td>{$fe['state']}</td>
            <td>{$fe['city']}</td>
            <td>{$fe['password']}</td>
            <td><button class = 'btn btn-danger' name = 'delete' id = 'delete' data-id = '{$fe["id"]}'>Delete</button></td>
            </tr>";
        }
        $out .= "</table>";
        mysqli_close($con);
        echo $out;
    }
    else
    {
        echo "no record found";
    }
}

// if(isset($_POST['delete']))
// {
//     $id = $_POST['id'];
//     $delete = "DELETE FROM `data` WHERE `id` = '$id' ";
//     $run = mysqli_query($con , $delete);
//     if($run)
//     {
//         echo 1;
//     }
//     else
//     {
//         echo 0;
//     }

// }
// else
// {
//     echo "Id not found";
// }
?>
