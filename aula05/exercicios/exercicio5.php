<?php

$conteudo = file_get_contents("produtos.json");
$dados = json_decode($conteudo, true);

$nome = "Canivete";

foreach ($dados['produtos'] as $index => $p) {
    if($p['nome'] == $nome){
        unset($dados['produtos'][$index]);
    }

};


    $json = json_encode($dados, JSON_PRETTY_PRINT);

    file_put_contents("produtos.json", $json);