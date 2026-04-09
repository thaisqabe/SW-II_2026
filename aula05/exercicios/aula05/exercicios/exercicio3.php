<?php

$conteudo = file_get_contents("produtos.json");
$dados = json_decode($conteudo, true);


$produtoNovo= [
    "nome" => "Mouse",
    "preco"=> 56.90,
    "quantidade" => 23
];

$dados['produtos'][] = $produtoNovo;


    $json = json_encode($dados, JSON_PRETTY_PRINT);




    file_put_contents("produtos.json", $json);


?>