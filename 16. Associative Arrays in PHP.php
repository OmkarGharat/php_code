<hr>
<h2>Associative Arrays in PHP </h2>
<h4>here , we use "key" to get the "value" of that "key"</h4> 
<hr>

<?php

    // Associative Arrays : 

    $friends = array("rutuja" => 'MC college' , "rishika" => 'Mithibai college' , "1" => 'Omkar');

    echo "$friends[rutuja] <br>";
    echo "$friends[rishika] <br>";
    echo "$friends[1] <br>";
    echo "<hr />";

    // looping Associative Array : 

    foreach ($friends as $key => $value) {
       echo "$key is from  $value <br>";
    }
?>