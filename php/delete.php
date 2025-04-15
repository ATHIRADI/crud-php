<?php 

include "connection.php";

$student = $_GET["student"];
if(!isset($student)){
  header("location: ./index.php");
   exit;
} 

$delete = mysqli_query($connection, "DELETE FROM  `data` WHERE students_id = '$student'");

if (!$delete) {
  echo "Error deleting record: " . mysqli_error($connection);
  exit;
}


header("location: ../index.php");
exit;
  

?>