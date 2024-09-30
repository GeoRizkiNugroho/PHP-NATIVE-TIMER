<?php

for ($i = 5; $i <= 50; $i += 5) {

    if (strpos((string)$i, 0) === false) {

        $perkalian = $i / 5;
        echo "5 x $perkalian = $i";
        echo "<br>";
    }
}

?>
        