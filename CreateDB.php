<?php
$servername = "localhost";
$username = "root";
$katasandi = "";
$database = "tugasweb";

// Create connection
$koneksi = mysqli_connect($servername, $username, $katasandi, $database);
// Check connection
if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE tugasweb";
if (mysqli_query($koneksi, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>