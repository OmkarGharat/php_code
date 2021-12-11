<!-- * Connecting to the Database

Now to connect our script to the MySQL databases we have 2 options.

1. MySQLi extension.
2. PDO. 

MySQLi:  MySQLi is an open-source relational database management system that is used on the web. This database system is reliable for both small and large applications.

PDO: PHP Data Object is a PHP extension that defines a lightweight and consistent interface for accessing a database in PHP. It is a set of PHP extensions that provide a core PDO class and database-specific driver. 

here , we will use MySQLi
-->

<hr>
<h1>Connecting to MySQL Database from PHP Script</h1>
<hr>

<?php

// connecting to database

$servername = "localhost"; // default servername for pHpMyAdmin
$username = "root"; // default username for pHpMyAdmin
$password = ""; // default password for pHpMyAdmin

// create a connection

$connection = mysqli_connect($servername, $username, $password);

if (!$connection){
    die("Connection failed <br>" .mysqli_connect_error());
}else{
    echo "Connection is successfull";
}
    
?>