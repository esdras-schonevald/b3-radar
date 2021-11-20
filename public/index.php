<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radar de Investimentos v1.0</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0912c79bad.js" crossorigin="anonymous"></script>
    
</head>

<body>
 
    <nav class="corSecundaria navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand textoBranco" href="#">Radar de investimentos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link textoBranco" href="#projeto">Projeto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link textoBranco" href="#sobre-projeto">Sobre o Projeto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link textoBranco" href="#depoimentos">Depoimentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link textoBranco" href="#contato">Contato</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="jumbotron text-center corPrimaria">
        <div class="container">
            <img class="foto-radar" src="imagens/radar.png" alt="">
            <h1 class="jumbotron-heading textoBranco">RADAR INVESTIMENTOS</h1>
            <p class="lead textoBranco"> GESTÃO DA TECNOLOGIA DA INFORMAÇÃO - HTML,CSS,JS,PHP </p>
            <p>
                <a href="#contato" class="btn btn-dark my-2">Contato</a>
            </p>
            <a href="https://www.google.com.br/webhp?tab=ww" target="_blank"><i
                    class="textoBranco icones fab fa-google"></i></a>
            <a href="https://www.google.com.br/webhp?tab=ww" target="_blank"><i class="textoBranco icones fab fa-google"></i></a>
        </div>
    </section>
    <div class="album py-5 bg-light" id="projeto">
        <div class="container">
            <h2 class="jumbotron-heading text-center titulosVerdes">
                PROJETO
            </h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4 box-shadow">
                        <table class="table">
                            <thead>
                                <tr>
                                        <td>Ativo</td>
                                        <td>P/L</td>
                                        <td>Marg.liq</td>
                                        <td>Div</td>
                                       
                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach (json_decode(file_get_contents("http://localhost:3002/"))->ativos as $ativo): ?>
                                    <tr>
                                        <td><?= $ativo->Empresa; ?></td>
                                        <td><?= $ativo->{'P/L'};//quando tiver / e etc chaves e aspas simples ?></td> 
                                        <td><?= $ativo->{'Marg. Líquida'}; ?></td>
                                        <td><?= $ativo->{'Div. Yield'}; ?></td>
                                    </tr> 
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="card mb-4 box-shadow">
                        <table class="table">
                            <thead>
                                <tr>
                                        <td>Ativo</td>
                                        <td>P/L</td>
                                        <td>Marg.liq</td>
                                        <td>Div</td>
                                       
                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach (json_decode(file_get_contents("http://localhost:3002/"))->ativos as $ativo): ?>
                                    <tr>
                                        <td><?= $ativo->Empresa; ?></td>
                                        <td><?= $ativo->{'P/L'};//quando tiver / e etc chaves e aspas simples ?></td> 
                                        <td><?= $ativo->{'Marg. Líquida'}; ?></td>
                                        <td><?= $ativo->{'Div. Yield'}; ?></td>
                                    </tr> 
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SOBRE O PROJETO -->
    <section class="jumbotron text-center corPrimaria" id="sobre-projeto">
        <div class="container">
            <h2 class="jumbotron-heading titulosBrancos">
                Sobre o Projeto
            </h2>
            <p class="lead textoBranco">
                A equipe sempre pensou fora da caixa com isso um de nossos fundadores estava navegando em um mercado de investimentos digital e acabou percebendo que seria legal um "radar" para usuários sem conhecimento nenhum.
                <br> Então nós da equipe radar-X iremos solucionar esse problema.
            </p>
        </div>
    </section>

    <!-- DEPOIMENTOS -->
    <section class="jumbotron text-center" style="background-color: white !important" id="depoimentos">
        <div class="container">
            <h2 class="jumbotron-heading text-center titulosVerdes">
                Depoimentos
            </h2>
            <blockquote class="blockquote text-center">
                <p class="mb-0">Gostei muito do site, aprendi muito com esse radar de investimentos!</p>
                <footer class="blockquote-footer">Maria Gomes, <cite title="Source Title">Usuário(a)</cite></footer>
            </blockquote>
            <blockquote class="blockquote text-center">
                <p class="mb-0">Show! Me considerava leigo na questão de investimentos e graças a vocês estou entendendo, obrigado equipe Radar-X!</p>
                <footer class="blockquote-footer">João Neto, <cite title="Source Title">Usuário(a)</cite></footer>
            </blockquote>
            <blockquote class="blockquote text-center">
                <p class="mb-0">Sem dúvidas o melhor site para investimentos!</p>
                <footer class="blockquote-footer">Desconhecido, <cite title="Source Title">Usuário(a)</cite></footer>
            </blockquote>
        </div>
    </section>
    <!-- Contato -->
    <section class="corPrimaria" id="contato">
        <div>
            <div class="container-fluid">
                <h3 style="padding-top:60px" class="text-center titulosBrancos">Feedback</h3>
                <a href="mailto:equipedevradar@gmail.com">
                    <h4 style="padding-bottom:60px; margin-bottom:0px;" class="text-center"> 👉 equipedevradar@gmail.com 👈</h4>
                </a>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="corSecundaria text-center textoFooter">
        <p class="textoBranco">Copyright 2021 - Adiel Schonevald, Alex Quintino, Isaías Ribeiro</p>

    </footer>

    <script src="assets/js/utils.js">
    </script>
    <script src="assets/js/scripit.js">
    </script>
    
</body>
</html>