<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <?php
    include 'conectabanco.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $banco = "INSERT INTO cliente (nome, email, senha) VALUES ('$nome','$email', '$senha')";
    $result = pg_query($banco);
    if( $result == 6){
        echo 'Usuário logado com sucesso! :)';
    } else {
        echo 'Falha de login do Usuário! :(';
    }
    

    function criptografia($value) {

        $senhav=['A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z, a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, !, @, #, $, %, &, *, +, =, -, [, ], {, }, ~, ^, ?, /, ;, :, "'];

        $senhaf=['E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z, A, B, C, D, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z, a, b, c, d, 6, 7, 8, 9, 0, 1, 2, 3, 4, 5, !, @, #, $, !, @, #, $, %, &, *, +, =, -, [, ], {, }, ~, ^, ?, /, :, ;'];
    
       $armazenaarray= array();

        $senhas=str_split($value);
        foreach($senhas as $value){
            $senha= array_search($value, $senhav);
            array_push($armazenaarray, $senhaf[$senha]);
        }
        return implode($armazenaarray);
    }
    ?>

   
</body>
</html>