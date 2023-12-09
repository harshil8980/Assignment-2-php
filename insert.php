<?php
$host = "172.31.22.43";
$username = "Harshil200552678";
$password = "8ULt4paW0J";
$dbname = "Harshil200552678";

// Create a database connection
$conn=mysqli_connect($host, $username, $password, $dbname);

// Check if the connection was successful


// Use prepared statements to prevent SQL injection
$fname = $_POST["rfname"];
$lname = $_POST["rlname"];
$gmail = $_POST["registerEmail"];
$pass = $_POST["registerPassword"];
$haspass=password_hash($pass, PASSWORD_DEFAULT);
$duplicate="SELECT *FROM registerdata where email='$gmail'";
$result1=mysqli_query($conn,$duplicate);
if (mysqli_num_rows($result1) > 0) {
    echo "<script>alert('Duplicate data');</script>";
} 
else {
    $query = "INSERT INTO registerdata (fname, lname, email, password) VALUES ('$fname', '$lname', '$gmail', '$haspass')";
    $result=mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert('data inserted');</script>";
        header("Location:login.html");
    }
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }
    
}

// Close the prepared statement and database connection
?>
