<?php

$host = "172.31.22.43";
$username = "Harshil200552678";
$password = "8ULt4paW0J";
$dbname = "Harshil200552678";

// Create a database connection
$conn=mysqli_connect($host, $username, $password, $dbname);
$email = $_POST["loginremail"];
$password = $_POST["loginpassword"];
$duplicate="SELECT *FROM registerdata where email='$email' or password = '$password'";
$result1=mysqli_query($conn,$duplicate);
if (mysqli_num_rows($result1) > 0) {
    header("Location:mainpage.html");
} 
else {
   echo"<script>alert('Wrong email or password');</script>";
}
?>