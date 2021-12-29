<?php

      /* Operators in PHP

      1. Arithmetic Operators
      2. Assignment Operators
      3. Comparison Operators 
      4. Logical Operators
      5. Ternery Operator
      6. Increment Operators
      7. Decrement Operators

*/

$a = 2;
$b = 3;

// * 1. Arithmetic Operators : 

echo "a+b = ". ($a+$b) . "<br>";
echo "a-b = ". ($a-$b) . "<br>";
echo "a*b = ". ($a*$b) . "<br>";
echo "a/b = ". ($a/$b) . "<br>";
echo "a%b = ". ($a%$b) . "<br>";
echo "a**b = ". ($a**$b) . "<br>";

// * 2. Assignment Operators : 

$x = $a;

$a+=6;
echo "$a" . "<br>";

$a-=6;
echo "$a" . "<br>";

$a*=6;
echo "$a" . "<br>";

$a/=6;
echo "$a" . "<br>";

$a%=6;
echo "$a" . "<br>";

// * 3. Comparison Operators : 

echo "a > b ==> " . var_dump($a > $b) . "<br>";
echo "a < b ==> " . var_dump($a < $b) . "<br>";
echo "a >= b ==> " . var_dump($a >= $b) . "<br>";
echo "a <= b ==> " . var_dump($a <= $b) . "<br>";
echo "a <> b ==> " . var_dump($a <> $b) . "<br>";
echo "a == b ==> " . var_dump($a == $b) . "<br>";
echo "a != b ==> " . var_dump($a != $b) . "<br>";

// * 4. Logical Operators

$m = true;
$n = false;

echo "For m and n, the result is "; 
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is "; 
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is "; 
echo var_dump($m or $n);
echo "<br>";

echo "For m || n, the result is "; 
echo var_dump($m || $n);
echo "<br>";

echo "For !m , the result is "; 
echo var_dump(!$m);
echo "<br>";

echo "For m xor n , the result is "; 
echo var_dump($m xor $n);
echo "<br>";

// ^ Note : "xor" returns true iff either any one value is true . If both values are true then result is false

// * 5. Ternery Operator

// Ternery operator takes 3 operands ==> a condition , result_for_true and result_for_false

// ! Syntax : (condition) ? result_for_true : result_for_false ;

// read above syntax as follows : 

// ! if condition is true then ? execute result_for_true , else : result_for_false ;

$number = 1;

echo ($number == 1) ? "Number is 1" : "Number is not 1";


// * 6. Increment Operators

// ^ 1. ++$a ==> Pre-increment

echo "<br> The value of a is " . $a ." and the value of ++a is " .++$a ;

// ^ 2. $a++ ==> Post-increment

echo "<br> The value of a is " . $a ." and the value of a++ is " .$a++ ;

// ^ 3. --$a ==> Pre-decrement

echo "<br> The value of a is " . $a ." and the value of --a is " .--$a ;

// ^ 4. $a-- ==> Post-increment

echo "<br> The value of a is " . $a ." and the value of a-- is " .$a-- ;




?>