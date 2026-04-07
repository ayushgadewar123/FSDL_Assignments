<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>View Employees</title>

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

<!-- ✅ Content -->
<div class="container" style="margin-top:80px;">

<h2 class="text-center mb-4 text-primary">Employee Records</h2>

<table class="table table-bordered table-striped">
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Employee ID</th>
  <th>Department</th>
  <th>Phone</th>
  <th>Joining Date</th>
</tr>

<?php
$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['employee_name']."</td>
        <td>".$row['employee_id']."</td>
        <td>".$row['department_name']."</td>
        <td>".$row['phone_number']."</td>
        <td>".$row['joining_date']."</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No records found</td></tr>";
}
?>

</table>

<br>
<a href="index.php" class="btn btn-secondary">Back</a>

</div>

</body>
</html>