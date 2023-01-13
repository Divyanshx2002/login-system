<?php
include 'connect.php';
$sql = "SELECT id, username, password FROM login WHERE username = '" . $_POST['username'] . "' and password = '" . $_POST['password'] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Successfully Logged in";
} else {
    echo "login faild";
    header("Location: http://localhost/loginsystem/sec.php");
}
$conn->close();
