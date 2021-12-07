<h1> Switch case in PHP </h1>
<?php

      $age = 18;
      
      switch ($age) {
            case '17':
                  echo"You're a teenager";
                  break;
            case '18':
                  echo"You're an Adult";
                  break;
            case '60':
                  echo"You're an old man";
                  break;
            
            default:
                  echo"You're a Human Being";
                  break;

            // if all "case" are false , then "default" eill be executed
      }

?>