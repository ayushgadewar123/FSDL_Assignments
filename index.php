<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Employee Management</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<!-- ✅ Navbar at TOP -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">EMS</a>

    <div>
      <a class="btn btn-light me-2" href="index.php">Home</a>
      <a class="btn btn-success me-2" href="view.php">View</a>
      <a class="btn btn-warning me-2" href="update.php">Update</a>
      <a class="btn btn-danger" href="delete.php">Delete</a>
    </div>
  </div>
</nav>

<!-- ✅ Add space below navbar -->
<div class="container" style="margin-top:80px;">

  <h2 class="text-center mb-4 text-primary">Employee Management System</h2>

  <div class="card p-4 shadow">
    <form action="insert.php" method="post">

      <div class="mb-3">
        <label class="form-label">Employee Name</label>
        <input type="text" name="employee_name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Employee ID</label>
        <input type="text" name="employee_id" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Department</label>
        <input type="text" name="department_name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone_number" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Joining Date</label>
        <input type="date" name="joining_date" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary w-100">Insert Employee</button>
    </form>
  </div>

  <div class="text-center mt-4">
    <a href="view.php" class="btn btn-success">View</a>
    <a href="update.php" class="btn btn-warning">Update</a>
    <a href="delete.php" class="btn btn-danger">Delete</a>
  </div>

</div>

</body>
</html>