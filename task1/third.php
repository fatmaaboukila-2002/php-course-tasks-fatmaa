<?php
$show = false;
$message = "";
$pass = 132002; 
if (isset($_POST['submit'])) {
    $cpass = $_POST['cpass'];

    if ($cpass != $pass) {
        $message = '<div class="alert alert-danger">Incorrect current password</div>';
    } else {
        $show = true;
        if (isset($_POST['npass'], $_POST['cnpass'])) {
            $npass = $_POST['npass'];
            $cnpass = $_POST['cnpass'];
            
                if ($npass != $cnpass) {
                    $message = '<div class="alert alert-danger">New password does not match</div>';
                } elseif ($npass == $pass) {
                    $message = '<div class="alert alert-warning">New password must be different from the current password</div>';
                } else {
                    $message = '<div class="alert alert-success">Password changed successfully</div>';
                    $show = false; 
                }
        
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="container col-md-5">
        <div class="border rounded-3 shadow-sm p-5 bg-white">
            <h3 class="text-center mb-4">Change Password</h3>
            <form method="POST">
                <div class="form-group mb-3">
                    <label for="Cpassword" class="fw-semibold">Current Password</label>
                    <input type="password" name="cpass" class="form-control" required>
                </div>
                
                <?php if ($show): ?>
                <div class="form-group mb-3">
                    <label for="npassword" class="fw-semibold">New Password</label>
                    <input type="password" name="npass" class="form-control" required>
                </div>
                <div class="form-group mb-4">
                    <label for="Cnpassword" class="fw-semibold">Confirm New Password</label>
                    <input type="password" name="cnpass" class="form-control" required>
                </div>
                <?php endif; ?>

                <button type="submit" name="submit" class="btn btn-primary w-100 py-2">Submit</button>
            </form>
            <?php echo $message; ?>
        </div>
    </div>

   
</body>
</html>
