<?php

// ^ 2. Difference between Single Quotes and Double Quotes in PHP ? 

Ans:

// * 1. Single-quoted Strings: 

// It is the easiest way to define a string. You can use it when you want the string to be exactly as it is written. All the escape sequences like \r or \n, will be output as specified instead of having any special meaning. Single-quote is usually faster in some cases. The special case is that if you to display a literal single-quote, escape it with a backslash (\) and if you want to display a backslash, you can escape it with another backslash (\\).

// ____________________________________________________________________________

// ! A simple string

echo 'I am a geek. '; // * I am a geek.

// ____________________________________________________________________________

// ! use of back-slash to display string with apostrophe

echo 'It\'ll be interesting to know about the string. ';
// * It'll be interesting to know about the string. 

// ____________________________________________________________________________

// ! to escape the backslash within the string

echo 'A \\ is named as backslash. '; // * A \ is named as backslash. 
// ____________________________________________________________________________

// ! The variable will not be evaluated if used directly within the             single-quoted string

$string = 'geeks';
echo 'This is a portal for $string. '; // * This is a portal for $string. 

// ____________________________________________________________________________

// ! The \n will be displayed as it is without having any special meaning.

echo 'This is a portal for \n geeks. '; // * This is a portal for \n geeks.

// ____________________________________________________________________________

?>

<?php

// * 2. Double-quoted strings:

// By using Double quotes the PHP code is forced to evaluate the whole string. The main difference between double quotes and single quotes is that by using double quotes, you can include variables directly within the string. It interprets the Escape sequences. Each variable will be replaced by its value.

// ____________________________________________________________________________

// ! A simple string.
echo "I am a geek."; // I am a geek.

// ____________________________________________________________________________

// ! Nothing extra is needed here
echo "It'll be interesting to know about the string.";
// * It'll be interesting to know about the string.

// ____________________________________________________________________________

// ! Variables are included directly
$string = 'ABC';
echo "The word is $string."; // * The word is ABC.

// ____________________________________________________________________________

// NOTE : /n only works if it is used as a simple text but here as we code in a html doc it takes it as a HTML text hence you can use </br> tag instead.


?>

<?php
    header('Content-type: text/plain');
    echo "This is a\nsimple string.";

    // * This is a
    // * simple string.

?>

<?php
    header('Content-type: text/plain');
    echo 'This is a\nsimple string.'; // * This is a\nsimple string.
?>