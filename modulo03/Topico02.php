<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
?>
<?php
$page = 'Topico02.1';
include('layout/header.php');
?>

<html>
<meta charset="utf-8">
<!-- PLUGIN DO FADE IN -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<body>
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>

        <!--INÍCIO CONTEUDO PARTE 01-->
        <section id="pt01">
            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <!-- LINHA pt01 -->
                        <div class="col-md-1"></div>
                        <div class="col-md-10">

                            <!-- INICIO CONTEUDO -->

                            <!-- Título -->
                            <p class="Titulo">Gráficos no Calc</p>
                            <hr>
                                <p><strong>Objetivo:</strong> Praticar a construção de planilhas eletrônicas no LibreOffice Calc, fazendo uso dos conceitos de Gráficos.</p>
                            <br>

                            <!-- Sub Título -->
                            <div class="col-md-12">
                                <p class="SubTitulo"> O que são gráficos? </p>
                                <hr>
                                <p>Pode-se dizer que os gráficos são representações dos dados de planilhas através de imagens. Em vez de analisar colunas de números em uma planilha, representa-se em imagens gráficas que são de mais fácil entendimento. </p>
                            </div>
                            <br>

                            <!-- Sub Título -->
                            <div class="col-md-12">
                                <p class="SubTitulo"> Tipos de gráficos </p>
                                <hr>
                                <p>O ideal é que você selecione um tipo de gráfico que torne a interpretação dos seus dados mais claras e informativas. O Calc oferece uma ampla variedade de tipos de gráficos e métodos simples para selecioná-los e visualizá-los.</p>

                                <p>Um gráfico é capaz de transmitir sua mensagem rapidamente possibilitando apresentar os dados de uma planilha, evidenciando comparações, padrões e tendências.</p>

                                <p>Por exemplo, é possível mostrar, instantaneamente, se os números de metas caíram ou aumentaram de um trimestre para outro.</p>
                            </div>
                            <br>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo"> Gráficos de colunas </p>
                            <hr>
                            <p>São úteis para ilustrar comparações entre itens. Gráficos de colunas, geralmente, as categorias são organizadas ao longo do eixo horizontal (X), e os valores ao longo do eixo vertical (Y).</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura08.png" alt="Gráfico em coluna." width="800">
                                </a>
                                <p class="FonteFigura"><strong>Figura 08:</strong> Gráfico em coluna. </p>
                            </div>
                            <!-- Imagem 08 - MODAL -->
                            <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura08.png" alt="Gráfico em coluna.">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> EGPCE. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Figura 08 - End -->
                            <br>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo"> Gráficos de linhas </p>
                            <hr>
                            <p>Podem exibir dados contínuos ao longo do tempo, definidos em relação a uma escala comum, e que, portanto, são ideais para mostrar tendências a intervalos iguais. Nesse tipo de gráfico, os dados de categorias são distribuídos uniformemente ao longo do eixo horizontal, enquanto os dados de valores são distribuídos igualmente ao longo do eixo vertical.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura09.png" alt="Gráfico em linha." width="800">
                                </a>
                                <p class="FonteFigura"><strong>Figura 09:</strong> Gráfico em linha. </p>
                            </div>
                            <!-- Imagem 09 - MODAL -->
                            <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura09.png" alt="Gráfico em linha.">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> EGPCE. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Figura 09 - End -->
                            <br>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo"> Gráficos de pizza </p>
                            <hr>
                            <p>Mostram o quanto cada valor representa sobre o valor total. São utilizados quando há apenas uma série de dados a serem comparados e todos os valores são positivos.</p>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura10.jpg" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura10.jpg" alt="Gráficos em pizza." width="600">
                                </a>
                                <p class="FonteFigura"><strong>Figura 10:</strong> Gráfico em pizza. </p>
                            </div>
                            <!-- Imagem 10 - MODAL -->
                            <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura10.jpg" alt="Gráficos em pizza.">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> EGPCE.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Figura 10 - End -->
                            <br>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo"> Gráficos de barras </p>
                            <hr>
                            <p>Ilustram comparações entre itens individuais. Considere a utilização de gráficos de barras, quando os rótulos dos eixos forem longos e para comparar múltiplos valores.</p>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura11.jpg" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura11.jpg" alt="Gráfico de barras." width="600">
                                </a>
                                <p class="FonteFigura"><strong>Figura 11:</strong> Gráfico de barras. </p>
                            </div>
                            <!-- Imagem 11 - MODAL -->
                            <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura11.jpg" alt="Gráfico de barras.">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> EGPCE.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Figura 11 - End -->
                            <br>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo"> Gráficos de área </p>
                            <hr>
                            <p>Enfatizam a magnitude da mudança no decorrer do tempo e podem ser usados para chamar atenção para o valor total ao longo de uma tendência. Exibindo a soma dos valores, o gráfico de área mostra também a relação das partes com um todo.</p>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura12.jpg" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura12.jpg" alt="Gráfico de área." width="600">
                                </a>
                                <p class="FonteFigura"><strong>Figura 12:</strong> Gráfico de área. </p>
                            </div>
                            <!-- Imagem 12 - MODAL -->
                            <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura12.jpg" alt="Gráfico de área.">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> EGPCE. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Figura 12 - End -->
                            <br>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo"> Gráficos de dispersão (XY) </p>
                            <hr>
                            <p>Apresentam dois eixos de valores, mostrando um conjunto de dados numéricos ao longo do eixo horizontal (eixo X) e outro ao longo do eixo vertical (eixo Y). Combinam esses valores em pontos de dados únicos e os exibem em intervalos irregulares ou agrupamentos. Comumente, esse tipo de gráfico é usado para exibir e comparar valores numéricos, como dados científicos, estatísticos e de engenharia.</p>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura13.gif" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura13.gif" alt="Gráfico de dispersão." width="600">
                                </a>
                                <p class="FonteFigura"><strong>Figura 13:</strong> Gráfico de dispersão. </p>
                            </div>
                            <!-- Imagem 13 - MODAL -->
                            <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura13.gif" alt="Gráfico de dispersão.">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> EGPCE. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Figura 13 - End -->
                            <br>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo"> Gráficos de bolhas </p>
                            <hr>
                            <p>Em gráficos de bolhas, podem ser inseridos dados que se encontram organizados em colunas nas planilhas, de tal forma que valores de X sejam listados na primeira coluna e valores de Y correspondentes sejam listados em colunas adjacentes. </p>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura14.png" alt="Gráfico de bolhas." width="800">
                                </a>
                                <p class="FonteFigura"><strong>Figura 14:</strong> Gráfico de bolhas. </p>
                            </div>
                            <!-- Imagem 14 - MODAL -->
                            <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura14.png" alt="Gráfico de bolhas.">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> EGPCE.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Figura 14 - End -->
                            <br>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo"> Gráficos em rede </p>
                            <hr>
                            <p> Gráficos em comparam os valores agregados de várias séries de dados. Cada série de dados tem cor ou padrão exclusivo e é representada na legenda do gráfico. É possível inserir uma ou mais séries de dados em um gráfico.</p>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura15.png" alt="Gráficos em rede." width="600">
                                </a>
                                <p class="FonteFigura"><strong>Figura 15:</strong> Gráficos em rede. </p>
                            </div>
                            <!-- Imagem 15 - MODAL -->
                            <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura15.png" alt="Gráficos em rede.">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> EGPCEInserir Gráficos.. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Figura 15 - End -->
                            <br>

                            <!-- Sub Título -->
                            <div class="col-md-12">
                                <p class="SubTitulo"> Construção de gráficos </p>
                                <hr>
                                <p>No Calc, é fácil gerar gráficos a partir de qualquer planilha. Pode-se chamar o assistente de gráficos a partir do seu ícone ou do menu <strong>Inserir → gráfico</strong>.</p>

                                <p>Os gráficos no Calc estão muito fáceis e muito intuitivos e são prometidas ainda muitas melhorias para esse recurso. Ao se invocar o comando Inserir Gráfico, tem-se uma tela como a seguir (previsão do gráfico e seu assistente).</p>
                            </div>
                            <br>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura16.png" alt="Inserir Gráficos." width="700">
                                </a>
                                <p class="FonteFigura"><strong>Figura 16:</strong> Inserir Gráficos. </p>
                            </div>
                            <!-- Imagem 16 - MODAL -->
                            <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura16.png" alt="Inserir Gráficos.">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> EGPCE.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Figura 16 - End -->
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura17.png" alt="Assistente de Gráficos." width="700">
                                </a>
                                <p class="FonteFigura"><strong>Figura 17:</strong> Assistente de Gráficos. </p>
                            </div>
                            <!-- Imagem 17 - MODAL -->
                            <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura17.png" alt="Assistente de Gráficos.">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> EGPCE.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Figura 17 - End -->
                            <br>
                            <div class="col-md-12">
                                <p><strong>Etapa 1 </strong>– Você terá vários tipos e subtipos de gráficos a escolher: barras, pizza, rede, dispersão etc;</p>
                                <p><strong>Etapa 2 </strong>– Intervalo de Dados – aqui se informa ao Calc a área a ser computada e plotada;</p>
                                <p><strong>Etapa 3 </strong>– Série de Dados – aqui se definem nomes e rótulos para as séries dos dados;</p>
                                <p><strong>Etapa 4 </strong>– É nessa etapa que se fazem as legendas do gráfico.</p>
                                <p>A seguir, vemos um gráfico de Pizza gerado no LibreOffice.org Calc:</p>
                            </div>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura18.png" alt="Gráfico de pizza." width="600">
                                </a>
                                <p class="FonteFigura"><strong>Figura 18:</strong> Gráfico de pizza. </p>
                            </div>
                            <!-- Imagem 18 - MODAL -->
                            <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura18.png" alt="Gráfico de pizza.">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> EGPCE. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Figura 18 - End -->
                            <br>
                            
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                            <img class="img-fluid wow fadeInLeft" src="imagens/Figura19.png" alt="Tabela Modelo." width="500">
                                        </a>
                                        <p class="FonteFigura"><strong>Figura 19:</strong> Tabela Modelo. </p>
                                    </div>
                                    <!-- Imagem 19 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura19.png" alt="Tabela Modelo.">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Fonte:</strong> EGPCE.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Figura 19 - End -->
                                </div>
                                    
                                <div class="col-md-6 col-sm-12">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura20.png" data-bs-toggle="modal" data-bs-target="#Imagem20">
                                            <img class="img-fluid wow fadeInLeft" src="imagens/Figura20.png" alt="Gráfico da Tabela Modelo." height="200" width="400">
                                        </a>
                                        <p class="FonteFigura"><strong>Figura 20:</strong> Gráfico da Tabela Modelo.</p>
                                    </div>
                                    <!-- Imagem 20 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura20.png" alt="Gráfico da Tabela Modelo.">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Fonte:</strong> EGPCE. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!-- Figura 20 - End -->
                            </div>
                            <br>

                            <div class="col-md-12">
                                <p>Para se fazer qualquer modificação, inclusive da modalidade do gráfico, é bastante dar um duplo clique neste e estaremos no modo de edição do gráfico. Nesse modo, podem ser mudados quaisquer dados, inclusive as escalas dos gráficos.</p>

                                <p>Pode-se interromper a qualquer momento, claro, a confecção do gráfico via assistente. Basta pressionar <strong>“Esc”</strong>.</p>

                                <p>Vamos tomar como exemplo a planilha do lado esquerdo:</p>

                                <p>Colocaremos os alunos no <strong>eixo X</strong> e as notas no <strong>eixo Y</strong>. Para isto, basta acessar o menu <strong>Inserir → Gráfico</strong>. Assim que acessado o item de menu acima, será mostrada a tela <strong>“Assistente de Gráfico”</strong>. Escolha um <strong>“Tipo de Gráfico”</strong> e aperte o botão <strong>“Próximo >>”</strong>. Para o nosso exemplo, foi escolhido <strong>“Coluna”</strong>.</p>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura21.png" data-bs-toggle="modal" data-bs-target="#Imagem21">
                                            <img class="img-fluid wow fadeInLeft" src="imagens/Figura21.png" alt="Gráfico da Tabela Modelo 2." width="360">
                                        </a>
                                        
                                    </div>
                                    <!-- Imagem 21 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura21.png" alt="Gráfico da Tabela Modelo 2.">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Fonte:</strong> EGPCE. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Figura 21 - End -->
                                </div>


                                <div class="col-md-6 col-sm-12">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura22.png" data-bs-toggle="modal" data-bs-target="#Imagem22">
                                            <img class="img-fluid wow fadeInUp" src="imagens/Figura22.png" alt="Gráfico da Tabela Modelo 2." width="550">
                                        </a>
                                    </div>
                                    <!-- Imagem 22 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura22.png" alt="Gráfico da Tabela Modelo 2.">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Fonte:</strong> EGPCE. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Figura 22 - End -->
                                </div>                              
                            </div>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura23.png" data-bs-toggle="modal" data-bs-target="#Imagem23">
                                    <img class="img-fluid wow fadeInRight" src="imagens/Figura23.png" alt="Alt da imagem fica aqui" width="700">
                                </a>
                            </div>
                            <!-- Imagem 23 - MODAL -->
                            <div class="modal fade text-center" id="Imagem23" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura23.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> EGPCE.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Figura 23 - End -->

                            <p class="FonteFigura text-center"><strong>Figura 21, 22 e 23:</strong> Gráfico e Assistentes da Tabela Modelo 2. </p>
                            <div class="col-md-12">
                                <p>Perceba que, ao concluir o processo, a tabela é incluída e na parte superior aparecem novas opções, que nos permitem modificar a estrutura do gráfico, inserindo bordas, alterando cores, legendas, títulos etc.</p>
                            </div>

                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <div class="SaibaMaisTexto">
                                    <p>
                                    <strong>Clique abaixo, assista ao vídeo e aprenda um pouco mais sobre como configurar e utilizar, cada gráfico:</strong><br>
                                    </p>
                                    <!-- VÍDEO -->
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rPv9B3oEoNw"></iframe>
                                                </div>
                                            </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                    <!-- FIM VÍDEO --> 
                                </div>
                            </div>
                            <br><br>
                            <!-- Pratique -->
                            <div class="PratiqueCaixa">
                                <p class="PratiqueTitulo"> Pratique</p>
                                <div class="PratiqueTexto">
                                    <p>Crie uma tabela com uma área destinada às suas despesas e outra destinada às receitas e em um campo da planilha repercuta o total líquido. Faça um gráfico demonstrativo desta planilha, refletindo as despesas e as receitas.</p>
                                    <p>Uma fábrica de automóveis de uma determinada marca realizou a seguinte venda nos últimos meses:</p>
                                    <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Em junho, o faturamento em vendas foi de R$ 4.234.567,12</p>
                                    <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Em julho, o faturamento em vendas foi de R$ 6.842.524,45</p>
                                    <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Em agosto, o faturamento em vendas foi de R$ 7.356.349,56</p>
                                    <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Em setembro, o faturamento em vendas foi de R$ 7.642.333,87</p>
                                    <p>Construa um gráfico que represente adequadamente esses dados para apresentar em uma reunião, que irá analisar as vendas nos últimos meses.</p>
                                </div>
                            </div>

                            <div class="col-md-12"><br>
                                <p><strong>Chegamos ao final do nosso curso, esperamos que ele tenha sido proveitoso para você. Até a próxima! </strong></p>
                            </div>
                            <br><br><br>

                            <!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });
                                $('#myModal').on('shown.bs.modal', function() {
                                    $('#myInput').trigger('focus')
                                })
                            </script>

                            <!-- FIM SCRIPT LIGHTBOX -->

                            <!-- Botões de navegação -->

                            <div class="text-center">
                                <a href="Topico01.4.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Referencias.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                            </div>

                            <!-- Fim Botões de navegação -->


                        </div> <!-- FIM DIV col-md-10 -->
                        <div class="col-md-1"></div>
                    </div><!--  FIM ROW -->
                </div><!--  FIM PAGE TITULO -->


            </div> <!-- FIM DIV CONTEINE  -->

        </section>
        <!--FIM SELECTION-->





    </div> <!--  FIM DIV MAIN -->

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>