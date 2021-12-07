<h1> if-elseif-else conditions in PHP </h1>

<?php
      $a = 2;
      $b = 3;

      if ($a > $b) {
            echo"a is greater than b <br>";
            echo "$a <br> $b <br>";
            echo"<hr>";
      } else {
            echo"a is less than b";
            echo "$a <br> $b <br>";
            echo"<hr>";
      }
      
?>

<?php
      $a = 25;
      $b = 10;

      if ($a > $b) {
            echo"a is greater than b <br>";
            echo "$a <br> $b <br>";   
            echo"<hr>";        
      } 
      elseif ($a < $b) {
            echo"a is less than b <br>";
            echo "$a <br> $b <br>" ;           
      }
      else{
            echo"a = b";
            echo "$a <br> $b <br>"; 
      }
      
?> 