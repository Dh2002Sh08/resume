<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <!-- ==== Font Awesome CSS ==== -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <title>Animate Form</title>
</head>
<style>
img {
    margin-top: -70px;
    margin-left: 32em;
}

.box {
    margin-top: 3px auto;
}

/* input[type=password] {
    margin-right: -50px;
} */

.box1 {
    width: 100%;
    height: 100%;
    /* border:1px solid black; */
    padding-inline: 25em;
    padding: 4em;
}

.box2 {
    display: flex;
    /* padding: 2em 0em 0em 23em; */
    float: left;
    /* border:1px solid black; */
}

.box3 {
    display: flex;
    padding: 2em 23em 0em 0em;
    float: right;
    /* border:1px solid black; */
}

.container {
    display: flex;
    justify-content: center;
    width: 50%;
    border: 2px solid black;
    border-radius: 25px;
}


.form {
    width: 100%;
    /*   margin-left:50%;
    margin-right:50%; */
}

.box4 {
    width: 100%;
    height: 100%;
    /* border:1px solid black; */
    padding-inline: 25em;
    padding: 8em;
}

#d {
    position: relative;
    border: 1px solid black;
    padding: 1em;
    width: 50%;
}

#msg {
    position: absolute;
}

#conditions {
    display: none;
}
</style>

<body>
    <!-- <i class = "fas fa-eye-slash"></i> -->
    <!-- <div class = "box1" id = "down"> -->
    <!-- <img src = ""> -->

    </div>
    <!-- <div class = "box2"></div> -->
    <br>
    <?php 
    for($i = 1 ; $i < 2; $i++)
    {
    ?>
    <div id="d" class="v" style="overflow:auto; border:2px solid black;">
        <p>
            Skip to main contentTurn off continuous scrolling
            Accessibility help Accessibility feedback
        </p>
    </div>
    <?php 

}
?>
    <br><br><br><br>
    <!-- <div class="container">

        <div class="box2">
            kjijhuihui
        </div> -->
    <br><br><br><br>

    <!-- <center>Form</center> -->
    <!-- <form method = "post" enctype = "multipart/form-data" id = "form" class = "form-group">
        <br><br><br><br>
             <label id = "name">Name</label><input type = "name" id = "name" class = "form-control" placeholder = "enter name" autocomplete="section-blue shipping address-level2">
            <div class = "box">
                <label id = "p">Password</label> <input type="password" id = "password" class = "form-control" placeholder = "enter password" autocomplete="section-blue shipping address-level2">
                <img src = "pass_close.png"  id = "eye" style = "width:46px; height:25px;">
            </div>
             
            <br><br>
             <button type = "submit" class = "btn btn-success" id = "submit" name = "submit">Submit</button>
             <button type = "reset" class = "btn btn-success" id = "reset" name = "reset">Reset</button>
            <button  class = "btn btn-success" id = "animate">Animate</button> -->
    <!-- <button  class = "btn btn-success" id = "stop">Stop</button> -->
    <br><br><br><br>
    </form>
    <!-- <div class = "box3"></div> -->
    <br><br><br><br><br><br><br><br>

    </div>
    <!-- <div class = "box4"></div> -->
    <button class="btn btn-success" id="animate">Animate</button>
    <button class="btn btn-success" id="stop">Stop</button>
    <button class="btn btn-success" id="ani">Animate-1</button>
    <button class="btn btn-success" id="position">Position</button>
    <button class="btn btn-success" id="offset">Offset</button>
    <button class="btn btn-dark" id="b">Dark-mode</button>
    <button class="btn btn-secondary" id="redark">Light-mode</button>
    <button class="btn btn-success" id="load">load</button>
    <br><br><br><br>
    <table id="table" class="table table-simple">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>number</th>
            <th>choice</th>
            <th>Country</th>
            <th>State</th>
            <th>City</th>
            <th>Password</th>
            <th>Delete</th>

        </tr>
        <tr id="td"> </tr>
        <tr>
            <td></td>
            <!-- </tr> -->
    </table>

</body>

