<hr>
<h1>Connecting to MySQL Database from PHP Script</h1>
<hr>

<?php

// ^ NOTE : when 1st time run the code for creating database and if connection is successfully and database is successfully created , then if you again run the same code , it will give you an error saying that Can't create database 'mydb1'; database exists 

// connecting to database

$servername = "localhost"; // default servername for pHpMyAdmin
$username = "root"; // default username for pHpMyAdmin
$password = ""; // default password for pHpMyAdmin

// create a connection

$connection = mysqli_connect($servername, $username, $password);

// * create a database using SQL Query 

$sql_create_db = "CREATE DATABASE Mydb1";
$result = mysqli_query($connection , $sql_create_db);

if (!$result){
    die("Connection failed <br>" .mysqli_error($connection));
}else{
    echo "We have successfully connected a database named as 'Mydb1' <br>";
    echo "Connection is successfull";
}



?>