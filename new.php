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
    <title>Document</title>
</head>
<style>
/* .container
    {
        background-color:silver;
    } */
    #left
    {
        position:relative;
    }
    #copy
    {
        position:relative;
    }
</style>

<body>

    <!-- <a  href="#main-content">page</a>
    <a  href="/">xammp</a> -->

    <div id="start" style="width:100%; border:2px solid black; text-align:center;">
        <p id="start1">Hello this will be in which color</p>
        <p id="press">change on pressing</p>
    </div>
    <br><br> <br><br> <br>
    <form method="post" enctype="multipart/form-data" class="form-group" id="form">
        Enter name
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" required>
        Enter number
        <input type="number" name="number" id="number" class="form-control" placeholder="Enter number" required>
        Enter choice
        <select id="choice" class="form-select" name="choice" required>
            <option selected disabled  >-------</option>
            <option value="Cricket" name="choice">Cricket</option>
            <option value="Basketball" name="choice">Basketball</option>
            <option value="Badminton" name="choice">Badminton</option>
            <option value="Football" name="choice">Football</option>
            <option value="Tennis" name="choice">Tennis</option>
        </select>
        <!-- <br><br> -->
        <!-- <div id = "data" class = "container" style = "border:2px solid black;"></div> -->
        <br><br>
        <button type="submit" class="btn btn-info" name = "submit" id = "submit" >SUBMIT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="reset" class="btn btn-secondary">RESET</button>
    </form>
    <br><br><br><br>
    <div id="data" class="container" style="border:2px solid black;"></div>
    <br><br>
    <h3 id="submit"></h3>
    <div id="paragraph" class="" style="overflow:auto; border:2px solid black;">
        <?php 
    for($i = 0 ; $i < 6 ; $i++)
    {
    ?>
        <div id="paragraph" class="" style="overflow:auto; border:2px solid black;">
            <p>
                Skip to main contentTurn off continuous scrolling
                Accessibility help Accessibility feedback
                Words
                Google translate
                Full
                Books
                Images
                Altina Schinasi's 116th Birthday
                meaning of english to hindi


            </p>
        </div>
        <?php 

}
?>

    </div>
    <br><br><br><br>

    <div id="copy" class="container" style="border:2px solid black;">
    <h2>Heading</h2>
        <p> see the difference prependTo up ^ and appendTo down change by  clicking clone button </p>
    </div>
    <br><br><br><br>

    <button class="btn btn-info" id="add">Format</button>
    <button class="btn btn-info" id="remove">Unformat</button>
    <button class="btn btn-info" id="toggle">Toggle</button>
    <button class="btn btn-info" id="style">Style</button>
    <button class="btn btn-info" id="off">OFF </button>
    <button class="btn btn-info" id="prepend">Prepend </button>
    <button class="btn btn-info" id="append">Append </button>
    <button class="btn btn-info" id="empty">Empty </button>
    <button class="btn btn-info" id="r">Remove </button>
    <button class="btn btn-info" id="after">After </button>
    <button class="btn btn-info" id="before">Before </button>
    <button class="btn btn-info" id="clone">Clone </button>
    <button class="btn btn-info" id="replacewith">Replace </button>
    <button class="btn btn-info" id="replaceall">Replace-All </button>
    <button class="btn btn-info" id="wrap">Wrap</button>
    <button class="btn btn-info" id="unwrap">Un-wrap</button>
    <br><br><br><br>
    <button class="btn btn-info" id="animate">Animate</button>
    <button class="btn btn-info" id="unanimate">Un-Animate</button>

    <br><br><br><br>
    <div class="img" id="img" style="justify-content:center; display:flex;">
        <div class="left" style=" float:left; width:50%;" id="left_side"></div>
        <img src="close_eye.png" id="left" style="margin-left:1em;">
        <div class="container1" style=" float:right; width:50%;" id="right_side"></div>
    </div>



    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>








    <script type="text/javascript" src="new.js"></script>
</body>

</html>