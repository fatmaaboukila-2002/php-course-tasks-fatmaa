<?php
$cname = "Fatma";
$cpassword = 132002;
$message = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    if ($name == $cname && $password == $cpassword) {
        $message = "<div class='alert alert-success mt-3'>Welcome to the website</div>";
    } else {
        $message = "<div class='alert alert-danger mt-3'>Incorrect credentials</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class= "bg-light d-flex justify-content-center align-items-center vh-100">
<div class="container col-md-5">
  <div class="border rounded-3 shadow-sm p-5 bg-white">
<form method="POST">
  <div class="mb-3">
    <label for="namee" class="form-label fw-bold fs-5">Name</label>
    <input type="text" name="name" class="form-control" id="namee" required>
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label fw-bold fs-5">Password</label>
    <input type="password" name="password" class="form-control" id="pass" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary fs-5 w-100 py-2">Submit</button>

  <?php
      echo $message;
  ?>
</form>
</div>
</div>
</body>
</html>
