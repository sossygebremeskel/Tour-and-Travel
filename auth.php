<?php
session_start();
$userid = $_POST['userid'];
$password = $_POST['password'];


$conn = mysqli_connect('localhost', 'root', '', 'reservation_db');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT ID, password FROM password";
$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($result)) {
    if ($row['ID'] == $userid && $row['password'] == $password) {
        $_SESSION['userid'] = $userid;
        header("Location: welcome.php");
        exit();
    }
}
echo "Invalid user ID or password";

mysqli_close($conn);

