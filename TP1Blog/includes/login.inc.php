<?php
session_start();
include '../Database.php';

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql) or die($conn->error);
$row = mysqli_fetch_assoc($result);
$hash_password = $row['password'];
$dehash = password_verify($password, $hash_password);

if($dehash == 0) {
    header("Location: ../index.php?error=empty");
    exit();
} else {

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$hash_password'"; 
    $result = mysqli_query($conn, $sql) or die($conn->error);

    if (!$row = mysqli_fetch_assoc($result)){
        echo "Your username or password is Invalid!";
    } else {
        echo "Successfully logged in!";
        $_SESSION['id'] = $row['id'];
    }

    header("Location: ../Index.php");
}
?>