<?php

$klas = readline("Wie zit er in de klas?" . PHP_EOL);


$klasgenoten = array();


// echo "de studenten in de klas zijn:" . PHP_EOL . $klasgenoten;

for ($i = 0; $i <= $klas; $i++) {

    array_push($klasgenoten, $klas);
    // echo ($klasgenoten);
}

foreach ($klasgenoten as $v) {
    echo "de studenten in de klas zijn:";
    $studentenlijst =  $v;
    $result = explode(" ", $studentenlijst);
}

print_r($result);
