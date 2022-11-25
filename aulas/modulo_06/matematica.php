<?php

echo "1. Digite um número: ";
$numero1 = trim(fgets(STDIN));

echo "2. Digite outro número: ";
$numero2 = trim(fgets(STDIN));

// SOMA:            +
// SUBTRAÇÃO:       -
// MULTIPLICAÇÃO    *
// DIVISÃO          /
// MÓDULO           %
// EXPONENCIAL      **

echo "\nA soma dos números informados é: " .                $numero1 + $numero2;
echo "\nA diferença dos números informados é: " .           $numero1 - $numero2;
echo "\nA multiplicação dos números informados é: " .       $numero1 * $numero2;
echo "\nA divisão dos números informados é: " .             $numero1 / $numero2;
echo "\nO módulo dos números informados é: " .              $numero1 % $numero2;
echo "\nO exponencial dos números informados é: " .         $numero1 ** $numero2;
echo "\n";

die;