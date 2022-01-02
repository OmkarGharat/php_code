<hr>
<h2>Arrays in PHP </h2>
<h4>These are Numeric arrays / Indexed arrays because we use index to get the value of that position</h4> 
<hr>

<?php
    
// * Arrays : 

// An array is a special variable , which can hold more than one value at a time. Arrays can be used to store linear data of similar types.

// In PHP , the array() function is used to create an array : 

// ! Syntax : array();

// ^ In PHP , there are 3 types of arrays : 

// = 1. Indexed arrays - Arrays with a numeric index 

// = 2. Associstive arrays - Arrays with named keys 

// = 3. Multi-dimensional arrays - Arrays containing one or more arrays

?>

<?php

// * Syntax for arrays:

// ! $array_name = array("value1" , "value2" , "value3" , ...);

$arr = array("Ab de villiers" , "Baseball" , "Cricket" , "Dog");


// echo "$arr"; // ! throws error
// echo $arr; // ! throws error

print_r($arr); // * to print array values vertically

// ^ Note :  print_r($array_name) is used to print all values with their index numbers of an arraw on output screen.

echo "<pre>";
print_r($arr);

// * prints value at [index] location

// ! echo "$array_name[index_number]";

echo "$arr[0] <br>"; 
echo "$arr[1] <br>";
echo "$arr[2] <br>";
echo "$arr[3] <br>";

// echo "$arr[4] <br>"; // ! throws error

?>