<?php
session_start();
if($_SESSION == false)
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
    "exp2" => "$_SESSION[exp2]",
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
ob_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
            crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
        crossorigin="anonymous"></script>
        <!-- ==== Font Awesome CSS ==== -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel = "stylesheet" href = "/style.css">
    <title>RESUME</title>
    <style>

    
.experience
{
    width: 50%;
    /* border-left:2px solid white;
    border-top:2px solid white; */
    /* border-right:2px solid black; */
    /* border-bottom:2px solid white; */
    padding:5px 2px 0px 10px;
    display:flex;
    float:left;
    margin-right:50%;
    text-align:center;
    word-break:break-all;
}
.back_ground
{
    background-image:radial-gradient(white,rgb(214, 239, 251));
}
.resume_back h1
{
    /* background-image: url('resume_back.jpg');
    background-position:center ;
    background-repeat:no-repeat ;
    background-size: cover;
    padding-left:5em ;
    padding-right: 5em; 
    border:2px solid black;
    margin:2em 4em 0em 4em;
    word-break:break-all; */

}
.skill_area
{

    /* border-left:2px solid black; */
    /* border-top:2px solid white;
    border-right:2px solid white;
    border-bottom:2px solid white; */
    margin-left:50%;
    display:flex;
    width: 50%;
    float :right;
    word-break:break-all;
    text-align:center;
   

}

    </style>
</head>
<body class = "back_ground">
    <div class = "previous">
         <a href = "form.php"><i class="fas fa-arrow-left fa-lg" style="color: #8424f9;"></i></a>
    </div>
    <div class = "forward">
         <a href = "resume2.php"><i class="fas fa-arrow-right fa-lg" style="color: #8424f9;"></i></a>
    </div>
    <div class = "resume_back" style = " background-image:url('pta.jpeg'); background-repeat:no-repeat;
    background-size: cover;  background-position:center ;">
        <div class = "back">
        <table class = "table table-simple">
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr style = "margin-top:50px; text-align:center;" class = "table table-primary" >
                <td> <?php
                    $id = $_SESSION['id'];
                    $dis = $obj->disp($id);     
                     ?> 
                </td>

                <td>
                </td>
                
                <td>
                </td>

                <td style = "margin-top:20px; 
                    font-weight:bold; 
                    text-align:center;
                    font-size:25px;
                    text-transform:uppercase;
                    padding:2px 5px;
                     
                    "><br><br>
                <?php 
                print_r($resume['name']);  ?>
                </td>


            </tr>
        </table>
             <br><br>
        </div>

        <hr style = "width:80%; margin:0 auto;">
        <div class = "skill_area">
            <br><br>
            <!-- skills -->
           <h2 style = "font-size:16px; font-weight:bold;   ">Skills</h2>
           <p> * <?php print_r($resume['skill']);   ?></p>
           <p> * <?php print_r($resume['skill1']);   ?></p>
           <p> * <?php print_r($resume['skill2']);   ?></p>
        </div>
        <div class = "experience">
            <!-- experience -->
           <h2  style = "font-size:16px; font-weight:bold;   " >Experience</h2>
           <p  style = "  "> * <?php print_r($resume['exp']);   ?></p>
           <p  style = "  "> * <?php print_r($resume['exp1']);   ?></p>
          
        </div>
        <div class = "skill_area">
            <!-- qualification -->
           <h2  style = "font-size:16px; font-weight:bold;   " >Qualification</h2>
           <p  style = "  " > * <?php print_r($resume['qual']);   ?></p>
           <p  style = "  " > * <?php print_r($resume['qual1']);   ?></p>
           <p  style = "  " > * <?php print_r($resume['qual2']);   ?></p>
           
        </div>
        <div class = "experience">
            <!-- achievements -->
           <h2  style = "font-size:16px; font-weight:bold;   " >Achievements</h2>
           <p  style = "  " > * <?php print_r($resume['achie']);   ?></p>
           <p  style = "  " > * <?php print_r($resume['achie1']);   ?></p>
           <p  style = "  " > * <?php print_r($resume['achie2']);   ?></p>
        </div>
        
        <br><br><br><br><br><br><br><br><br><br>
        <hr style = "width:80%; margin:0 auto;">
        <br><br>
          <table class = "table table-simple" style = "text-align:center;">
            <tr style = "text-align:center;">
                <th style = "text-align:center;   " >E-mail</th>
                <th style = "text-align:center;   " >Address</th>
                <th style = "text-align:center;   " >Contact</th>
            </tr>
            <tr>
                <td style = "  "><?php print_r($resume['email']);   ?></td>
                <td style = "  word-break:break-all;  "><?php print_r($resume['address']);   ?></td>
                <td style = "  "><?php print_r($resume['contact']);   ?></td>
            </tr>
          </table>
          <br><br>
                   
    <?php 
     $body = ob_get_clean();
        // $body = iconv(" UTF-8" , "UTF-8//IGNORE" , $body);
        require_once './vendor/autoload.php';

        $mpdf = new \Mpdf\Mpdf();
        // write html to pdf
        $mpdf->WriteHTML($body);
        // output pdf
        // $mpdf->SetDisplayMode('fullpage');
        // $mpdf-> Image('uplodimg/'.$img,100,15,35,35);
        $mpdf->Output('resume.pdf','I');
    ?>
</body>
</html>