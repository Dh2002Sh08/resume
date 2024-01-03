<?php
session_start();
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
    $id = $_SESSION['id'];
}

include('data.php');
$obj = new data;

// update name
if(isset($_POST['submit']))
{
    $data = [
        "name" => "$_POST[name]",
        "email" => "$_POST[email]",
        "skill" =>"$_POST[skill]",
        "skill1" => "$_POST[skill1]",
        "skill2" => "$_POST[skill2]",
        "qual" => "$_POST[qual]",
        "qual1" => "$_POST[qual1]",
        "qual2" => "$_POST[qual2]",
        "achie" => "$_POST[achie]",
        "achie2" => "$_POST[achie2]",
        "achie3" => "$_POST[achie3]",
        "exp" => "$_POST[exp]",
        "exp1" => "$_POST[exp1]",
        "address" => "$_POST[address]",
        "contact_no" => "$_POST[contact]",
        "img" => $_FILES['file']['name'],
        // "tmp" => $_FILES['file']['tmp_name'],
    ];
    $tmp = $_FILES['file']['tmp_name'];

    // $name = $_POST['name'];
    $up_name = $obj->update_resume($id,$data,$tmp);
    if($up_name)
    {
        echo "
        <script>
        alert('updated');
        window.location.href = 'resume1.php'
        </script>
        ";  
        echo "updated";  
    }
    // print_r($name);
}
// update skill
if(isset($_POST['submit2']))
{
    $skill = $_POST['skill'];
    $up_skill = $obj->update_skill($id,$skill);
    if($up_skill)
    {
        echo "
        <script>
        alert('updated');
        </script>
        ";      
    }
    // print_r($skill);
}
// update skill1
if(isset($_POST['submit3']))
{
    $skill1 = $_POST['skill1'];
    $up_skill1 = $obj->update_skill1($id,$skill1);
    if($up_skill1)
    {
        echo "
        <script>
        alert('updated');
        </script>
        ";        
    }
    // print_r($skill1);
}
// update skill2
if(isset($_POST['submit4']))
{
    $skill2 = $_POST['skill2'];
    $up_skill2 = $obj->update_skill2($id,$skill2);
    if($up_skill2)
    {
        echo "
        <script>
        alert('updated');
        </script>
        ";      
    }
    // print_r($skill2);
}
// update exp
if(isset($_POST['submit5']))
{
    $exp = $_POST['exp'];
    $up_exp = $obj->update_exp($id,$exp);
    if($up_exp)
    {
        echo "
        <script>
        alert('updated');
        </script>
        ";      
    }
    // print_r($exp);
}
// update exp1
if(isset($_POST['submit6']))
{
    $exp1 = $_POST['exp1'];
    $up_exp1 = $obj->update_exp1($id,$exp1);
    if($up_exp1)
    {
        echo "
        <script>
        alert('updated');
        </script>
        ";      
    }
    // print_r($exp1);
}
// update qual
if(isset($_POST['submit7']))
{
    $qual = $_POST['qual'];
    $up_qual = $obj->update_qual($id,$qual);
    if($up_qual)
    {
        echo "
        <script>
        alert('updated');
        </script>
        ";        
    }
    // print_r($qual);
}
// update qual 1
if(isset($_POST['submit8']))
{
    $qual1 = $_POST['qual1'];
    $up_qual1 = $obj->update_qual1($id,$qual1);
    if($up_qual1)
    {
        echo "
        <script>
        alert('updated');
        </script>
        ";        
    }
    // print_r($qual1);
}
// update qual 2
if(isset($_POST['submit9']))
{
    $qual2 = $_POST['qual2'];
    $up_qual2 = $obj->update_qual2($id,$qual2);
    if($up_qual2)
    {
        echo "
        <script>
        alert('updated');
        </script>
        ";        
    }
    // print_r($qual2);
}
// update achie
if(isset($_POST['submit10']))
{
    $achie = $_POST['achie'];
    $up_achie = $obj->update_achie($id,$achie);
    if($up_achie)
    {
        echo "
        <script>
        alert('updated');
        </script>
        ";      
    }
    // print_r($achie);
}
// update achie 1
if(isset($_POST['submit11']))
{
    $achie1 = $_POST['achie1'];
    $up_achie1 = $obj->update_achie1($id,$achie1);
    if($up_achie1)
    {
        echo "
        <script>
        alert('updated');
        </script>
        ";    
    }
    // print_r($achie1);
}
// update achie 2
if(isset($_POST['submit12']))
{
    $achie2 = $_POST['achie2'];
    $up_achie2 = $obj->update_achie2($id,$achie2);
    if($up_achie2)
    {
        echo "
        <script>
        alert('updated');
        </script>
        ";        
    }
    // print_r($achie2);
}
// update email
if(isset($_POST['submit13']))
{
    $email = $_POST['email'];
    $up_email = $obj->update_email($id,$email);
    if($up_email)
    {
        echo "
        <script>
        alert('updated');
        </script>
        ";     
    }
    // print_r($email);
}
// update address
if(isset($_POST['submit14']))
{
    $address = $_POST['address'];
    $up_add = $obj->update_add($id,$address);
    if($up_add)
    {
        echo "
        <script>
        alert('updated');
        </script>
        ";        
    }
    // print_r($address);
}
// update contact
if(isset($_POST['submit15']))
{
    $contact = $_POST['contact'];
    $up_contact = $obj->update_contact($id,$contact);
    if($up_contact)
    {
        echo "
        <script>
        alert('updated');
        </script>
        ";    
    }
    // print_r($contact);
}
// update img
if(isset($_POST['submit16']))
{
    // $data = [
    //     "img" => $_FILES['file']['name'],
    //     "tmp" => $_FILES['file']['tmp_name'],
    // ]; 
    $update_img = $obj->update_img($id,$data);
    if($update_img)
    {
        echo "
        <script>
        alert('updated');
        </script>
        ";    
    }
    // print_r($data['img']);
    // echo "<br>";
    // print_r($data['tmp']);
}


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
<!-- html starts -->
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
    <title>EDIT</title>
