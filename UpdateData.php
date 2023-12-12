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

$sql = "UPDATE mahasiswa SET namadepan='Amallia' WHERE id=2";

if (mysqli_query($koneksi, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>