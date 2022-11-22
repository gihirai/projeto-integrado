<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> <!--codigo p/ estrela-->
    <link rel="stylesheet" href="baseatendimento.css">
    <title>Tela de Atendimento</title>
</head> 
<body>
    <div>
        <img src="logo.projeto.png"  width="280" height="260">
    </div>
        <div id='nomecompleto' class='nomecompleto'>
            <div class="forms">
                <form action="resultado.php" method="post"> 
                    <label for="text">Codigo do pedido</label>
                    <input type="number">
                    <p></p>
                    <label>Como podemos te ajudar?</label>
                            <select name="ajuda" required>
                                <option value="">Escolha</option>
                                <option value="defeito">Defeito</option>
                                <option value="troca">Troca</option>
                                <option value="atraso">Atraso na entrega</option>
                                <option value="atraso">Apenas avaliar o pedido</option>
                            </select>
                        <p></p>
                        <label>Avaliação do produto</label>
                        <input type="number" min="0" max="5" step="0" name="notaproduto" required ></input>
                        <p></p>
                        <i style='font-size:24px'  class='fas'>&#9733 &#9733 &#9733 &#9733 &#9733</i>
                        <p></p>
                        <label>Avaliação da loja</label>
                        <input type="number" min="0" max="5" step="0" name="notaproduto"></input>
                        <p></p>
                        <i style='font-size:24px'  class='fas'>&#9733 &#9733 &#9733 &#9733 &#9733</i>
                        <p></p>
                        <label>Digite um comentário sobre sua experiência conosco :)</label>
                        <p></p>
                        <textarea name="comentario" id="" cols="50" rows="10" required maxlength="60" minlength="3"></textarea>
                        <p></p>
                        <input type="submit">
                        </div>
                    </form>
                    </div>
                </div>
        </div>   
</body>
</html>

