<?php 

error_reporting(0);

# Receita de bolo DevPlay
# Precisamos fazer um bolo. Para isso:  
# Ter os ingredientes deste bolo, 
# A temperatura do bolo 180
# O tempo de cozimento da massa  40min

/* 
    Receita retirada no endereço: https://www.tudogostoso.com.br/receita/29124-bolo-simples.html
*/

$ingredientes    = array();
$ingredientes[0] = 'xícaras (chá) de açúcar';
$ingredientes[1] = 'xícaras (chá) de farinha de trigo';
$ingredientes[2] = 'colheres (sopa) de margarina';
$ingredientes[3] = 'Ovo';
$ingredientes[4] = 'xícara (chá) de leite';
$ingredientes[5] = 'fermento em pó';

$temperatura = 180;
$tempo       = 40;
$contador    = 0;
$bolo        = array();
$bolo_pronto = false;
while($contador < count($ingredientes)){

    switch ($ingredientes[$contador]) {
        case 'xícaras (chá) de açúcar':
            $bolo[$contador] = '2 '.$ingredientes[$contador];
            break;
        case 'xícaras (chá) de farinha de trigo':
            $bolo[$contador] = '3 '.$ingredientes[$contador];
            break;
        case 'colheres (sopa) de margarina':
            $bolo[$contador] = '4 '.$ingredientes[$contador];
            break;
        case 'Ovos':
            $bolo[$contador] = '3 '.$ingredientes[$contador];
            break;
        case 'xícara (chá) de leite':
            $bolo[$contador] = '1 e 1/2 '.$ingredientes[$contador];
            break;        
        default:
            $bolo[$contador] = '1 '.$ingredientes[$contador];
            break;
    }

    $contador++;
}

if(count($bolo) == count($ingredientes)){
    echo 'Preparando o bolo <br />';

    foreach($bolo as $indice => $qtdIngrediente){
        echo $qtdIngrediente;
        echo "<br/>"; 
    }

    for($i = 0; $i <= $temperatura; $i++){
        if($i == $temperatura){

            echo "TEMPERATURA IDEAL {$i}º C <br />";

            //sleep($tempo);

            $bolo_pronto = true;
        }
        else{
            echo "O bolo já está no forno com a temperatura {$i}º C <br />";
        }
    }
}

echo $bolo_pronto ? 'O bolo está pronto' : 'Algo de errado aconteceu com o bolo';

