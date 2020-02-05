<?php


echo ("Wie zit er in de klas?" . "\n");


if (is_numeric($klas)) {
    echo ("Dit is geen naam");
    exit;
}

$r = explode(" ", readline());


foreach ($r as $klas) {
    echo ($klas . PHP_EOL);
}
