<h1> foreach loop in PHP </h1>

<!-- foreach loop is used to iterate objects and arrays -->

<?php

$country_array = array("India" , 'New Zeland' , "South Africa" , "Australia");

    foreach ($country_array as $value) {

        echo "$value <br>";

    }
    
?>