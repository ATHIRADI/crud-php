<?php 

 include "connection.php";
$searchTerm = $_POST["searchTerm"];
$sql = mysqli_query($connection, "SELECT * FROM `data` 
WHERE (
  `id` LIKE '%{$searchTerm}%' OR
  `name` LIKE '%{$searchTerm}%' OR
  `email` LIKE '%{$searchTerm}%' OR
  `mobile` LIKE '%{$searchTerm}%' OR
  `address` LIKE '%{$searchTerm}%' OR
  `gender` LIKE '%{$searchTerm}%' OR
  `dob` LIKE '%{$searchTerm}%' OR
  `time_created` LIKE '%{$searchTerm}%'
  

)");

$output = "";
if(mysqli_num_rows($sql) > 0){
 while ($fectch = mysqli_fetch_assoc($sql)) {
  $output .= "<tr>
              <td>" .$fectch["id"]. "</td>
               <td>" .$fectch["name"]. "</td>
               <td>" .$fectch["email"]. "</td>
               <td>" .$fectch["mobile"]. "</td>
               <td>" .$fectch["address"]. "</td>
               <td>" .$fectch["gender"]. "</td>
               <td>" .$fectch["dob"]. "</td>
               <td>" .$fectch["time_created"]. "</td>
               <td>
               <a href='edit.php?client=" . $fectch['students_id'] . "' class='btn btn-warning btn-sm me-1'>Edit</a>
<a href='php/delete.php?client=" . $fectch['students_id'] . "' class='btn btn-danger btn-sm'>Delete</a>

              </td>
            </tr> ";
 } 

} else {
  $output .= "<tr><td colspan='9' class='text-center'>No student records found.</td></tr>";
}

  echo $output;
?>