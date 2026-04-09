<?php

$conteudo = file_get_contents("usuarios.json");
$dados = json_decode($conteudo, true);


foreach ($dados['usuarios'] as $u) {
    echo "nome: " . $u['nome'] . " - email: " . $u['email']. "<br/>";
}

?>