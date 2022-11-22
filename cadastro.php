<?php
    include 'conectabanco.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $banco = "INSERT INTO cliente (cpf, nome, endereco, senha, telefone, email) VALUES ('$cpf','$nome', '$endereco', '$senha', '$telefone', '$email')";
     $result = pg_query($banco);

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
    

     if( $result == 6){
        echo 'Cliente cadastrado com sucesso! :)';
    } else {
        echo 'Falha ao cadastrar cliente! :(';
    }

    /*R1*/
    $padrao = "/^[a-z A-Z 0-9\.\_]{3,}[@][a-z A-Z 0-9]{3,}.(com|com.br|edu.br)$/";
    $resultado = preg_match($padrao,$email);
    if($resultado != true){
        echo"Email não encontrado";
        return;
    }

    /*R2
     ^[a-z A-Z 0-9\.\_\@]{10,}$
     header (location: "http://localhost/telacadastro1/login.php") */
    

    ?>