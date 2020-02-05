<?php

$klas = readline("Wie zit er in de klas?" . PHP_EOL);


$klasgenoten = array();



for ($i = 0; $i <= $klas; $i++) {

    array_push($klasgenoten, $klas);
}

foreach ($klasgenoten as $v) {
    echo "de studenten in de klas zijn:";
    $studentenlijst =  $v;
    $result = explode(" ", $studentenlijst);
}

print_r($result);
echo ($result);
