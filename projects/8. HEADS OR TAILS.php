<h1>HEADS or TAILS</h1>

<?php
    
    // You need to generate a random number between 1 and 2.

    // If the random number is 1 then echo "Heads, I win!".

    // If the random number is 2 then echo "Tails, you win!".

    $heads = 0;
    $tails = 0;

    
    for ($i=1; $i <= 100 ; $i++) { 
        
        $randomNumber = rand(1, 2);
        if($randomNumber == 1){

            $heads++;            
    
        }else{
    
            $tails++;            
    
        }
    }

    echo "<h1>There were $heads heads and $tails tails</h1>";

    if ($heads > $tails){

        echo "<h2> Heads, I win! </h2>";

    }else if ($heads < $tails){

        echo "<h2> Tails, you win! </h2>";

    }else{

        echo "<h2> It's a Draw ! Play Again! </h2>";

    }
   


?>