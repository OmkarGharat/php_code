<hr>
<h2>Multi-Dimensional Arrays in PHP </h2>
<hr>

<?php

$a = 2;
$b = 3;

function local_variables()
{

    // ** Local variables

    // $a = 5 ;
    // $b = 6;

    // ** Accessing global variables

    // global $a, $b; // a = 2 , b = 3 ;

    // ** changing values of local variables 

    // ^ Note : if you define values of local variables without global keyword , then it will change the values of local variables only .

    //    $a = 10;
    //    $b = 11;

    //  ** changing values of global variables by defining inside a function 

    // ^ Note : if you define values of global variables with global keyword , then it will change the values of local variables and global variables.

    global $a, $b;
    $a = 10;
    $b = 11;


    echo "Local Variables : a = $a , b = $b <hr>";
}

echo "Global variables : a = $a , b = $b";
echo "<br> <hr>";
local_variables();
echo "Global variables : a = $a , b = $b";
echo "<br> <hr>";


// * All the global variables in Php are stored in an array named $GLOBALS[index]. Where the index is the name of the variable

echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);

?>
