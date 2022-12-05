<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "Ajax_live_search";

$conn = mysqli_connect($host, $user, $pass, $db);
if(!$conn){
    echo "Connection failed" . mysqli_connect_error();
}

