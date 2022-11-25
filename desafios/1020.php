<?php

// converter um número inteiro em anos, meses e dias.

echo "Digite um número para ser convertido em anos, meses e dias: ";
$number = trim(fgets(STDIN));

// número dividido por 365 igual a ano(os).
$year = $number / 365;

// pegar resto da divisão do número por 365.
$year_modulo = $number % 365;

// para ter o número de meses, dividir por 30 a sobra da divisão do número por 365.
$month = $year_modulo / 30;

// pegar a sobra da abstração do número de meses.
$month_modulo = $year_modulo % 30;

// pegar sobra da divisão pra encontrar o número de meses.
$days = $month_modulo % 30;

echo "\nSeu número corresponde a ".(int)$year." ano(os), ".(int)$month." mês(es) e $days dia(s)";

?>