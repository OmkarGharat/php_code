<h1>Count Number of words in a string</h1>
<hr>

<?php
    
    $words = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eum accusantium tempora sequi est similique.";

    $count_words = str_word_count($words);

    echo "<h4>$words</h4>";
    echo "<h2> $count_words </h2>";

?>