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