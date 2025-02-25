
<?php
$show = true;
$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $show = true;
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

  if (strpos($email, '@') === false || strpos($email, '.') === false) {
        $message = '<div class="alert alert-danger">Invalid email format.</div>';
    } 
    else {
        $message = '<div class="alert alert-success">Registration successful</div>';
        $show = false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="container col-md-5">
        <div class="border rounded-3 shadow-sm p-5 bg-white">
            <h3 class="text-center mb-4">Registration Form</h3>
            <?php if ($show): ?>
            <form method="POST" action="">
                <div class="form-group mb-3">
                    <label for="username" class="fw-semibold">Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="fw-semibold">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group mb-4">
                    <label for="password" class="fw-semibold">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2">Submit</button>
            </form>
            <?php endif; ?>
            <?php echo $message; ?>
        </div>
    </div>
</body>
</html>