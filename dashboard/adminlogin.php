<?php
include 'config.php';
session_start();
if (isset($_SESSION['user'])) {


    echo "<script>window.location.href = 'index.php'</script>";


}

if (isset($_POST['login'])) {

    // print_r($_POST);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `ADMIN` WHERE `email` = '$email' AND `password` = '$password' ";
    $res = mysqli_query($conn, $query);
    // echo mysqli_num_rows($res);

    if (mysqli_num_rows($res) == 1) {



        $data = mysqli_fetch_assoc($res);

        $adminname = $data['adminname'];
        $adminemail = $data['email'];
        $_SESSION['user'] = $adminname;
        $_SESSION['email'] = $adminemail;

        echo "<script>alert('login success')</script>";

        echo "<script>window.location.href = 'index.php'</script>";

    } else {

        echo "<script>alert('email or password is incorrect !')</script>";

        // echo "<script>window.location.href = 'adminlogin.php'</script>";

    }
    // print_r($res);





}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form class="container" action="adminlogin.php" method="post">
        <h1>Admin Login</h1>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="form2Example1" name="email" class="form-control"
                value="<?php echo @$_POST['email'] ?>" />
            <label class="form-label" for="form2Example1">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" name="password" />
            <label class="form-label" for="form2Example2">Password</label>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
            </div>

            <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
            </div>
        </div>

        <!-- Submit button -->
        <button class="btn btn-primary btn-block mb-4" type="submit" name="login">Sign in</button>

        <!-- Register buttons -->
        <!-- <div class="text-center">
            <p>Not a member? <a href="#!">Register</a></p>
            <p>or sign up with:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
            </button>
        </div> -->
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>





</body>

</html>