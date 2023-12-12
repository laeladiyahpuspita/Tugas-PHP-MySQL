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

$sql = "INSERT INTO mahasiswa (namadepan, namabelakang, email)
VALUES ('Laela', 'Diyah Puspita', 'leladiahpuspita123@gmail.com')";

if (mysqli_query($koneksi, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>