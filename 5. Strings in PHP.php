<?php
      $MyName = 'Omkar';
      $words = 'Lorem ipsum dolor sit amet consectetur adipisicing elit . Id asperiores accusamus nihil consequatur tenetur, vel, architecto molestias odit animi voluptatibus corporis commodi! Est veniam provident ab laudantium quae possimus dolorem!';
      echo $MyName;
      $My_friend_name = 'Shree';

      echo "<br>";
      echo "The length of $MyName is " . strlen($MyName);

      // "strlen" counts the length of the value of the variable

      // "." is the concatination operator which is used to combine two string values to create one string. 

      echo "<br>";
      echo "The reverse name of Omkar is " .strrev($MyName); // rakmO

      // "strrev" ==> reverses the name

      echo "<br>";
      echo "Total words = ". str_word_count($words);

      // "str_word_count" ==> counts the total number of words stored in a variable

      echo "<br>";
      echo str_replace('Omkar' , 'Shree', $MyName);

      // "str_replace" — Replace all occurrences of the search string with the replacement string

      // 1st argument is the जो replace  करायचा आहे 

      // 2nd  argument is the ज्याच्या बरोबर replace करायचा आहे 

      // 3rd  argument is the ज्या variable मध्ये replace करायचा आहे 

      echo "<br>";
      echo "The word is found at ";
      echo strpos($words , 'ipsum');
      echo "th position";

      // "strpos" ==> returns the position of the word

      echo "<br>";
      echo "We will repeat the $MyName word 10 times as follows : ";
      echo str_repeat($MyName, 10);

      // "str_repeat" ==> it takes 2 arguments i.e. string and int and returns the "int" number of times "string"

      echo "<br>";
      echo "<pre>";
      echo rtrim("       remove spaces from right         ");
      echo "<br>";
      echo ltrim("       remove spaces from left         ");
      echo "</pre>"

      // rtrim ==> remove spaces from right

      // ltrim ==> remove spaces from left

      // <pre> ==> used to give multiple spaces . If you give give multiple space and didn't use <pre> tag  , then html will consider it as a single space.
      


?>
