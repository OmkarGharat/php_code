<h1>push , pop , shift , unshift methods in Array in PHP</h1>
<hr>

<?php

$RCB = array('Virat Kohli' , 'AB De Villiers' , 'Glean Maxwell' , 'Yuzi Chahal' , 'Mohammad Siraj' , 'Harshal Patel' , 'Devdutt Paddikal' , 'Washington Sundar');

echo "<pre>";
echo "<h2>Origional Array : </h2>";
print_r($RCB);

// * 1. array_pop($arr);

// This function removes an element from the end of the array.

// echo "<pre> $RCB"; // ! throws error

echo "<pre>";
$remove_last_element = array_pop($RCB);
echo "<hr> <h2>The $remove_last_element will be removed </h2> <hr>";
echo "<h2>Removed last element of array using array_pop() method : </h2>";
print_r($RCB);
echo "<hr>";

    
// * 2. array_push($arr , $value);

// This function adds an element to the end of the array.

// ^ NOTE : counting_number = index_number + 1

echo "<pre>";
$added_element_at_last_position = array_push($RCB , 'KS Bharat');
echo "<h2>There are total $added_element_at_last_position elements in array after performing array_push()  </h2> <hr>";
echo "<h2>Added an element to the end of the array using array_push() method : </h2>";
print_r($RCB);
echo "<hr>";

// * 3. array_shift($arr);

// This function removes an element from the beginning of the array.

echo "<pre>";
$remove_first_element = array_shift($RCB);
echo "<h2>The $remove_first_element will be removed </h2> <hr>";
echo "<h2>Removed first element of array using array_shift() method : </h2>";
print_r($RCB);
echo "<hr>";

// * 4. array_unshift($arr, $value);

// This function adds an element to the beginning of the array.

$added_element_at_first_position = array_unshift($RCB , 'Mitchell Starc');
echo "<h2>There are total $added_element_at_first_position elements in array after performing array_unshift()  </h2> <hr>";
echo "<h2>Added an element at the beginning of the array using array_unshift() method : </h2>";
print_r($RCB);
echo "<hr>";

?>