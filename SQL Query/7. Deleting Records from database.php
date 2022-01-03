<h1>Deleting Records from Database</h1>
<hr>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "Mydb1";

// create a connection

$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {

    die("Connection failed <br>" . mysqli_connect_error());
} else {

    echo "Connection successful";
}

$delete_query = "DELETE FROM `form_details` WHERE `Sr No.` = '1'";
$exec_delete_query = mysqli_query($connection, $delete_query);

$aff = mysqli_affected_rows($connection);
echo "<br>Number of affected rows: $aff <br>";


if ($result) {
    echo "Delete successfully";
} else {
    $err = mysqli_error($connection);
    echo "Not Delete successfully due to this error --> $err";
}

?>