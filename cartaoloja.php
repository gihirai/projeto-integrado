<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="belezapgto.css">
    <title>Cartão da Loja</title>
</head>
<body>
        <div id='titulo' class='titulo'>
        Cartão da Loja</div>

        <div class="forms">
            <form action="" method="">
                    Nome completo:
                    <input type="text" name="nomeloja">
                    <p></p>
                    Número do Cartão:
                    <input type="number" name="numerocartaoloja">
                    <p></p>
                    CVV:
                    <input type="password" name="cvvloja">
                    <p></p>
                    Número de Parcelas:
                    <label for="parcelasloja"></label>
                    <select name="parcelasloja">
                        <option value="1x">1x sem juros</option>
                        <option value="2x">2x sem juros</option>
                        <option value="3x">3x sem juros</option>
                        <option value="4x">4x sem juros</option>
                        <option value="5x">5x sem juros</option>
                    </select>
                    <p></p>
                    <input type="submit">
                </form>
                
                </div>

                <div>
                <img src="logo.projeto.png"  width="240" height="220">
                <p></p>
                <a href="telarastreio.php">Clique aqui para rastrear seu pedido</a>
                <p></p>
                <a href="home.php">Home, clique aqui</a>
                </div>
            
</body>
</html>