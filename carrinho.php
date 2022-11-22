<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Carrinho de compras</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="basecarrinho.css">
        <div class="container">
        <div class="row">
            <div class="col-md-3 nomepagina">
                <div class="tela">
                    <img src="logo.projeto.png"  width="280" height="260">
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <center><h1>Carrinho de compras</h1></center>
                    <br>
                    <div class="cupom">
                        <form>
                            <label for="textodesconto"><h4>Cupom de Desconto</h4></label>
                            <p></p>
                            <input type="text"id="textodesconto" required minlength="3" maxlength="9">
                            <p></p>
                            <div class="botaoaplicar"><a href="#" class="btn">Aplicar</a>  </div>
                        </form>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <p></p>
        <style type="text/css">
            *{margin: 0;padding: 0;box-sizing: border-box;}
            h2.title{
                background-color: #069;
                width:100%;
                padding:20px;
                text-align: center;
                color:white;
            }
            .carrinho-container{
                display: flex;
                margin-top: 10px;
            }
            .produto{
                width: 33.3%;
                padding: 0 30px;
            }
            .produto img{
                max-width: 100%;
            }
            .produto a{
                display: block;
                width: 100%;
                padding: 10px;
                color: white;
                background-color: #65B1E8;
                text-align: center;
                text-decoration: none;
            }
            .carrinho-item{
                max-width: 1200px;
                margin: 10px auto;
                padding-bottom: 10px;
                border-bottom: 2px dotted #ccc;
                text-align: center;
            }
            .carrinho-item p{
                font-size: 19px;
                color: black;
            }
            
        </style>
    </head>
<body>
    <h2 class="title">Produtos</h2>
    <div class="carrinho-container">
<?php

    $items = array(
        ['nome'=>'Camiseta Italia','imagem'=>'italia.jpg','preco'=>'250'],
        ['nome'=>'Camiseta Palmeiras','imagem'=>'palmeiras.jpg','preco'=>'160'],
        ['nome'=>'Camiseta São Paulo','imagem'=>'saopaulo.jpg','preco'=>'195']);

    foreach ($items as $key => $value) {

?>
    <div class="produto">
        <img src="<?php echo $value['imagem'] ?>"/>
        <a href="?adicionar=<?php echo $key?>">Adicionar</a>
    </div><!--produto-->

<?php
}
?>
    </div><!--div do carrinho container-->
    <?php

        if(isset($_GET['adicionar'])){
            //adicionar ao carrinho.
            $idProduto = (int) $_GET['adicionar'];
            if(isset($items[$idProduto])){
                if(isset($_SESSION['carrinho'][$idProduto])){
                    $_SESSION['carrinho'][$idProduto]['quantidade']++;
                }else{
                    $_SESSION['carrinho'][$idProduto] = array('quantidade'=>0,'nome'=>$items[$idProduto]['nome'], 'preco'=>$items[$idProduto]['preco']);
                }//quantidade 0 ou 1?
                echo '<script>alert("O item foi adicionado ao carrinho.");</script>';
            }else{
                die('Você não pode adicionar um produto que não existe.');
            }
        }
    ?>
    <h2 class="title">Carrinho</h2>