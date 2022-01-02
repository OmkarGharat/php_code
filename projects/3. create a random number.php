<h1>Create a Random Number</h1>
<hr>

<?php
    
// ^ rand();

// ! This is a inbuilt function and it is used to generate random numbers.

// ! It gives random number till 2 raised to power 32

$random = rand();
echo "<h2> Random Number = " . $random . "</h2>";

echo "<hr>";

// * customize random number : 

// ! syntax : 

// ^ rand(min_number , max_number);

// ! both min_number and max_number are included

$myrandomNumber = rand(1,100);
echo "<h2> My Random Number = " . $myrandomNumber . "</h2>";

// ! it wil gives random numbers between 1 to 100

?>