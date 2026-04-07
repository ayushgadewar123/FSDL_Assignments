<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Update Employee</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">EMS</a>

    <div class="d-flex flex-wrap gap-2">
      <a class="btn btn-light" href="index.php">Home</a>
      <a class="btn btn-success" href="view.php">View</a>
      <a class="btn btn-warning" href="update.php">Update</a>
      <a class="btn btn-danger" href="delete.php">Delete</a>
    </div>
  </div>
</nav>

<div class="container" style="margin-top:90px;">

  <h2 class="text-center mb-4 text-warning">Update Employee</h2>

  <div class="card p-4 shadow">
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Employee ID</label>
        <input type="text" name="employee_id" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">New Name</label>
        <input type="text" name="employee_name" class="form-control">
      </div>

      <div class="mb-3">
        <label class="form-label">New Department</label>
        <input type="text" name="department_name" class="form-control">
      </div>

      <div class="mb-3">
        <label class="form-label">New Phone</label>
        <input type="text" name="phone_number" class="form-control">
      </div>

      <button type="submit" name="update" class="btn btn-warning w-100">Update</button>
    </form>
  </div>

<?php
if (isset($_POST['update'])) {
    $id = trim($_POST['employee_id']);
    $name = trim($_POST['employee_name']);
    $dept = trim($_POST['department_name']);
    $phone = trim($_POST['phone_number']);

    if ($id == "") {
        echo "<div class='alert alert-danger mt-3'>Employee ID is required!</div>";
        exit();
    }

    if ($phone != "" && !preg_match("/^[0-9]{10}$/", $phone)) {
        echo "<div class='alert alert-danger mt-3'>Phone must be 10 digits!</div>";
        exit();
    }

    $updates = [];

    if ($name != "") {
        $updates[] = "employee_name='$name'";
    }

    if ($dept != "") {
        $updates[] = "department_name='$dept'";
    }

    if ($phone != "") {
        $updates[] = "phone_number='$phone'";
    }

    if (count($updates) > 0) {
        $sql = "UPDATE employees SET " . implode(", ", $updates) . " WHERE employee_id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success mt-3'>Employee updated successfully!</div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Error: " . $conn->error . "</div>";
        }
    } else {
        echo "<div class='alert alert-warning mt-3'>Enter at least one field to update!</div>";
    }
}
?>

  <br>
  <a href="index.php" class="btn btn-secondary">Back</a>
</div>

</body>
</html>