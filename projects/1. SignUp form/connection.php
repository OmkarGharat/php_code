<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "registration_form";

    $connection = mysqli_connect($servername, $username, $password , $database);

    if($connection){
        echo "Connection established.";
    }else{
        echo "Connection failed... ";
    }

?>