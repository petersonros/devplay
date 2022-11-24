<?php
//Variaveis
/*
TIPOS DE VARIAVEIS
    STRING        = "TEXTOS (ERA 1 VEZ)" ou 'Texto aqui' ;
    BOOL          = VERDADEIRA( TRUE ou 1 ) E FALSO( FALSE ou 0) 
    INT           = 1,2,3,4,5
    FLOAT, DOUBLE = 1,1 - 2,2 - 1.5
*/
//$nome_da_variavel = 'valor da variavel';
$ingles = "Hello World! <br>";
echo $ingles;
echo "Olá Mundo! <br>";
echo 1;


$variavelStringIgualTexto = "Qualquer tipo de texto";
//Qualquer tipo de texto
echo "<br>";

echo $variavelStringIgualTexto."<br>";

$variavelStringIgualTexto = "Teste";

echo $variavelStringIgualTexto."<br>";
//Teste
$variavelBoleana3         = 0; // 0 == false
echo $variavelStringIgualTexto." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$ingles." ".$variavelBoleana3;
$variavelBoleana3         = 13; // 0 == false
echo $variavelStringIgualTexto." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$ingles." ".$variavelBoleana3;

echo '<br> Forma preguiçosa : '.$variavelStringIgualTexto.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.$ingles.'  '.$variavelBoleana3;

echo "<br> Forma preguiçosa : {$variavelStringIgualTexto} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {$ingles}  {$variavelBoleana3}";

//false
$variavelBoleana          = true;
$variavelBoleana2         = false;
$variavelBoleana4         = 1; // 1 == true
$variavelInt              = 5;
$variavelDouble           = 1.2;


  // === - Exatamente igual

  $numero1 = 9;   // Isso é um inteiro
  $numero2 = '9'; // Isso é uma string

  if($numero1 == $numero2){
      echo "Eles são iguais!";
  }else{
      echo "Eles não são iguais!";
  }




?>