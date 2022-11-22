
<?php
    require_once 'conexaop.php';
    $result_produtos = "SELECT * FROM produto";
    $resultado_produtos = $pdo->query($result_produtos);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="baseproodutos.css">
</head>
<body>
        <!--
            Topo do site
        -->
    <div class="Topo">
        <div id='rectangle2' class='rectangle2'>
            <div id='ellipse' class='ellipse'>
            </div>
                <div class="logo" id="logo">
                    <img src="https://i.postimg.cc/bwrjWSjs/logo.png" alt="" width="6%">
                </div>
                <div id='rectangle3' class='rectangle3'></div>
        </div>
    </div>
        <!--
            Produtos
        -->
        <div class="Grade">
        <div class="Fundo"></div>
            <?php
            while($rows_produto = $resultado_produtos->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="thumbnail" id="thumbnail">
                    <img src="<?php echo $rows_produto["imagem"]?>" alt="..." width="300px">
                        <div>
                        <h3 class="Thumb"><?php echo $rows_produto["tipo"]," ","do"," ",$rows_produto["time"]?></h3>
                            <div class="Compra">
                            <form method="get">
                                <input type="submit" name="Adicionar"
                                 value="Adicionar"/>
                            </form>
                            </div>
                            <div class="retangulo1" id="retangulo1"></div>
                            <div class="retangulo2" id="retangulo2"></div>
                        </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>



 

