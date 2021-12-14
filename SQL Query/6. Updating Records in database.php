<!-- WE will update records using WHERE clause. -->

<!-- It is used to extract only those records that fulfill a specified condition. -->

<!--  Note: The WHERE clause is used in SELECT , UPDATE, DELETE, and many more statements. -->

<hr>
<h1>Updating Records in Database</h1>
<hr>

<?php
    
// connecting to database

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "Mydb1";

// create a connection

$connection = mysqli_connect($servername, $username, $password , $database);

if (!$connection){
    die("Connection failed <br>" .mysqli_connect_error());
}else{    
    echo "Connection is successfull  <br>";
}

$sql_data = " SELECT * from `form_details` WHERE `Email` = 'abc@mail.com'"; 
$result = mysqli_query($connection, $sql_data);

$rows = mysqli_num_rows($result);

// ! $rows ==> no. of rows where condition is satisfied.

echo "There are " . $rows . " rows in 'form_details' table where email = abc@mail.com". "<br> <hr>";


if ($rows > 0) {
    while ($records = mysqli_fetch_assoc($result)){
        echo var_dump($records);
        echo "<br>";
    }
}

// * Updating the data using "WHERE" clause

$update_data = "UPDATE `form_details` SET `password` = '112233' WHERE `Email` = 'abc@mail.com'";

// * returns (in boolean format) whether data is updated or not
$result = mysqli_query($connection , $update_data); 
echo var_dump($result); 

// mysqli_query updation records के लीये number ऑफ records return नही करती है , वो रिटर्न करती है true ऑर false , अगर updation successful हुआ तो true return करती है , अगर updation failed हुआ तो false return करती है 

// ^ NOTE : when 1st time run the SQL query for Updating records in database (Updating values in a table in database) and if connection is successfully and table is successfully updated and , then if you again run the same code , it will 
// = NOT give you any error

// * showing the updated rows

// ! returns how many rows has been affected
$affected_rows = mysqli_affected_rows($connection);
echo "<br>There are " . $affected_rows ." Affected rows<br>"; 

if($result){
    echo "We updated the record successfully";
}
else{
    echo "We could not update the record successfully";
}




?>