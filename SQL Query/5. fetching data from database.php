<hr>
<h1 style="display: flex; justify-content: center;">Fetching Data from Database</h1>
<hr>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "Mydb1";

$connection = mysqli_connect($servername, $username, $password , $database);

if (!$connection){
    die("Connection failed <br>" .mysqli_connect_error());
}else{
    // echo "We have successfully connected a database named as 'Mydb1'";
    echo "Connection is successfull  <br>";
}

$sql_db_all_records = "SELECT * FROM `form_details`";
$result = mysqli_query($connection , $sql_db_all_records);

// find the number of records returned 

$row_records = mysqli_num_rows($result);
echo "Total Number of records returned: " . $row_records;

if ($row_records > 0) {

    while ($records = mysqli_fetch_assoc($result)){

        echo var_dump($records);
        echo "<br>";

    }

}
    
?>

