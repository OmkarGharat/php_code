<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sign Up Form</title>
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">GET / POST</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/PHP_codes/4.%20save%20data%20into%20MYSQL%20database.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $userpassword = $_POST['pass'];
       
      $servername = "localhost";
      $username="root";
      $password="";
      $database="Mydb1";

      $connection = mysqli_connect($servername,$username,$password,$database);

     
      if ($connection){
        //   echo "Connection is successful";
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your data has been submitted successfully!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';

          $sign_up_data = "INSERT INTO `form_details` (`Name`, `Email`, `Password`) VALUES ('$name' , '$email', MD5('$userpassword'))";

        // ^  The MySQL MD5 function is used to return an MD5 128-bit checksum representation of a string. The MD5 message-digest algorithm is a widely used hash function producing a 128-bit hash value. The value returned by the MD5 function is a binary string of 32 hexadecimal digits, or NULL if the argument was NULL.

          $result = mysqli_query($connection , $sign_up_data);

          if (!$result){
            die("Connection failed <br>" .mysqli_error($connection));
        }else{
            // echo "We have successfully connected a database named as 'Mydb1' <br>";
            // echo "Connection is successfull";
        }

      }else {
          echo "Connection is NOT successfull";
      }
    }
    ?>

    <div class="container mt-3">
        <h1 class="mt-3 mb-3">Sign Up</h1>
        <form action="/PHP_codes/4.%20save%20data%20into%20MYSQL%20database.php" method="post">

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" name="name" class="form-control" id="name">               
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>            

            <div class="mb-3">
                <label for="pass" class="form-label">password</label>
                <input type="password" name="pass" class="form-control" id="pass">
                <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>              
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>