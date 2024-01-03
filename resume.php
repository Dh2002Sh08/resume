<?php
session_start();
if($_POST == false)
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
    $id = $_SESSION['id'];
}
include('data.php');
if(isset($_POST['submit']))
{
$resume = [
    "name" => "$_POST[name]",
    "email" => "$_POST[email]",
    "skill" =>"$_POST[skills]",
    "skill1" => "$_POST[skill1]",
    "skill2" => "$_POST[skill2]",
    "qual" => "$_POST[qual]",
    "qual1" => "$_POST[qual1]",
    "qual2" => "$_POST[qual2]",
    "achie" => "$_POST[achie]",
    "achie1" => "$_POST[achie1]",
    "achie2" => "$_POST[achie2]",
    "exp" => "$_POST[exp]",
    "exp1" => "$_POST[exp1]",
    // "exp2" => "$_POST[exp2]",
    "address" => "$_POST[address]",
    "contact" => "$_POST[contact]",
    "img" => $_FILES['file']['name'],
];
// print_r($resume['img']);die;
// declaring object
$obj = new data;

// declaring insert query
$insert = $obj->insert($resume);
if($insert)
{
    $tmp = $_FILES['file']['tmp_name'];
   if($upload = $obj->image($resume['img'],$tmp))
   {
    echo "done";
   }
}
else
{
    echo "fail";
}


// print_r($resume['name']);
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
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <!-- ==== Font Awesome CSS ==== -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="ato.png" type="image/x-icon">
    <title>RESUME</title>
</head>

<body class="back_ground">
    <div class="previous">
        <a href="form.php"><i class="fas fa-arrow-left fa-lg" style="color: #8424f9;"></i></a>
    </div>
    <div class="forward">
        <a href="resume1.php"><i class="fas fa-arrow-right fa-lg" style="color: #8424f9;"></i></a>
    </div>
    <div class="resume_back">
        <div class="back">
            <?php
            include_once('select.php');
            $id = $_SESSION['id'];
            // $name = $_SESSION['name'];
            // $email = $_SESSION['email'];
            // print_r($id);
            $dis = $obj->display($id);
                           
         ?>
            <br><br>
        </div>
        <div class="name">
            <!-- name -->
            <h1><?php print_r($resume['name']);   ?></h1>
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
            <p> <?php// print_r($resume['exp2']);   ?></p>
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
                <p>-- <?php print_r($resume['address']);   ?></p>
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
        <a href="pdf_resume.php" class="btn btn-simple" target="_blank" download>Download</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="update_resume.php" class="btn btn-simple"><i class="fad fa-pen" style="--fa-primary-color: #ea90e2; --fa-secondary-color: #eee7ee;"></i>Edit</a>

    </div>
    <?php
    header('Location: first_resume.php');
    ?>
</body>

</html>