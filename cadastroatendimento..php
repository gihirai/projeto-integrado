<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   include 'conectabanco.php';
    $avaliacao_produto = $_POST['avaliacao_produto'];
    $avaliacao_loja = $_POST['avaliacao_loja'];
    $comentario= $_POST['comentario'];
    $codigo_produto= $_POST['codigo_produto'];
    $banco = "INSERT INTO cliente (avaliacao_produto, avaliacao_loja, comentario, codigo_pedido) VALUES ('$avaliacao_produto','$avaliacao_loja', '$comentario', '$codigo_produto')";
    $result = pg_query($banco);
    if( $result == 6){
        echo 'Sugestão enviada com sucesso! :)';
    } else {
        echo 'Falha ao cadastrar cliente, tente novamente! :(';
    }
    ?>
</body>
</html>
