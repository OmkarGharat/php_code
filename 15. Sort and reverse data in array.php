<h1>Sort and Reverse data in Array</h1>
<hr>

<?php
    
    $students = array('Omkar' , 'Amruta' , 'Taara' , 'Divya' , 'Rohit');

    // echo sort($students); // ! returns boolean value indicating that wheather the sorting is done or not

    sort($students); // ^ sorts data in alphabetical order 
                    // ^ i.e. from "a" to "z" or "A" to "Z"

    rsort($students); // ^ sorts data in reverse alphabetical order 
                     // ^ i.e. from "z" to "a" or "Z" to "A"

    foreach ($students as $names) {

        echo "<pre> <h2> $names </h2>" ;
    }

?>