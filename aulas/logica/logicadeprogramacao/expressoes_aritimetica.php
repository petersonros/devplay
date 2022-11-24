<?php

// Expressões Aritiméticas : 
$numero1 = 1;
$numero2 = 2;
echo "Numero 1 : " . $numero1;
echo "<br>";
echo "Numero 2 : " . $numero2;
echo "<br>";

/*

    + adicao
    - subtracao
    * multiplicacao
    / divisao
    ^ exponenciacao
    % resto de divisão

*/

echo "Adição : <br>";
echo $numero1 + $numero2;

echo "<br> Subtração : <br>";
echo $numero1 - $numero2;

echo "<br> Multiplicação : <br>";
echo $numero1 * $numero2;

echo "<br> Divisão : <br>";
echo $numero1 / $numero2;

echo "<br> Exponenciação : <br>";
echo $numero1 ^ $numero2;

echo "<br> Resto de Divisão : <br>";
echo $numero1 % $numero2;


$calculo_adicao        = $numero1 + $numero2;
$calculo_multiplicacao = $numero1 * $numero2;
echo "<br>";
echo $calculo_adicao." ".$calculo_multiplicacao;

//quanto é 10% de 100

$total      = 100;
$percentual = 10;
$calculo_porcentagem = $total / 100 * $percentual;

echo "<br>";
echo $percentual."% de ".$total." é igual a ".$calculo_porcentagem; 
echo "<br>";
echo "Forma Padronizada pelo PHP ( Preguiçosa ) : {$total} / 100 * {$percentual}"; 


?>