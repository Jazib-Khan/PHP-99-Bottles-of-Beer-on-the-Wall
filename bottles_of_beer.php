<?php
    
    $bottles = 99;

    for ($i = $bottles; $i > 0; $i--) {
        echo "$i bottles of beer on the wall, $i bottles of beer.<br>";
        echo "Take one down and pass it around, " . ($i - 1) . " bottles of beer on the wall.<br><br>";
    }

    if ($i == 0) {
        echo "No more bottles of beer on the wall, no more bottles of beer.<br>";
        echo "Go to the store and buy some more, $bottles bottles of beer on the wall.";
    }


?>