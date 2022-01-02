<h1>Implode and Explode function</h1>
<hr>

<?php
    
    // * Implode function : 

    // The Implode function is used to join elements of an array with a string

    // converts "array to string" 

    // Syntax : 

    // implode(separator,array);

    // separator ==> Specifies what to put between the array elements. Default is "" (an empty string)

    // array ==> The array to join to a string

    $arr = array("Ab de villiers" , "Baseball" , "Cricket" , "Dog");

    $imploade_function = implode(" ", $arr);

    echo "<pre>";
    print_r($arr);
    print_r($imploade_function);
    echo "<hr>";

    // * Exploade function : 

    // The Exploade function is used to split a string by a specific string into pieces 

    // converts "string to array" 

    // Syntax :

    // explode(separator,string,limit);

    // separator ==> Specifies where to break the string

    // string ==> The string to split

    // limit ==> Optional. Specifies the number of array elements to return.
    // i.e. if we write 2 , then whole string is split into two array elements.

    $myString = "lorem Ipsum dolor sit amet, con et ullamcorper lob";

    $exploade_function = explode(" ", $myString);

    echo "<pre>";
    print_r($myString);
    print_r($exploade_function);
    echo "<hr>";







?>

