<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 4</title>
</head>

<body>
    <form action="" method="get">
        <p>Digite um email: <input type="email" name="cxemail" id=""></p>
        <input type="submit" value="Enviar">
    </form>

</body>


<?php



if (isset($_GET['cxemail'])) {

    $email = $_GET['cxemail'];


    if ($email == "") {
        echo "Campo de email está em branco!";
    } else {

        $conteudo = file_get_contents("usuarios.json");
        $dados = json_decode($conteudo, true);

        $encontrado = false;

        foreach ($dados['usuarios'] as $u) {
            if ($u['email'] == $email) {
                echo "O usuário deste email é: " . $u['nome'] . " - email: " . $u['email'];
                $encontrado = true;
                break;
            };
        };

        if (!$encontrado) { #se nao encontrou o usuario
            echo "Usuário não encontrado!";
        }
    }
}
?>

</html>