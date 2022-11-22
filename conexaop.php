<?php
$endereco = 'localhost';
$banco = 'projetointegrado';
$usuario = 'postgres';
$senha = '1234';
 
try {
 
    $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
} catch (PDOException $e) {
 
}
 
?>
