<?php
session_start();
if($_SESSION['name'] == false)
{
    function redirect_to($new_Location)
    {
        header("Location: ".$new_Location);
        exit;
    }
    redirect_to('form.php');
}
if(isset($_SESSION['id']))
{
    include('data.php');
    $id = $_SESSION['id'];
    echo $id;
    $obj = new data;
    $resu = $obj->select($id);
}
// include('data.php');
// if(isset($_POST['submit']))
// {
$resume = [
    "name" => "$_SESSION[name]",
    "email" => "$_SESSION[email]",
    "skill" =>"$_SESSION[skill]",
    "skill1" => "$_SESSION[skill1]",
    "skill2" => "$_SESSION[skill2]",
    "qual" => "$_SESSION[qual]",
    "qual1" => "$_SESSION[qual1]",
    "qual2" => "$_SESSION[qual2]",
    "achie" => "$_SESSION[achie]",
    "achie1" => "$_SESSION[achie2]",
    "achie2" => "$_SESSION[achie3]",
    "exp" => "$_SESSION[exp]",
    "exp1" => "$_SESSION[exp1]",
    // "exp2" => "$_SESSION[exp2]",
    "address" => "$_SESSION[address]",
    "contact" => "$_SESSION[contact]",
    // "img" => $_FILES['file']['name'],
];
// print_r($resume['img']);die;
// declaring object
// $obj = new data;

// declaring insert query
// $insert = $obj->insert($resume);
// if($insert)
// {
//     $tmp = $_FILES['file']['tmp_name'];
//    if($upload = $obj->image($resume['img'],$tmp))
//    {
//     echo "done";
//    }
// }
// else
// {
//     echo "fail";
// }


// print_r($resume['name']);
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
    <!-- ==== Font Awesome CSS ==== -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="ato.png" type="image/x-icon">
    <title>RESUME</title>
    <style>
    p {
        font-family: "Times New Roman", Times, serif;
    }
    </style>

</head>

<body class="back_ground">
    <div class="previous">
        <a href="resume2.php"><i class="fas fa-arrow-left fa-lg" style="color: #8424f9;"></i></a>
    </div>
    <div class="forward">
        <a href="resume4.php"><i class="fas fa-arrow-right fa-lg" style="color: #8424f9;"></i></a>
    </div>
    <div class="resume_back3">
        <div class="back">
            <?php
            // $sel = $obj->select($resume['img']);
            // print_r($id);
            // include_once('select.php');
            $id = $_SESSION['id'];
            // print_r($id);
            $dis = $obj->display($id);
                           
         ?>
            <br><br>
        </div>
        <div class="name" style=" font-family: 'Times New Roman', Times, serif;">
            <!-- name -->
            <h1><?php 
            //  $resu = $obj->select($id);
            //  $name = $_SESSION['name'];
            print_r($resume['name']);  ?></h1>
        </div>
        <hr>
        <div class="des">
            <br><br>
            <!-- skills -->
            <h2>Skills</h2>
            <p> * <?php print_r($resume['skill']);   ?></p>
            <p> * <?php print_r($resume['skill1']);   ?></p>
            <p> * <?php print_r($resume['skill2']);   ?></p>
        </div>
        <div class="des1">
            <!-- experience -->
            <h2>Experience</h2>
            <p> * <?php print_r($resume['exp']);   ?></p>
            <p> * <?php print_r($resume['exp1']);   ?></p>
            <p> <?php //print_r($resume['exp2']);   ?></p>
        </div>
        <div class="des">
            <!-- qualification -->
            <h2>Qualification</h2>
            <p> * <?php print_r($resume['qual']);   ?></p>
            <p> * <?php print_r($resume['qual1']);   ?></p>
            <p> * <?php print_r($resume['qual2']);   ?></p>
        </div>
        <div class="des1">
            <!-- achievements -->
            <h2>Achievements</h2>
            <p> * <?php print_r($resume['achie']);   ?></p>
            <p> * <?php print_r($resume['achie1']);   ?></p>
            <p> * <?php print_r($resume['achie2']);   ?></p>
        </div>
        <br>
        <h1 style="text-align:center;">---------------------------------------------------</h1><br>
        <div class="footer">
            <!-- email -->
            <i class="fas fa-envelope fa-lg" style="color: #f060ad;">
                <p>E-mail</p>
            </i>
            <p><?php print_r($resume['email']);   ?></p>
            <div class="footer1">
                <!-- address -->
                <i class="fas fa-map-marker-alt fa-lg" style="color: #f03d3d;">
                    <p>Address :-</p>
                </i>
                <p style = "word-break:break-all;">-- <?php print_r($resume['address']);   ?></p>
            </div>
            <div class="footer2">
                <!-- phone number -->
                <i class="fas fa-phone fa-lg" style="color: #e66f47;">
                    <p>Contact no:-</p>
                </i>
                <p><?php print_r($resume['contact']);   ?></p>
            </div>
        </div>

    </div>
    <div class="download">
        <a href="pdf_resume3.php" class="btn btn-simple" target="_blank" download>Download</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="update_resume.php" class="btn btn-simple"><i class="fad fa-pen" style="--fa-primary-color: #ea90e2; --fa-secondary-color: #eee7ee;"></i>Edit</a>
    </div>
</body>

</html>