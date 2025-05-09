<?php
$linguagens = array('PHP', 'JavaScript', 'Python');

print_r($linguagens);

foreach ($linguagens as $linguagens) {
        echo " $linguagens ";
        if ($linguagens == 'mesa') {
            echo "(linguagem: <nome>)";

        }
        echo '<br />';
    }

?>