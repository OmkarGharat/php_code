<h1> Functions loop in PHP </h1>

<?php

    

    function sum() {

        $total = 0;

        for ($i=0; $i < 101; $i++) { 
            $total += $i;
           
        }
        echo "The sum of 1 to 100 numbers is $total";
        return $total;

    }

    sum();
    
?>

<?php
    

    // * Default Argument

    function mult($a , $b = 5){ // ^ default value

        $result = $a * $b;
        return $result;
        
    }

    mult(4 , 5); // 4 * 5 = 20 , returns 20 

    mult(8); // 8 * 5 = 40 , returns 40 , because we had already set default value of $b = 5 . 

?>