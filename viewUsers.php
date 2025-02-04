<?php
include("config.php");
$sql = "SELECT * FROM students";
if(mysqli_query($conn, $sql)) {
    echo "Retriving all the Records";
    $result = mysqli_query($conn, $sql);
    echo"<br>";
    // var_dump($result);
    if(mysqli_num_rows($result)>0){
        echo "<table border = 'solid'>";
        echo "<tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>";
        
        while($row= mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["fullname"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["phone"]."</td>";
            echo "</tr>";

        }
        echo "</table>";
    }
}else{
    echo "Error Not Working";
}
?>