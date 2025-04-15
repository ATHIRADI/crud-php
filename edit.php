<?php 

include "php/connection.php";

$student = $_GET["student"];
if(!isset($student)){
  header("location: ../index.php");
} 

$select = mysqli_query($connection, "SELECT * FROM  `data` WHERE students_id = '$student'");
$fetch = mysqli_fetch_assoc($select);


  if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $number = trim($_POST['number']);
    $address = trim($_POST['address']);
    $gender = trim($_POST['gender']);
    $date = trim($_POST['date']);
    $time = date("d - F Y");
 



      $update = mysqli_query($connection, "UPDATE `data` SET `name`='$name',`email`='$email',`mobile`='$number',`address`='$address',`gender`='$gender',`dob`='$date' WHERE students_id = '$student'");

      if($update) {
       header("location: create.php?success=Student Updated Successfully");
      exit();

      }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Crud Project</title>
    <!-- Bootstrap CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- Main Container -->
    <div class="container my-5">
      <h2 class="mb-4">Edit Student Details</h2>

      <form action="" method="post">
        <!-- Name  -->
        <div class="mb-3 row">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-6">
            <input
              type="text"
              name="name" value="<?php echo $fetch["name"] ?>"
              class="form-control"
              placeholder="Student Name"
              required
            />
          </div>
        </div>

        <!-- Email Address  -->
        <div class="mb-3 row">
          <label for="email" class="col-sm-2 col-form-label"
            >Email Address</label
          >
          <div class="col-sm-6">
            <input
              type="email"
              name="email" value="<?php echo $fetch["email"] ?>"
              class="form-control"
              placeholder="Student Email Address"
              required
            />
          </div>
        </div>

        <!-- Mobile Number  -->
        <div class="mb-3 row">
          <label for="number" class="col-sm-2 col-form-label"
            >Mobile Number</label
          >
          <div class="col-sm-6">
            <input
              type="number"
              name="number" value="<?php echo $fetch["mobile"] ?>"
              class="form-control"
              placeholder="Student Mobile Number"
              required
            />
          </div>
        </div>

        <!-- Address  -->
        <div class="mb-3 row">
          <label for="address" class="col-sm-2 col-form-label">Address</label>
          <div class="col-sm-6">
            <input
              type="text"
              name="address" value="<?php echo $fetch["address"] ?>"
              class="form-control"
              placeholder="Student Address"
              required
            />
          </div>
        </div>

        <!-- Gender  -->
        <div class="mb-3 row">
          <label for="gender" class="col-sm-2 col-form-label">Gender</label>
          <div class="col-sm-6">
            <select name="gender" class="form-control" id="gender">

            <?php if($fetch["gender"] === "Male") {
              echo 
              '<option>Male</option>
              <option>Female</option>';
            }  else {
              echo 
              '<option>Female</option>
              <option>Male</option>';
            } ?>
              <!-- <option value="">Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option> -->
            </select>
          </div>
        </div>

         <!-- D.O.B  -->
        <div class="mb-3 row">
          <label for="date" class="col-sm-2 col-form-label">D.O.B</label>
          <div class="col-sm-6">
            <input
              type="date"
              name="date" value="<?php echo $fetch["dob"] ?>"
              class="form-control"
              placeholder="Student D.O.B"
              required
            />
          </div>
        </div>

        <!-- Submit Button -->
        <div class="mb-3 row">
          <div class="col-sm-6 offset-sm-2">
            <button type="submit" name="submit"  class="btn btn-success">Submit</button>
            <a href="index.php" class="btn btn-warning">Back</a>
          </div>
        </div>


        <?php 
         if (isset($_GET["success"])) {
  echo '<div class="w-25 alert alert-success" role="alert">' . $_GET["success"] . '</div>';
}

        ?>
      </form>


    </div>

    <!-- Scripts -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js"
      integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+"
      crossorigin="anonymous"
    ></script>
    <!-- Scripts -->
  </body>
</html>
