<?php
/*
    Desafio:
        Descreva como foi o seu dia utilizando o máximo de recursos possíveis.
*/
$horarios = array(
    'total_horas_dia'       => 24,
    'hora_de_dormir'        => 24,
    'hora_do_almoco'        => 12.75,
    'hora_do_jantar'        => 22.75,
    'ini_periodo_util_manha' => 8,
    'fim_periodo_util_manha' => 12.5,
    'ini_periodo_util_tarde' => 14,
    'fim_periodo_util_tarde' => 18,
    'ini_dev_play'          => 19,
    'fim_dev_play'          => 22.5
);

$acoes = array(
    'periodo_manha'      => array(
        'levantando'     => array(
            'ini'        => $horarios['ini_periodo_util_manha'],
            'fim'        => 8.25,
            'status'     => false 
        ),
        'tomando_banho'  => array(
            'ini'        => 8.25,
            'fim'        => 8.5,
            'status'     => false 
        ),
        'cuidando_do_cao'=> array(
            'ini'        => 8.45,
            'fim'        => 9,
            'status'     => false 
        ),
        'trabalhando'    => array(
            'ini'        => 9,
            'fim'        => $horarios['fim_periodo_util_manha'],
            'status'     => false 
        ),
        'tocando_guitarra' => array(
            'ini'          => 12.75,
            'fim'          => $horarios['hora_do_almoco'],
            'status'       => false 
        ),
        'almocando'      => array(
            'ini'        => $horarios['hora_do_almoco'],
            'fim'        => 13.5,
            'status'     => false 
        ),
        'relaxando' => array(
            'ini'        => 13.5,
            'fim'        => $horarios['ini_periodo_util_tarde'],
            'status'     => false 
        ),
    ),
    'periodo_tarde'      => array(
        'trabalhando'      => array(
            'ini'        => $horarios['ini_periodo_util_tarde'],
            'fim'        => $horarios['fim_periodo_util_tarde'],
            'status'     => false 
        ),
        'relaxando'          => array(
            'ini'        => $horarios['fim_periodo_util_tarde'],
            'fim'        => $horarios['ini_dev_play'],
            'status'     => false 
        )
    ),
    'periodo_noite'      => array(
        'no_dev_play'    => array(
            'ini'        => $horarios['ini_dev_play'],
            'fim'        => $horarios['fim_dev_play'],
            'status'     => false 
        ),
        'jantando'         => array(
            'ini'        => $horarios['hora_do_jantar'],
            'fim'        => 23.5,
            'status'     => false 
        ),
        'dormindo' => array(
            'ini'        => $horarios['hora_de_dormir'],
            'fim'        => $horarios['ini_periodo_util_manha'],
            'status'     => false 
        )
    )    
);

/*echo '<pre>';
echo 'Minhas configurações de horários <br />';
print_r($horarios);
echo'</pre>';

echo '<pre>';
echo 'Minhas ações durante o dia <br />';
print_r($acoes);
echo'</pre>';*/

$tempo = 0;
while($tempo <= $horarios['total_horas_dia']){
    $periodo = '';

    if($tempo >= $horarios['ini_periodo_util_manha'] && $tempo <= $horarios['fim_periodo_util_manha']) $periodo = 'periodo_manha';
    if($tempo >= $horarios['ini_periodo_util_tarde'] && $tempo <= $horarios['fim_periodo_util_tarde'] || ($tempo >= $horarios['hora_do_almoco'] && $tempo < $horarios['ini_periodo_util_tarde'])) $periodo = 'periodo_tarde';
    if($tempo > $horarios['fim_periodo_util_tarde'] || $tempo < $horarios['ini_periodo_util_manha']) $periodo = 'periodo_noite';
    
    foreach ($acoes[$periodo] as $key => $value) {

        $texto_padrao = 'Às '.$tempo.'horas eu estou '.$key.'<br />';

        if($tempo >= $value['ini'] && $tempo <= $value['fim'] && $key != 'dormindo'){
            echo $texto_padrao;
        }else if(($key == 'dormindo' && $tempo >= $horarios['hora_de_dormir']) || ($key == 'dormindo' && $tempo < $horarios['ini_periodo_util_manha'])){
            echo $texto_padrao;
        }
    }

    $tempo = $tempo + 0.25;
}

?>