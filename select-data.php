<?php
require 'connect.php';
$sql = "SELECT * FROM login";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "username: " . $row["username"] . "<br>";
        echo "password: " . $row["password"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "0 results";
}
$conn->close();
