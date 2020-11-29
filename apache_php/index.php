<?php 

$servername = "database";
$username = "Lwalid";
$password = "testmdp";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myapp", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully ";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

echo " it is working "

?>