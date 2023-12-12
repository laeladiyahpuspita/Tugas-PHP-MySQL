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

// sql to create table
$sql = "CREATE TABLE mahasiswa (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
namadepan VARCHAR(30) NOT NULL,
namabelakang VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($koneksi, $sql)) {
  echo "Table mahasiswa created successfully";
} else {
  echo "Error creating table: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
