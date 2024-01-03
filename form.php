<?php
session_start();
// redirect when session is not working
if($_SESSION == false)
{
    function redirect($loc)
{
    header("Location: " . $loc);
}
redirect('login.php');
exit();
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
    <title>FORM</title>
</head>

<body class="color">
    <div class="previous1">
        <a href="about.php"><i class="fas fa-arrow-left fa-lg" style="color:##bf9130;"></i></a>
    </div>
    <div class="container">
        <legend style="color:white;">Enter details for Resume</legend>
        <form method="post" enctype="multipart/form-data" class="form-group2" action="resume.php">
            <!-- name -->
            <label for="yname">Name</label>
            <input type="text" name="name" placeholder="enter your name" class="form-control" id="yname" required><br>
            <!-- email -->
            <label>E-mail</label>
            <input type="email" name="email" placeholder="enter email" class="form-control" required><br>
            <!-- skills -->
            <label>Skills</label>
            <input type="text" name="skills" placeholder="1. skill" class="form-control" required><br>
            <input type="text" name="skill1" placeholder="2. skill" class="form-control" required><br>
            <input type="text" name="skill2" placeholder="3.skill " class="form-control" required><br>
            <!-- qualification -->
            <label>Qualification</label>
            <input type="text" name="qual" placeholder="1. qualification" class="form-control" required><br>
            <input type="text" name="qual1" placeholder="2. qualification" class="form-control" required><br>
            <input type="text" name="qual2" placeholder="3. qualification" class="form-control" required><br>
            <!-- achievements -->
            <label>Achievements</label>
            <input type="text" name="achie" placeholder="1. achievement" class="form-control" required><br>
            <input type="text" name="achie1" placeholder="2. achievement" class="form-control" required><br>
            <input type="text" name="achie2" placeholder="3. achievement " class="form-control" required><br>
            <!-- experience -->
            <label>Experience</label>
            <input type="text" name="exp" placeholder="1. enter experience" class="form-control" required><br>
            <input type="text" name="exp1" placeholder="2. enter experience" class="form-control" required><br>
            <!-- <input type = "text" name = "exp2" placeholder = "3. enter experience" class = "form-control" required><br> -->
            <!-- address -->
            <label>Address</label>
            <input type="text" name="address" placeholder="enter your address" class="form-control" required><br>
            <!-- contact no. -->
            <label>Contact no.</label>
            <input type="number" name="contact" placeholder="enter your contact" class="form-control" required><br>
            <!-- image -->
            <label>Resume image</label>
            <input type="file" name="file" class="form-control" required><br>
            <!-- button -->
            <button class="btn btn-simple" type="submit" name="submit">GENERATE</button>&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            <button class="btn btn-simple" type="reset" name="reset">RESET</button>

        </form>
    </div>

</body>

</html>