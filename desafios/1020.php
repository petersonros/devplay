<?php

// converter um número inteiro em anos, meses e dias.

echo "Digite um número para ser convertido em anos, meses e dias: ";
$number = trim(fgets(STDIN));

$year = $number / 365;

$year_modulo = $number % 365;

$month = $year_modulo / 30;

$days = $number % 30;

echo "\nSeu número corresponde a ".(int)$year." anos, ".(int)$month." meses e $days dias";

?>