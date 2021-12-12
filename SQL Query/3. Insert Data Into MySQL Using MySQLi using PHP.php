<hr>
<h1>Connecting to MySQL Database from PHP Script</h1>
<hr>

<?php

// ^ NOTE : when 1st time run the code for inserting data in database and if connection is successful  and , then if you again run the same code (with same serial number), it will give you an error saying that 
// & Duplicate entry '1' for key 'PRIMARY'

// connecting to database

$servername = "localhost"; // default servername for pHpMyAdmin
$username = "root"; // default username for pHpMyAdmin
$password = ""; // default password for pHpMyAdmin
$database = "Mydb1"; // database in which u want to insert data

// create a connection

$connection = mysqli_connect($servername, $username, $password , $database);

// to insert SQL Query , refer following steps : 

// 1. create a demo database (which u will only used for practice )
// 2. create a table in database using pHpMyAdmin website as we discusssed in "C:\xampp\htdocs\PHP_codes\php Notes\3. MySQL.js" file
// 3. go to the table , then click on "Insert" button to include the data in the table
// 4. enter the data and click on "Go" button.
// 5. after creating table , click on console button which is present at bottom and then copy the command that starts with "INSERT INTO". and paste it in vscode

$table_data = "INSERT INTO `students` (`Sr no.`, `Student Name`, `Roll Number`) VALUES ('3', 'Virat', '18'), ('4', 'Ab de villiers', '17')";

$result = mysqli_query($connection , $table_data);


if (!$result){
    die("Connection failed <br>" .mysqli_error($connection));
}else{
    echo "We have successfully connected a database named as 'Mydb1' <br>";
    echo "Connection is successfull";
}


?>