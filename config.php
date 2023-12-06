<?php 

$server = "localhost";
$dbuser = "root";
$password = "";
$database = "dblaundry";

$conn = mysqli_connect($server, $dbuser, $password, $database);

if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
