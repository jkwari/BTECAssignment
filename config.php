<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name ="info";
// Create Connection
$conn = mysqli_connect($servername,$username,$password,$db_name)or die("connection Error");
// check for connection:
    if (!$conn) {
        # send an error message
        echo "Connection Error", mysqli_connect_error();
    }else{
        # Send an Successful Message
        echo "Connection Successful <br>";
    }

?>