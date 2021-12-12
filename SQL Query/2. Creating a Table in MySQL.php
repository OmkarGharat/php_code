<?php

// ^ NOTE : when 1st time run the code for creating table in database and if connection is successfully and table is successfully created and , then if you again run the same code , it will give you an error saying that 
// & Table 'students' already exists
    
// connecting to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "Mydb1";

// create a connection 

$connection = mysqli_connect($servername, $username, $password);

// to insert SQL Query for creating a table in database , refer following steps : 

// 1. create a demo database (which u will only used for practice )
// 2. create a table in database using pHpMyAdmin website as we discusssed in "C:\xampp\htdocs\PHP_codes\php Notes\3. MySQL.js" file
// 3. after creating table , click on console button which is present at bottom and then copy the command that starts with "CREATE TABLE". and paste it in vscode

// * create a table in database

$mytable = "CREATE TABLE `Mydb1`.`Students` ( `Sr no.` INT(6) NOT NULL AUTO_INCREMENT , `Student Name` VARCHAR(30) NOT NULL , `Roll Number` INT(3) NOT NULL , PRIMARY KEY (`Sr no.`))";

$result = mysqli_query($connection , $mytable);

if ($result){
    // echo "We have successfully connected a database named as 'Mydb1' <br>";
    echo "We have successfully created a table named as 'Students' and connected to  database named as 'Mydb1' <br>";
    echo "Connection is successfull";
}else{  
    die("Connection failed <br>" .mysqli_error($connection));
}


?>