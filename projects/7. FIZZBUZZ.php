<h1>FIZZBUZZ Program in PHP</h1>

<?php
    // ! The FizzBuzz problem is a classic test given in coding interviews. 
    
    // The task is simple: Print integers 1 to N, but 

    // if an integer is divisible by 3, print  “Fizz”  

    // if an integer is divisible by 5, print “Buzz”  

    // if an integer is divisible by both 3 and 5 , print “FizzBuzz”

?>

<?php
    
    // * FIZZBUZZ code : 

    for ($i=1; $i < 101; $i++) { 
        
        if($i%3==0 && $i%5==0){

            echo "FizzBuzz <br>";

        }elseif ($i%5==0) {
            
            echo "Buzz <br>";

        }elseif ($i%3==0) {

            echo "Fizz <br>";

        }else{
            echo "$i <br>";
        }


        

    }


?>