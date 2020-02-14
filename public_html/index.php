<?php
echo "Php works!";
$servername = "db";
$username = "drupal";
$password = "drupal";

try {
  $conn = new PDO("mysql:host=$servername;dbname=drupal", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully. Database PDO connection works!";
}
catch(PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
}