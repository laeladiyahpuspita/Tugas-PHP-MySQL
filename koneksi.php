<?php
$servername = "localhost";
$username = "username";
$katasandi = "";
$database = "tugasweb";

// Create connection
$koneksi = mysqli_connect($servername, $username, $katasandi, $database);

// Check connection
if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>