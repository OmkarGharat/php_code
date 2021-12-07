<!-- * Variables in php *  -->

<!-- Rules for PHP variables:

1. A variable starts with the "$" sign, followed by the name of the variable
2. A variable name must start with a letter or the underscore character
3. A variable name cannot start with a number
4. A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
5. Variable names are case-sensitive ($age and $AGE are two different variables) 
-->

<!-- Notes : 

1. for echo  , you must use only double quotes ("") . You cannot use single quotes (""). 

for eg. 

$name = 'Omkar';
echo "$name" // returns Omkar
echo '$name' // returns $name


2. After creating variable , you must put a semicolon (;) at the end of variable , otherwise it will throw an error. 

3. you can use html tags inside double quotes of echo , but the only thing is that , you will not get any suggestions from vscode
-->

<?php
      
      $name = 'Omkar';
      $income = '2000000';
      $floatValue = '108.79';

      echo "My name is $name and my income is Rs. $income / year <br>";

      // echo "Floating point number is $floatValue";
      echo "Floating point number is $floatValue";

?>