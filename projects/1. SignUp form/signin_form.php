<?php
session_start();
?>

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
    <style>
        body {
            background-color: rgb(255, 240, 255);
        }
    </style>
</head>

<?php

include 'connection.php';

if (isset($_POST["submit"])) {

    $Email = $_POST["email"];
    $password = $_POST["password"];

    $email_search = "SELECT * FROM `signupform` WHERE `email` = '$Email'";
    $query = mysqli_query($connection, $email_search);

    $email_count = mysqli_num_rows($query);

    if ($email_count) { // if email is present in database

        $email_pass = mysqli_fetch_assoc($query);

        $dbPassword = $email_pass['password'];

        $_SESSION['username'] = $email_pass['name'];

        echo $_SESSION['username'];

        $verify_pass = password_verify($password, $dbPassword);


        if ($verify_pass) {

?>
            <script>
                window.setTimeout(function() {
                    window.location = 'homepage.php';
                }, 1000);
            </script>
<?php
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Success !!</strong> Logging into your account
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
            // header("location: homepage.php");

        } else {
            echo "<div class='alert alert-danger alert-dismissible fade show' style='background-color: #ff4f4f; color: #ffffff;' role='alert'>
                    <strong>Error !!</strong> Password is incorrect !!!!
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        }
    } else {
        // echo "Account is not registered with this email !!";
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Error !!</strong> Account is not registered with this email !!
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
    }
}


?>

<body>
    <div class="container col-md-6 pt-3 pb-3">
        <div class="heading mt-3 mb-4">
            <h2>Sign in</h2>
        </div>
        <form class="form_style" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);   ?>">
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

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            <div class="input">
                <div id="emailHelp" class="form-text"> Don't have an account ??
                    <a href="index.php"> Sign Up </a>
                </div>
            </div>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>