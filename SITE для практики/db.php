<?php

$servername = "localhost";
$username = "root";
$password = "prokadet352005";
$dbname = "registerUser";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die("Connection Failed". mysqli_connect_error());
} else {
  "Успех";
} ?>