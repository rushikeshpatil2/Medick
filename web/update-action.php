<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config2.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $website = $_POST["website"];
    $message = $_POST["message"];
    $userid=$_GET["userid"];
    // $exists=false;

    // Check whether this username exists
    // $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    // $result = mysqli_query($conn, $existSql);
    // $numExistRows = mysqli_num_rows($result);
    // if($numExistRows > 0){
    //     // $exists = true;
    //     $showError = "Username Already Exists";
    // }
        mysqli_query($conn,"update contact set  name='$name', email='$email' ,subject='$subject',url='$website',message='$message' where sno='$userid'");
        $message = "Record Modified Successfully";
        header("location: basic_table.php");

            // else{
    //     // $exists = false; 
    //     if(($password == $cpassword)){
    //         $hash = password_hash($password, PASSWORD_DEFAULT);
                 
        //     if ($result){
        //         $showAlert = true;
        //     }
        // }
        // else{
        //     $showError = "Passwords do not match";
        // }
    // }
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
<h2>Update Record</h2>
</div>
<p>Please edit the input values and submit to update the record.</p>
<form action="" method="post">
    <div class="form-group">
<input type="text" name="name" id="w3lName" placeholder="Your Name*" class="form-control"
                required="" />
</div>
          
    <div class="form-group">
              <input type="email" name="email" id="w3lSender" placeholder="Your Email*" class="form-control"
                required="" /></div>
     <div class="form-group">
             <input type="text" name="subject" id="w3lSubect" placeholder="Subject*" class="form-control"
                required="" /></div>
     <div class="form-group">
             <input type="text" name="website" id="w3lWebsite" placeholder="Website URL*" class="form-control"
                required="" /></div>
 
                <div class="form-group">

                <textarea name="message" class="form-control" placeholder="Type your message here*" required=""></textarea>
               
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
</form>
</div>
</div>        
</div>
</div>
</body>
</html>