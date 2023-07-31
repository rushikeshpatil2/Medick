<?php
// echo "Welcome to the stage where we are ready to get connected to a database <br>";
/* 
*/
// Connecting to the Database
$servername = "localhost:3309";
$username = "root";
$password = "";
$database="contact";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Die if connection was not successful
 if (!$conn){
//     echo "Connection was successful";
// }
// else{
    die("Sorry we failed to connect: ". mysqli_connect_error());
 }

?>
