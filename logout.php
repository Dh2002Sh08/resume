<?php 
session_start();

session_unset();

session_destroy();
function redirect($loc)
{
    header("Location: " . $loc);
}
redirect('home.php');
exit();

?>