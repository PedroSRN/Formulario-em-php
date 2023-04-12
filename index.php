<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
</head>
<body>
    <section class="content">
        <div class="contato">
            <h3>Questionario sobre jogos</h3>
            
            <?php
            if(isset ($_SESSION['msg']))
            {
              echo $_SESSION['msg'];
              unset ($_SESSION['msg']);
            }         
            ?>

            <form class="form" method="POST" action="processa.php">
                
                <label>Nome:</label>
                <input class="field" name="nome" placeholder="Digite seu Nome">
                
                <label>Email:</label>
                <input class="field" type="email" name="email" placeholder="Digite seu Email">

                <select class="field" name="select" aria-label="Default select example">
                    <option selected>Qual seu estilo de jogo favorito? </option>
                    <option value="1">Esportes</option>
                    <option value="2">Ação</option>
                    <option value="3">RPG</option>
                    <option value="4">Aventura</option>
                    <option value="5">Mundo Aberto</option>
                </select>

                <label>Qual classe de jogos ele pertence:</label>
                <div class="field">
                    <div class="row">
                      <div class="col">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Outra
                        </label>
                      </div>
                      <div class="col">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                          Tabuleiro
                        </label>
                      </div>
                      <div class="col">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                          Digitais
                        </label>
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                    <label>Qual seu jogo favorito:</label>
                      <input type="text" class="field" name="nomeJogo" placeholder="Digite o nome do jogo" aria-label="nome do jogo">
                    </div>
                    <div class="col">
                    <label>Cite uma caracteristica do jogo:</label>
                      <input type="text" class="field" name="caracteristica" placeholder="Digite uma caracteristica" aria-label="caracteristica do jogo">
                    </div>
                </div>
                
                <label>Fale um pouco sobre como você conheceu este jogo:</label>
                <textarea class="field" name="mensagem" placeholder="Digite como você conheceu este jogo"></textarea>

                <div class="field">
                    <label for="customRange2" class="form-label">Com qual frequencia você costuma joga-lo:</label>
                    <div class="row">
                        <div class="col"><label>Muito pouco</label></div>
                        <div class="col"><label>As vezes</label></div>
                        <div class="col"><label>Sempre</label></div>       
                  </div>

                    <input type="range" class="form-range" min="0" max="2" id="customRange2">
                </div>

                
                <input class="field" type="submit" value= "Salvar">
            </form>
        </div>
    </section>
</body>
</html>