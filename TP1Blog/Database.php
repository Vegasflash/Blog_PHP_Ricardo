<?php

$conn = mysqli_connect("localhost", "root", "", "test");
$article_conn = mysqli_connect('localhost', 'root', '', 'articles');

if(!$article_conn) {
    die("Connection failed: ".mysqli_connect_error());
}

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

?>