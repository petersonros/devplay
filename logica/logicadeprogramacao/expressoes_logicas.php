<?php

// CONDICIONAIS

/*
    SE       = IF 

    SE(CONDICAO){
        O QUE EU IREI FAZER SE A CONDICAO ACIMA FOR VERDADEIRA
    }

    SENÃO SE = ELSE IF (ELSEIF)
    SENÃO    = ELSE
    
    == (igualdade)
    === (igualdade de conteudo e tipo)
    != (diferença) ou <>
    !  (negaçao)
    > maior
    < menor
    >= maior ou igual
    <= menor ou igual
    &&  ou and
    ||  ou or

    true && true   = true
    true && false  = false
    false && true  = false
    false && false = false

    true  || true  = true
    true  || false = true
    false || true  = true
    false || false = false
    

*/
$idade_marcelo  = 28;
$idade_bruno    = 27;
$idade_jhonatan = 27; 

// Forma 1 

if($idade_marcelo < $idade_bruno){
    echo 'O número '.$idade_marcelo.' é menor que o número '.$idade_bruno;
}
else if($idade_marcelo < $idade_bruno){
    echo 'O número '.$idade_marcelo.' é diferente ao número '.$idade_bruno;
}
else if($idade_marcelo > $idade_bruno && $idade_marcelo < $idade_bruno ||
        $idade_bruno < $idade_marcelo && $idade_jhonatan == $idade_bruno){
    echo 'Executou!!!!!';
    //echo '0 - O número '.$idade_marcelo.' é maior e diferente do número '.$idade_bruno;
}
else if($idade_marcelo > $idade_bruno && $idade_marcelo != $idade_bruno && $idade_bruno < $idade_marcelo){
    echo '0 - O número '.$idade_marcelo.' é maior e diferente do número '.$idade_bruno;
}
else if($idade_marcelo > $idade_bruno || $idade_marcelo == $idade_bruno){
    echo '1 - O número '.$idade_marcelo.' é maior ou igual ao número '.$idade_bruno;
}
else if($idade_marcelo >= $idade_bruno){
    echo '2 - O número '.$idade_marcelo.' é maior ou igual ao número '.$idade_bruno;
}
else if($idade_marcelo <= $idade_bruno){
    echo 'O número '.$idade_marcelo.' é menor ou igual ao número '.$idade_bruno;
}
else{
    echo 'O número'.$idade_marcelo.' NÃO é menor que no número '.$idade_bruno;
}

/*if($var1 > $var2){
    echo 'O número '.$var1.' é maior que o número '.$var2;
}*/
 
// Forma 2



?>