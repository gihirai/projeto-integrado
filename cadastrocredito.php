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
        include "conectabanco.php";
        $nome_completo = $_POST['nome_completo'];
        $numero_cartao = $_POST['numero_cartao'];
        $cvv = $_POST['cvv'];
        $banco = "INSERT INTO cliente (nome_completo, numero_cartao, cvv) VALUES ('$nome_completo', '$numero_cartao', '$cvv)";
        $result = pg_query($banco);
        if( $result == 6){
            echo 'Compra realizada com sucesso! :)';
        } else {
            echo 'Falha ao realizar a compra! :(';
        }
    
    ?>
    </body>
    </html>
</body>
</html>