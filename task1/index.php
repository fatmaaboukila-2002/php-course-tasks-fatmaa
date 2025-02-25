<?php

$show = false;

if (isset($_POST['print'])) {
    $show = true;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
}
// print_r($_POST);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>



    <div class="container col-md-6">
        <h3 class="text-center my-4"> Register Form</h3>
        <form  method="POST">
            <div class="form-group">
                <input type="text" name="name" placeholder="Your Name" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="email" placeholder="Your Email" class="form-control my-3">
            </div>
            <div class="form-group">
                <input type="text" name="phone" placeholder="Your phone" class="form-control my-3">
            </div>
            <div class="form-group">
                <input type="text" name="password" placeholder="Your password" class="form-control my-3">
            </div>
            <div class="form-group">
                <select name="gender" class="form-select" id="">
                    <option disabled selected> Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="d-grid">
                <button name="print" class=" btn btn-info mt-4"> Print Data</button>
            </div>
        </form>
    </div>


    <?php if ($show): ?>
        <div class="container col-md-5 my-5">
            <h3 class="text-center my-4">Your Data</h3>
            <div class="card">
                <div class="card-body">
                    <h6>Your Name : <?= $name  ?> </h6>
                    <hr>
                    <h6>Your Email : <?= $email  ?></h6>
                    <hr>
                    <h6>Your Phone : <?= $phone  ?> </h6>
                    <hr>
                    <h6>Your Gender : <?= $gender  ?> </h6>
                </div>
            </div>
        </div>
    <?php endif; ?>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>


</html>