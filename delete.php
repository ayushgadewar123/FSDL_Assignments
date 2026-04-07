<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Delete Employee</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<!-- ✅ Navbar -->
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

<!-- ✅ Content -->
<div class="container" style="margin-top:80px;">

<h2 class="text-center mb-4 text-danger">Delete Employee</h2>

<div class="card p-4 shadow">

<form method="post">
  <div class="mb-3">
    <label class="form-label">Enter Employee ID</label>
    <input type="text" name="employee_id" class="form-control" required>
  </div>

  <!-- ✅ IMPORTANT: name="delete" -->
  <button class="btn btn-danger w-100" name="delete">Delete</button>
</form>

</div>

<?php
if(isset($_POST['delete'])) {
    $id = $_POST['employee_id'];

    $sql = "DELETE FROM employees WHERE employee_id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success mt-3'>Employee deleted successfully!</div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Error: " . $conn->error . "</div>";
    }
}
?>

<br>
<a href="index.php" class="btn btn-secondary">Back</a>

</div>

</body>
</html>