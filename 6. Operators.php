<?php

      /* Operators in PHP

      1. Arithmetic Operators
      2. Assignment Operators
      3. Comparison Operators 
      4. Logical Operators

*/

$a = 2;
$b = 3;

// 1. Arithmetic Operators : 

echo "a+b = ". ($a+$b) . "<br>";
echo "a-b = ". ($a-$b) . "<br>";
echo "a*b = ". ($a*$b) . "<br>";
echo "a/b = ". ($a/$b) . "<br>";
echo "a%b = ". ($a%$b) . "<br>";
echo "a**b = ". ($a**$b) . "<br>";

// 2. Assignment Operators : 

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

// 3. Comparison Operators : 

echo "a > b ==> " . var_dump($a > $b) . "<br>";
echo "a < b ==> " . var_dump($a < $b) . "<br>";
echo "a >= b ==> " . var_dump($a >= $b) . "<br>";
echo "a <= b ==> " . var_dump($a <= $b) . "<br>";
echo "a <> b ==> " . var_dump($a <> $b) . "<br>";

// 4. Logical Operators

$m = true;
$n = true;

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



?>