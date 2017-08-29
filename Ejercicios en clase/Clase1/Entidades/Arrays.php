<?php

$array = array(1,"lunes","dos",4,5);
array_push($array, "agustin");
array_push($array, $array);

foreach ($array as $valor) {
    echo '</br> $valor';
}

var_dump($array);
?>
