<?php
include("config.php");
    $name = $_POST["FullName"];
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];

    if(!empty($name) && !empty($email) && !empty($phone)){
        $sql = "INSERT INTO students (fullname,email,phone) 
        VALUES('$name','$email','$phone')";
        if(mysqli_query($conn,$sql)){
            echo "NEW RECORD ADDED";
        }else{
            echo "NOT ADDED CHECK YOUR CODE";
        }
    }

    
// echo $_POST["FullName"];
// echo "<br>";
// echo $_POST["Email"];
// echo "<br>";
// echo $_POST["Phone"];
// echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <nav>
            <ul>
                <li>
                    <a href="viewUsers.php">View Users</a>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>