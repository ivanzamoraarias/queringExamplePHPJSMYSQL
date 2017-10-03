<?php
/**
 * Created by PhpStorm.
 * User: Ivan Zamora
 * Date: 10/2/17
 * Time: 4:34 PM
 */

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "EXERCISEDB";

$name=$_GET["nametxt"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO USER (NAME) VALUES (".$name.")";

if ($conn->query($sql) === TRUE) {
  echo "Your name is now in the database";
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>