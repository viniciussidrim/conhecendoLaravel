<?php

namespace App\Http\Controllers;

class funcionalidades{

public function index(){
    echo "Resultados";
    return;
}

public function nome_times(){

    $qnt_jogos = 6;

    $times = [
        'ABC' => 0,
        'VITORIA' => 0,
        'FIGUEIRENSE' => 0,
        'PAYSANDU' => 0,
    ];

    $venceu = 3;
    $empatou = 1;
    $perdeu = 0;

    $primeiro_time = $times['ABC'];
    $segundo_time = $times['VITORIA'];
    $primeiro_valor = 1;
    $segundo_valor = 4;
    //abc 2 x 1 vitoria 

    if($primeiro_valor > $segundo_valor){
        $primeiro_time = $primeiro_time + $venceu;
    }elseif($primeiro_valor == $segundo_valor){
        $primeiro_time = $primeiro_time + $empatou;
        $segundo_time = $segundo_time + $empatou;
    }else{
        $segundo_time = $segundo_time + $venceu;
    }

    var_dump($primeiro_time);
    var_dump($segundo_time);

}

public function teste(){
    echo "Deu certo funcao teste";
    return;
}

}
