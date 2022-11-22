<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="basefinalizacao.css">
    <title>Compras</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 nomepagina">
                <div class="tela">
                    <img src="logo.projeto.png"  width="280" height="260">
                </div>
            </div>
            <div class="col-md-1">
                
            </div>
            <div class="col-md-8">
                <center><h1>Resumo da Compra</h1></center>
                    <br>
                    <div class="cupom">
                        <form>
                            <label for="textodesconto"><h4>Cupom de Desconto</h4></label>
                            <p></p>
                            <input type="text"id="textodesconto" minlength="3" maxlength="9">
                            <p></p>
                            <div class="botaoaplicar"><a href="#" class="btn">Aplicar</a>  </div>
                        </form>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <p></p>
                    <div class="">
                        <div><h4>Subtotal</h4></div>
                        <div class="subtotal">
                            <h4>$0.00</h4>
                        </div>
                        <div>
                            <h4>Taxa de Entrega</h4>
                        </div>
                        <div class="taxadeentrega">
                            <h4>$0.00</h4>
                        </div>
                        <div>
                            <h4>Desconto</h4>
                        </div>
                        <div class="desconto">
                            <h4>$0.00</h4>
                        </div>
                        <hr>
                    </div>
                    <div class="total">
                        <h4>Total</h4>
                        <div class="botaototal">
                            <h4>$0.00</h4>
                        </div>
                        <hr>
                        <br>
                        <div class="botaofinalizar">
                        <input type="submit">
                        <br>
                        <br>
                        
                        <a href="home.php">Voltar a home</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
</body>
</html>