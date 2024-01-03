<?php 
$con=mysqli_connect('localhost','root','','ajax');
if($con)
{
    echo " ";
}
else{
    echo "Error";
}
$select = "SELECT * FROM `data`";
$run = mysqli_query( $con , $select);
$out = mysqli_fetch_all($run , MYSQLI_ASSOC);
// file data in json format
$json = json_encode($out , JSON_PRETTY_PRINT);
// file name
$file = "my-" . date("d-m-Y")."FIRST JSON" . ".json"; 
if(file_put_contents("json/{$file}" , $json))
{
    echo $file ." created ";
}
else
{
    echo "not created";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="form-floating mb-3">
            <form method="post" enctype="multipart/form-data">
                <label for="formId1">Name</label>
                <input type="text" class="form-control" name="name" id="formId1" placeholder="enter name" required>
                <label for="Id1">age</label>
                <input type="number" class="form-control" name="age" id="Id1" placeholder="enter age" required>
                <button type="submit" name="submit" class="btn btn-primary cancel-btn">Submit</button>
            </form>
        </div>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary">Left</button>
        <button type="button" class="btn btn-outline-secondary">Middle</button>
        <button type="button" class="btn btn-outline-secondary">Right</button>
    </div>
</body>

<br><br>
<div class="text-center">
    <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>

    <div class="spinner-grow text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-grow text-secondary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-grow text-success" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-grow text-danger" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-grow text-warning" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-grow text-info" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-grow text-light" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-grow text-dark" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-secondary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-success" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-danger" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-warning" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-info" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-light" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-dark" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-info" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-light" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-dark" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

</html>
<?php 
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];

  if($name != '' && $age != '')
  {
    if(file_exists('json/data.json'))
    {
      $get_data = file_get_contents('json/data.json');
      $array = json_decode($get_data , true);
      $arr =
      [
        'name' => $name,
        'age' => $age
      ];
      $array[] = $arr;
      $json = json_encode($array , JSON_PRETTY_PRINT);
      if(file_put_contents("json/data.json" , $json))
      {
        echo "created new file";
      }
      else
      {
        echo "not created";
      }

    }
  }
}


?>