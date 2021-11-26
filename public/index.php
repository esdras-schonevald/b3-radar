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
    <section class=" text-center">
        <div class="container">
            <img class="foto-radar" src="imagens/radarazul.png" alt="">


            <h1 class="jumbotron-heading textoBranco">RADAR INVESTIMENTOS</h1>
                        <p class=" text-center">
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
                                <td colspan="4" class="corCompraeVenda centralizar">COMPRA</td>


                            </tr>

                                <tr>
                                        <td>Empresa</td>
                                        <td>P/L</td>
                                        <td>Marg.liq</td>
                                        <td>Div</td>


                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ((array)json_decode(file_get_contents("http://3.144.212.85:3004/get/10/buy")) as $ativo): ?>
                                    <tr>
                                        <td><?= $ativo->tiker; ?></td>
                                        <td><?= $ativo->pl;//quando tiver / e etc chaves e aspas simples ?></td>
                                        <td><?= $ativo->margliquida; ?></td>
                                        <td><?= $ativo->divyield; ?></td>
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
                                <td colspan="4" class="corCompraeVenda centralizar" >VENDA</td>


                            </tr>




                            <tr>

                                        <td>Empresa</td>
                                        <td>P/L</td>
                                        <td>Marg.liq</td>
                                        <td>Div</td>


                                </tr>
                            <tr>

                            </thead>
                            <tbody>
                                <?php foreach ((array)json_decode(file_get_contents("http://3.144.212.85:3004/get/10/sell")) as $ativo): ?>

                                    <tr>

                                        <td><?= $ativo->tiker; ?></td>
                                        <td><?= $ativo->pl;//quando tiver / e etc chaves e aspas simples ?></td>
                                        <td><?= $ativo->margliquida; ?></td>
                                        <td><?= $ativo->divyield; ?></td>
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
    <section class="text-center jumbotron corPrimaria" id="sobre-projeto">


</div>
    <div class="container">
            <h2 class="jumbotron-heading titulosBrancos">
                Sobre o Projeto
            </h2>
            <p class="lead textoBranco"></p>
            <p>Em um universo cada vez mais descentralizado, o fato de pequenos investidores ocuparem uma fatia cada vez maior do mercado financeiro tem sido um marco no sociedade brasileira. Produtos que antes apenas grandes investidores tinham acesso, hoje são explorados por pessoas de todas as faixas sociais.</p>
            <p>Um grande divisor de águas no sistema financeiro brasileiro foi o surgimento de pequenas corporações como bancos digitais e fintechs possibilitando serviços financeiros de baixo custo ou até sem custos para seus clientes. Isto trouxe à tona um grande interesse da população em investimentos.</p>
            <p>As maiores barreiras para o pequeno investidor iniciante são a falta de assistências já que é um serviço relativamente caro ao pequeno investidor, e falta de tempo para analisar as melhores opções do momento, já que na maioria das vezes esse investidor depende de outra(s) atividade(s) para gerar suas principais receitas.</p>
            <p>No universo da tecnologia já vivemos um cenário parecido, quando grandes corporações dominavam a tecnologia e a comercializava a um custo altíssimo. Neste cenário nasceram os softwares livres, trazendo acessibilidade à todos, e ainda surgiram os programas de código aberto ou compartilhado, o que acelerou em um nível exponencial a qualidade dos softwares gratuitos.</p>
            <p>Trazer esta filosofia ao setor financeiro não é uma tarefa fácil, especialmente quando se trata de atividades que geram receita. A própria B3 (bolsa brasileira) tem seus custos, além dos impostos que o governo já cobra quando o investidor tem lucro. Contudo acreditamos ser possível em um futuro um ecossistema financeiro colaborativo e livre através da tecnologia.</p>
            <p>A nossa proposta neste projeto é dar o primeiro passo, mas também abrir portas para um mundo de serviços livres e colaborativos para o setor financeiro, sem custos e que possibilitem receita aos seus usuários.</p>
            <p>Uma nova definição para o termo "Sharing Economy" (Economia Compartilhada) ou uma amplificação do mesmo. Apresentaremos um Radar de Ativos da B3 que traz de maneira simples as empresas com os melhores indicadores estatísticos do momento bem como alerta sobre empresas com alto potencial de baixa. Um produto como este (Radar Financeiro) certamente não seria oferecido gratuitamente por instituições financeiras.</p>
            <p>Outra grande vantagem de se abrir o código fonte deste tipo de serviço é que o algorítimo compartilhado poderá ser constantemente melhorado pela comunidade desenvolvedora, tornando-o mais sensível ao mercado financeiro e sem custos de manutenção de software.</p>
        </div>





    </section>
    <div class="fundopreto">
        <br><br><br><br>
    <p class="lead textoBranco legenda"> GESTÃO  </p>
    <p class="lead textoBranco legenda">DA TECNOLOGIA DA INFORMAÇÃO</p>
    <p class="lead textoBranco legenda">HTML,CSS,JS,PHP</p>


    </div>
    <div class="d1"></div>

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