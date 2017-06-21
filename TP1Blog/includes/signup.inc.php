<?php
session_start();
include '../Database.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];

echo $first_name."<br>";
echo $last_name."<br>";
echo $username."<br>";
echo $password."<br>";

if (empty($first_name)) {
    header("Location: ../signup.php?error=empty");
    exit();
}
if (empty($last_name)) {
    header("Location: ../signup.php?error=empty");
    exit();
}
if (empty($username)) {
    header("Location: ../signup.php?error=empty");
    exit();
}
if (empty($password)) {
    header("Location: ../signup.php?error=empty");
    exit();
} else {

    $sql = "SELECT username FROM users WHERE username ='$username'";
    $result = mysqli_query($conn, $sql);
    $username_check = mysqli_num_rows($result);
    if($username_check > 0) {
        header("Location: ../signup.php?error=username");
        exit();
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (first_name, last_name, username, password) 
                VALUES ('$first_name', '$last_name', '$username', '$hashed_password')";
        $result = mysqli_query($conn, $sql);

        header("Location: ../Index.php");
    }
}


?>

