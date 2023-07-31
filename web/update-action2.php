<?php
include 'config2.php';
$userid=$_GET["userid"];
if(isset($_POST["submit"])){
//   $name = $_POST["name"];
  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    // else if($fileSize > 1000000){
    //   echo
    //   "
    //   <script>
    //     alert('Image Size Is Too Large');
    //   </script>
    //   ";
    // }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'images2/' . $newImageName);
      mysqli_query($conn,"update image set  image='$newImageName' where id='$userid'");
      $message = "Record Modified Successfully";
      header("location: imageview.php");
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
.wrapper{
width: 500px;
margin: 0 auto;
}
</style>
</head>
<body>
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="page-header">
<h2>Insert images</h2>
</div>
<p>Please insert the images</p>
<form action="" name="" method="post" enctype="multipart/form-data">

                <div class="form-group">
                <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br> <br>                
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                   
            </form>
</div>
</div>        
</div>
</div>
</body>
</html>