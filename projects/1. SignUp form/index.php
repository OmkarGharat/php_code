<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="style.css" />
</head>

<?php

include 'connection.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $Email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // mysqli_real_escape_string()

    $hash_pass = password_hash($password, PASSWORD_BCRYPT);

    $hash_confirm_pass = password_hash($password, PASSWORD_BCRYPT);

    $email_query = "SELECT * FROM `signupform` WHERE `email` = '$Email' ";

    $run_email_query = mysqli_query($connection, $email_query);

    $email_count = mysqli_num_rows($run_email_query);

    if ($email_count > 0) {
        // echo "This email is already used by another user.";
        echo "<div class='alert alert-danger alert-dismissible fade show' style='background-color: #ff4f4f; color: #ffffff;' role='alert'>
		<strong>Error !!</strong> This email is already used by another user.
		<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
	</div>";
    } else {
        if ($password === $confirm_password) {

            $insertquery = "INSERT INTO `signupform`(`name`, `email`, `password`, `confirm_password`) VALUES ('$name','$Email','$hash_pass','$hash_confirm_pass')";

            $run_insert_query = mysqli_query($connection, $insertquery);

            if ($run_insert_query) {

                echo "Insert query is successfully executed";
            } else {

                echo "Insert query is NOT executed";
            }
        } else {
            echo "<div class='alert alert-danger alert-dismissible fade show' style='background-color: #ff4f4f; color: #ffffff;' role='alert'>
            <strong>Error !!</strong> Password are not matching
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        }
    }
}



?>

<body>
    <div class="container col-md-6 pt-3 pb-3">
        <!-- <div class="col-md-6"> -->
        <div class="heading mt-3 mb-4">
            <h2>Sign Up</h2>
        </div>
        <form class="form_style" method="post" action="<?php
                                                        echo htmlentities($_SERVER['PHP_SELF']);   ?>">
            <div class="input">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" required />
            </div>
            <div class="input">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required />
                <div id="emailHelp" class="form-text">
                    We'll never share your email with anyone else.
                </div>
            </div>
            <div class="input">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required />
            </div>
            <div class="input">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="confirm_password" />
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>