</html>
<?php 
// $v = phpversion();
// echo $v;
?>
<br><br><br><br><br><br><br><br>
<div id="msg"></div>
<br><br><br><br>
<div class="container">
    <br>
    <form id="form" class="form" method="post" enctype="multipart/form-data">
        <p>Enter name</p>
        <input type="" style="color:black;" name="name" id="name" class="form-control" placeholder="Enter name"
            required>
        <p>Enter number</p>
        <input type="number" name="number" id="number" class="form-control" placeholder="Enter number" maxlength="10"
            required>
        <small id="con"></small>&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" id='ok' class="btn btn-warning"
            value="OK">
        <p>Enter choice</p>
        <!-- choices -->
        <select id="choice" class="form-select" name="choice" required>
            <option selected disabled>-------</option>
            <option value="Cricket" name="choice">Cricket</option>
            <option value="Basketball" name="choice">Basketball</option>
            <option value="Badminton" name="choice">Badminton</option>
            <option value="Football" name="choice">Football</option>
            <option value="Tennis" name="choice">Tennis</option>
        </select>
        <br><br><br>
        <p>Enter Country</p>
        <!-- country -->
        <select id="country" class="form-select" name="country" required>
            <option value="" selected disabled>Select Country</option>
            <option value="India">India</option>
            <option value="Australia">Australia</option>


        </select>
        <br><br><br>
        <!-- state name -->
        <p>Enter State</p>
        <select name="state" id="state" class="form-select" required>
            <option value="" selected disabled>Select State</option>
        </select>
        <br><br><br>
        <!-- city name -->
        <p>Enter City</p>
        <select id="city" name="city" class="form-select">
            <option value="" selected disabled>Select City</option>
        </select>
        <br>
        Password
        <input type="password" name="pass" id="pass" placeholder="enter password" class="form-control" autocomplete=" ">
        &nbsp;&nbsp;&nbsp;&nbsp;<small id="pass_msg" style="color:red;"></small>
        <ul id="conditions">
            <li id="sc">special character</li>
            <li id="lc">lower character</li>
            <li id="num">number</li>
            <li id="cc">capital character</li>
            <li id="atleast">atleat 8 characters</li>
        </ul>
        <br>
        Confirm Password
        <input type="password" name="confirm_pass" id="confirm_pass" placeholder="enter confirm password"
            class="form-control" autocomplete=" ">
        &nbsp;&nbsp;&nbsp;&nbsp; <small id="msg_one" style="color:red;"></small>
        <!-- <br><br> -->
        <!-- <div id = "data" class = "container" style = "border:2px solid black;"></div> -->
        <br><br>
        <input type="hidden" class="btn btn-info" name="submit" value="SUBMIT"
            id="save">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="reset" class="btn btn-secondary">RESET</button>
    </form>
</div>


<br><br><br><br><br><br>
<!-- country name -->
<!-- <select id="country" class="form-select" name="country" required>
        <option value="" selected disabled >Select Country</option>
        <option value="India">India</option>
        <option value="Australia">Australia</option>
        

    </select> -->
<br><br><br>
<!-- state name -->
<!-- <select name="state" id="state" class="form-select" required>
        <option value="" selected disabled >Select State</option>
    </select> -->
<br><br><br>
<!-- city name -->
<!-- <select id="city" name="city" class="form-select">
        <option value="" selected disabled >Select City</option>        
    </select> -->

<br><br><br><br><br><br><br><br><br>


<script type="text/javascript" src="animate.js"></script>


<?php 
class cons
{
    public $data;
    // constructor
    function __construct($data)
    {
        foreach($data as $k => $v)
        {
            $arr[] = "$k :- $v";
        }
        $ar = implode(',' , $arr);
        echo $ar."\t";
        echo "constructor";
        echo "<br>";
    }
    // simple function
    function show($data)
    {
        foreach($data as $k => $v)
        {
            $arr[] = "$k :- $v";
        }
        $ar = implode(',' , $arr);
        echo $ar;
        
        // echo "helo";
    }
}


$data = 
[
    "name" => "name",
    "age" => "52"
];
$obj = new cons($data);
// $obj->show($data);

class greeting 
{
    public static function welcome() 
    {
      echo "Hello World!";
    }
    public static function hel()
    {
        echo "helo";
    }
    public function gd()
    {
        echo "without ";
    }
}
  
  // Call static method
  greeting::welcome();
  greeting::hel();
  $j = new greeting;
  $j->gd();
?>