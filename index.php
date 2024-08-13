<?php

$servername = "roundhouse.proxy.rlwy.net";
$username = "root";
$password = "gRZYLrXkeQKNjTYtScYsUrmZkiAVhYFI";
$port = 10557;
$dbname = "railway";

$conn = new mysqli($servername, $username, $password, $dbname, $port);
if($conn->connect_error) {
  exit('Could not connect');
}

$sql = "select id, nama, harga from testtable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["nama"]. " " . $row["harga"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();




?>