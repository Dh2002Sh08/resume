<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
        crossorigin="anonymous"></script>
    <!-- <link rel = "stylesheet" href = "style.css"> -->
    <!-- ==== Font Awesome CSS ==== -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel = "icon" href = "ato.png" type = "image/x-icon">
    <title>ABOUT</title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card img  {
  margin: 8px;
  border-radius:25px;
  width:60%;
}
.card:hover
{
  box-shadow: 14px 14px 34px -14px #ed82e7;
  transform:scale(1.1);
  transition:0.5s ease-in-out;
}
/* .card img:hover
{
 transform:scale(1.1);
 transition:0.5s ease-in-out;
 border-radius:50px;
} */

.about-section {
  padding: 50px;
  text-align: center;
  background-image: url(purple.jpeg);
  background-repeat:no-repeat;
  background-size: cover;
  color: white;
}

.container {
  padding: 0 16px;
}
.row
{
  padding:12px;
  background-image: radial-gradient(white,#f5dff3);
  background-color:white;
  background-size:cover;
  background-repeat:no-repeat;
}
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
    text-decoration:none;
    border: none;
    border-radius:14px;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: black;
    background-color:#faedcf;
    text-align: center;
    cursor: pointer;
    width: 100%;
}

.button:hover {
  background-color: burlywood;
  color:black;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
    box-shadow:#21e3fc;
  }
}
h4
{
  text-align:center;
  padding-top:12px;
}
.log a
{
 float:right;
 margin-top:1px;
 text-decoration:none;
 color:black;
 margin:10px 25px;
 background-color:#cccac8;
 padding:4px 6px;
 border-radius:4px;
}
.log a:hover
{
  color:white;
  background-color:#cccac8;
  padding:4px 6px;
  border-radius:4px;
  transform:scale(1.1);
  transition:0.5s ease-in-out;
}
</style>
</head>
<body>
<div class = "log">
  <a href = "profile.php"><i class="fas fa-user fa-lg" style="color: #1d1c1b;"></i></a>
  </div>
<div class="about-section">
  <!-- <div class = "log">
  <a href = "profile.php">PROFILE</a>
  </div> -->
  <h1>We are making resumes</h1>
  <p>For ease of you</p>
  <p>You just fill the form and then click on <span style = "color:cyan;">GENERATE</span> button</p>
</div>


<div class="row">
  <center style="color:black;"><h2>Our Resume</h2></center>
     <div class="column">
        <div class="card">
            <img src="simple_resume.png" alt="Jane" style="width:80%"  height= "195px;">
            <div class="container">
            <h4>Simple style</h4>
            <p><a href="form.php" class="button">INTERESTED</a></p>
        </div>
    </div>
  </div>

    <div class="column">
        <div class="card">
            <img src="l.png" alt="Jane" style="width:80%" height= "195px;" >
            <div class="container">
                <h4><i>Italic style</i></h4>
                <p><a href="form.php" class="button">INTERESTED</a></p>
            </div>
        </div>
    </div>
  
    <div class="column">
        <div class="card">
            <img src="mi.png" alt="Jane" style = "width:97%">
            <div class="container">
                <h4 style = "font-family:cursive;">Cursive style</h4>
                <p><a href="form.php" class="button">INTERESTED</a></p>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="card">
            <img src="n.png" alt="Jane" style="width:97%">
            <div class="container">
                <h4 style = "font-family:'Times New Roman', Times, serif;">Times New Roman style</h4>
                <p><a href="form.php" class="button">INTERESTED</a></p>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="card">
            <img src="o.png" alt="Jane" style="width:97%">
            <div class="container">
                <h4 style = 'font-family: Courier, monospace;'>Monospace style</h4>
                <p><a href="form.php" class="button">INTERESTED</a></p>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="card">
            <img src="p.png" alt="Jane" style="width:97%">
            <div class="container">
                <h4  style = 'font-family: Comic Sans MS, Comic Sans, cursive;'>Comic style</h4>
                <p><a href="form.php" class="button">INTERESTED</a></p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
