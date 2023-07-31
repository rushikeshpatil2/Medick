<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $username = $_POST["Email"];
    $password = $_POST["Password"]; 
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from users where email= '$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            // password_verify($password, $row['password'])
            if ($password==$row['password']){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: dashboard.html");
            } 
            else{
                $showError = "Invalid Credentials";
                header("location: index.html");
            }
        }
        
    } 
    else{
        $showError = "Invalid Credentials";
                header("location: index.html");

    }
}
    
?>