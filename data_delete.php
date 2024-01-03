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
    $id = $_POST['id'];
    $delete = "DELETE FROM `data` WHERE `id` = '$id' ";
    $run = mysqli_query($con , $delete);
    if($run)
    {
        echo 1;
    }
    else
    {
        echo 0;
    }

}
else
{
    echo "Id not found";
}
?>