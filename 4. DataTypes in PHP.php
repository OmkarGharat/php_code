<?php
      
/**
 * PHP data Types : 
 * 
 * 1. String
 * 2. Integer
 * 3. Float
 * 4. Boolean
 * 5. Object
 * 6. Array
 * 7. NULL
 * 
 */

// 1. String 

$name = 'Omkar';
echo "$name"; // Omkar

// 2. Integer 

$roll_no = 33;
echo "$roll_no"; // 33

// 3. Float 

$floating_point_number = 7.08;
echo "$floating_point_number"; //7.08

// 4. Boolean  

$true_value = true;
$false_value = false;

echo "$true_value"; // it will print nothing
echo "$false_value"; // it will print nothing

echo var_dump($true_value); // true

echo var_dump($false_value); // false

// 5. Object 

// we will see Object when we do Object Oriented Programming in php

// 6. Array

$cricket = array("bat" , "ball" , "stump");

echo var_dump($cricket);

echo var_dump($cricket[0]); // bat

// Note : Array indexing starts with 0

echo var_dump($cricket[3]); // it will throw error 

// 7. NULL

$null_value = NULL;

echo var_dump($null_value); // NULL 

?>