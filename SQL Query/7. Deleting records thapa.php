<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .box {
            margin: 2rem 0.5rem;
            padding: 1rem 0 1rem 1rem;
            color: red;
            box-shadow: 0 0 8px rgb(0 0 0 / 30%);
            text-align: center;
        }

        .table {
            box-shadow: 0 0 1rem -0.09rem rgb(10 10 10 / 28%), 0 0 0 1px rgb(10 10 10 / 2%);
            border-radius: 3px;
        }

        th,
        td {
            text-align: center;
            border: none;
            border-right: 2px solid #898989 !important;
            border-left: 2px solid #898989 !important;
        }


        .row_header {
            font-size: 1.5rem;
            border-bottom: 2px solid #898989 !important;
            border-left: 2px solid #898989 !important;
            background-color: #fbffc3 !important;
            color: #ff651e;
        }
    </style>
</head>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "Mydb1";

$connection = mysqli_connect($servername, $username, $password, $database);

if ($connection) {
    echo "Connection is successful";
} else {
    die("Connection failed" . mysqli_connect_error());
}


?>

<body>
    <div class="container">
        <div class="box">
            <h1>Select Data from Database in PHP & Display in Table Format</h1>
        </div>

        <div class="modal" id="DELETE_MODAL" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th class="row_header" scope="col">Sr No.</th>
                    <th class="row_header" scope="col">Name</th>
                    <th class="row_header" scope="col">Email</th>
                    <th class="row_header" scope="col">Password</th>
                    <th class="row_header" scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                <?php

                $select_query = "SELECT * FROM `form_details` ";
                $result = mysqli_query($connection, $select_query);

                if ($result) {
                    echo " We are ready to display records from database";
                }

                $nums = mysqli_num_rows($result);
                // echo "$nums";

                $srNo = 0;               

                while ($res = mysqli_fetch_array($result)) {
                    $srNo++;
                    echo "<tr>
                <th scope='row'>" . $srNo . "</th>
                <td>" . $res['Name'] . "</td>
                <td>" . $res['Email'] . "</td>
                <td>" . $res['Password'] . "</td>
                <td> <button type='button' class='btn btn-danger'>   <a href='?ID=". $res['Sr No.'] . "'> Delete </a>  </button> </td>
            </tr> ";
                }

                // * Deleting records from database

                // ^ NOTE : line नंबर 121 मध्ये anchor tag मधील जो href चा path question मार्क नंतर असतो तोच word $_get[''] मध्ये असायलाच पाहिजे , तरच ine नंबर 121 मधील $res['Sr No.'] मध्ये database मधून value येईल .

                $databaseSrNo =  $_GET['ID'];
                echo $databaseSrNo;
                
                $delete_query = "DELETE FROM `form_details` WHERE `Sr No.` =   $dbsrno ";
                $del_result = mysqli_query($connection, $delete_query);

                ?>

            </tbody>
        </table>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>