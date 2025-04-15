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
      <h2 class="mb-4">Students List</h2>

      <!-- Actions: Add + Search -->

      <div
        class="d-flex flex-column flex-sm-row align-items-sm-center mb-4 gap-3"
      >
        <div class="flex-grow-0">
          <input
            type="text"
            name="search"
            placeholder="Search student details..."
            id="search_bar"
            class="form-control"
          />
        </div>
        <a href="create.php" class="btn btn-warning">Add New Student</a>
      </div>

      <!-- Students Table -->
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>D.O.B</th>
              <th>Gender</th>
              <th>Created At</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="tbody">
            <?php include "php/students_record.php"; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Scripts -->
     <script src="./js/search.js"></script>
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
