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
include 'conecta.banco';
$codigo = $_POST['codigo'];
$cpf = $_POST['cpf'];
$veiculo = $_POST['habilitacao'];
$status = $_POST['status'];
$banco = "INSERT INTO entregador (codigo, cpf, veiculo, habilitacao, nome, 'status' ) values ('codigo', 'cpf', 'veiculo', 'nome', 'status')";
$result = pg_query($banco);
?>

</body>
</html>