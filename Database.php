<?php
$host ='localhost';
$username = 'root';
$password = "";
$database ="mydb";

$conn = mysqli_connect($host, $username, $password, $database);


if(!$conn) {
  die("Connection failed: " . mysqil_connect_error());
}
?>