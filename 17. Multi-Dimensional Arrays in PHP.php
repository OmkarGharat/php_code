<hr>
<h2>Multi-Dimensional Arrays in PHP </h2>
<hr>

<?php

    // Note : if there are "n" arrays inside a "big array" , then the dimention of "big array" is "n - 1"

    // 2 dimentional array
    
    $multiDim = array(

        array(1,2,3),
        array(4,5,6),
        array(7,8,9)

    );

    // print array using nested for loop

    for ($i=0; $i < count($multiDim); $i++) { 
        for ($j=0; $j < count($multiDim[$i]); $j++) { 
            echo $multiDim[$i][$j];
            echo " ";
        }
        echo "<br>";
    }


?>