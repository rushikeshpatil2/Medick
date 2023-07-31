<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $website = $_POST["website"];
    $message = $_POST["message"];
    // $exists=false;

    // Check whether this username exists
    // $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    // $result = mysqli_query($conn, $existSql);
    // $numExistRows = mysqli_num_rows($result);
    // if($numExistRows > 0){
    //     // $exists = true;
    //     $showError = "Username Already Exists";
    // }
    // else{
    //     // $exists = false; 
    //     if(($password == $cpassword)){
    //         $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `contact` ( `name`, `email`, `subject`,`url`,`message`) VALUES ('$name', '$email','$subject','$website','$message')";
                 
            $result = mysqli_query($conn, $sql);
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