</head>

<body style="background-image:url('purple.jpeg'); background-repeat:no-repeat; background-size:cover;">
    <!-- <div class = "previous">
         <a href = "form.php"><i class="fas fa-arrow-left fa-lg" style="color: #8424f9;"></i></a>
    </div>
    <div class = "forward">
         <a href = "resume1.php"><i class="fas fa-arrow-right fa-lg" style="color: #8424f9;"></i></a>
    </div> -->
    <br><br><br>
    <div class="resume_backx">
        <div class="back"><br><br>
            <?php
            // include_once('select.php');
            $id = $_SESSION['id'];
            echo $id;
            // $name = $_SESSION['name'];
            // $email = $_SESSION['email'];
            // print_r($id);
            ?>
            <p>
            <form method="post" enctype="multipart/form-data">
                <h4>Choose pic</h4>
                <input type="file" name="file" placeholder="enter new image"> <?php $id = $_SESSION['id'];
                 $obj->display($id); ?>
                <!-- <button type="submit" name="submit16" class="btn2 btn2-simple">Save</button> -->
                </p>

                <br><br>
        </div>
        <div class="name">
            <!-- name -->
            <h4>Enter name</h4>
            <form method="post" enctype="multipart/form-data">
                <p><input type="text" name="name" placeholder="enter name" value="<?php echo $resume['name']; ?>">
                <?php  
                // echo $name;   ?>
                    <!-- <button type="submit" class="btn2 btn2-simple" name="submit1">Save</button> -->
                </p>
        </div>
        <hr>
        <div class="des">
            <br><br>
            <!-- skills -->
            <center>
                <h2>Skills</h2>
            </center>
            <p><textarea type="text" name="skill" placeholder="enter skills"><?php echo $resume['skill']; ?></textarea>
                <!-- <button type="submit" class="btn2 btn2-simple" name="submit2">Save</button> -->
            </p>
            <p><textarea type="text" name="skill1" placeholder="enter skills"><?php echo $resume['skill1']; ?></textarea>
                <!-- <button type="submit" class="btn2 btn2-simple" name="submit3">Save</button> -->
            </p>
            <p><textarea type="text" name="skill2" placeholder="enter skills"><?php echo $resume['skill2']; ?></textarea>
                <!-- <button type="submit" class="btn2 btn2-simple" name="submit4">Save</button> -->
            </p>
        </div>
        <div class="des1">
            <!-- experience -->
            <h2>Experience</h2>
            <p><textarea type="text" name="exp" placeholder="enter experience"><?php echo $resume['exp']; ?></textarea>
                <!-- <button type="submit" class="btn2 btn2-simple" name="submit5">Save</button> -->
            </p>
            <p><textarea type="text" name="exp1" placeholder="enter experience"><?php echo $resume['exp1']; ?></textarea>
                <!-- <button type="submit" class="btn2 btn2-simple" name="submit6">Save</button> -->
            </p>
        </div>
        <div class="des">
            <!-- qualification -->
            <h2>Qualification</h2>
            <p><textarea type="text" name="qual" placeholder="enter qualification"><?php echo $resume['qual']; ?></textarea>
                <!-- <button type="submit" class="btn2 btn2-simple" name="submit7">Save</button> -->
            </p>
            <p><textarea type="text" name="qual1" placeholder="enter qualification"><?php echo $resume['qual1']; ?></textarea>
                <!-- <button type="submit" class="btn2 btn2-simple" name="submit8">Save</button> -->
            </p>
            <p><textarea type="text" name="qual2" placeholder="enter qualification"><?php echo $resume['qual2']; ?></textarea>
                <!-- <button type="submit" class="btn2 btn2-simple" name="submit9">Save</button> -->
            </p>
        </div>
        <div class="des1">
            <!-- achievements -->
            <h2>Achievements</h2>
            <p><textarea type="text" name="achie" placeholder="enter achievement"><?php echo $resume['achie']; ?></textarea>
                <!-- <button type="submit" class="btn2 btn2-simple" name="submit10">Save</button> -->
            </p>
            <p><textarea type="text" name="achie2" placeholder="enter achievement"><?php echo $resume['achie1']; ?></textarea>
                <!-- <button type="submit" class="btn2 btn2-simple" name="submit11">Save</button> -->
            </p>
            <p><textarea type="text" name="achie3" placeholder="enter achievement"><?php echo $resume['achie2']; ?></textarea>
                <!-- <button type="submit" class="btn2 btn2-simple" name="submit12">Save</button> -->
            </p>
        </div>
        <br>
        <hr style="text-align:center;">
        <div class="footer">
            <!-- email -->
            <h4>E-mail</h4>
            <p><input type="email" name="email" placeholder="enter email" value = "<?php echo $resume['email']; ?>">
                <!-- <button type="submit" class="btn2 btn2-simple" name="submit13">Save</button> -->
            </p>
            <div class="footer1">
                <!-- address -->
                <h4>Address :-</h4>
                <p><textarea type="text" name="address" placeholder="enter address"><?php echo $resume['address']; ?></textarea>
                    <!-- <button type="submit" class="btn2 btn2-simple" name="submit14">Save</button> -->
                </p>
            </div>
            <div class="footer2">
                <!-- phone number -->
                <h4>Contact no:-</h4>
                <p><input type="text" name="contact" placeholder="enter contact no:-" value = "<?php echo $resume['contact']; ?>">
                    <!-- <button type="submit" class="btn2 btn2-simple" name="submit15">Save</button> -->
                </p>
            </div>
        </div>

        <div class="download">
            <button  type="submit" class="btn btn-simple" name="submit"  >Save</button>
            <!-- <a href = "resume1.php">JHHG</a> -->
            </form>

        </div>
    </div>
    <br><br><br><br><br><br>
</body>

</html>