<h1>Replace words / characters in a string</h1>
<hr>

<?php

// * str_replace(search, replacement , subject)

// ^ NOTE : str_replace() is case sensitive

// search ==> the work which u want to search 

// replacement ==> the work which with want to replace 

// subject ==> the string in which search word is present

$MyString = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eum accusantium tempora sequi est similique.";

$replace_string = str_replace("Lorem", "MyLorem", $MyString);
echo "<br>" . $MyString . "<br>";
echo "$replace_string <br>";
echo "<hr>"

// ^ NOTE : if you search a word that is not in string , then that word will be vanished from string on output screen.

?>

<?php

// * str_ireplace(search, replacement , subject)

// ^ NOTE : str_ireplace() is case insensitive

// search ==> the work which u want to search 

// replacement ==> the work which with want to replace 

// subject ==> the string in which search word is present

$MyString = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";

$Replace_string = str_ireplace("Lorem", "1234", $MyString);

echo "<br>" . $MyString . "<br>";
echo "$Replace_string";

// ^ NOTE : if you search a word that is not in string , then that word will be vanished from string on output screen.

?>