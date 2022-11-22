
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="telarastreio.css">
    <title>Tela de Rastreio</title>
</head>
<body style="background-color: white;">
    <div id='desktop-1' class='desktop-1'>
        <img src="logo.projeto.png"  width="280" height="260">
        
            <div class="forms">
                <div>  
                    <form action="resultado.php" method="post">
                        Digite o numero do seu pedido:
                        <input type="number" name="numeropedido" min="0" required >
                        <div id="status">
                            Status da Entrega:
                            <h2 id="preparo">Em Preparo</h2>
                            <h2 id="rota">Em Rota de Entrega</h2>
                            <h2 id="entregue">Entregue</h2>
                        </div>
                        <input type="submit">
            
                        </div>
                    </form>
                </div>  
            </div>
        </div>
        </div>
    </div>
</body>
</html>


<img src="logo.projeto.png"  width="280" height="260">