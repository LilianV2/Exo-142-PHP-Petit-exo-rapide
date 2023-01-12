<?php

echo "je suis un super texte <br>";

$t = "je suis un super texte 2";
echo $t;

$array = ["un","deux","trois","quatre"];
echo $array[1];

?>
<ul>
    <?php
    foreach ($array as $item) {
        echo $item . "<br>";
    }
    ?>
</ul>
