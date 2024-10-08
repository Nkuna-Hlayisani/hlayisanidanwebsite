<?php
$servername = "sql100.infinityfree.com";
$username = "if0_37473814";
$password = "NKUNADAM";
$dbname = "if0_37473814_cv_website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("connection failed: " .$conn->connect_error);
}