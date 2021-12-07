<h1>Date function in PHP</h1>

<!-- for more information please visit 

https://www.php.net/manual/en/datetime.format.php  

and then scroll down to get the table of full form-->

<?php
    $date_fun = date("d-m-Y l H:i:s");
    echo "$date_fun";

    // d ==> Day of the month, 2 digits with leading zeros
    // m ==> month number
    // Y ==> A full numeric representation of a year, 4 digits
    // y ==> A two digit representation of a year
    // F ==> A full textual  representation of a month


    // h ==> 12-hour format of an hour with leading zeros
    // H ==> 24-hour format of an hour with leading zeros
    // i ==> Minutes with leading zeros
    // s ==> Seconds with leading zeros
    // l (small एल ) ==> A full textual representation of the day of the week 
    // a ==> Lowercase Ante meridiem (am) and Post meridiem (pm)
    // A ==> Uppercase Ante meridiem (AM) and Post meridiem (PM)
?>