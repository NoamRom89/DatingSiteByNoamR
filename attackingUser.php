<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connection is alive";
    $sql = "SELECT name, description FROM comments WHERE name = 'Noam'";
    $result = $conn->query($sql);

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['description'];
?>


<!DOCTYPE html>
<html><body>
<h1><?php echo $row['name'] ?> Profile (Attacking user)</h1>

</body></html>

<?php

}

}



?>