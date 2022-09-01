<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03';
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <style>
        .BCorEad {
            Background: #4885AE;
        }

        .textmiddle {
            vertical-align: middle !important;
            text-align: center !important;
        }
    </style>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid Texto">
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">

                        <p class="Titulo"> Sintaxe, Formatações e Comandos</p>
                        <hr>

                        <p><strong>Objetivo:</strong> Apresentar a sintaxe padrão do Calc através da utilização de comandos de operações básicas e formatações de fórmulas simples.</p>

                        <br>
                        <p class="SubTitulo">Sintaxe</p>
                        <hr>

                        <p>Em uma planilha, nós utilizamos as operações básicas para instruí-la sobre os nossos cálculos, e nos valemos de fórmulas simples para as operações mais sofisticadas.</p>

                        <div class="text-center">
                            <a href="imagens/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 11 - </strong>Exemplo de fórmula</p>
                        </div>

                        <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <p>Observe a fórmula acima para efeito de exemplos de sintaxe. Note que há parênteses, sinais de operadores aritméticos (+, -, / ,*), além de ponto e vírgula e dois pontos.</p>

                        <br>
                        <p class="SubSubTitulo">Operadores Aritméticos</p>
                        <hr>

                        <table class="table table-bordered border-success">
                            <tbody>
                                <tr style="background-color: #0d9f2b;color:white">
                                    <td colspan="4">Operador</td>
                                    <td colspan="4">Nome</td>
                                    <td colspan="4">Exemplo</td>
                                </tr>
                                <tr>
                                    <td colspan="4">+ (mais)</td>
                                    <td colspan="4">Adição</td>
                                    <td colspan="4">1 + 1</td>
                                </tr>
                                <tr>
                                    <td colspan="4">- (menos)</td>
                                    <td colspan="4">Subtração</td>
                                    <td colspan="4">A - 1</td>
                                </tr>
                                <tr>
                                    <td colspan="4">- (menos)</td>
                                    <td colspan="4">Negação</td>
                                    <td colspan="4">-5</td>
                                </tr>
                                <tr>
                                    <td colspan="4">* (asterisco)</td>
                                    <td colspan="4">Multiplicação</td>
                                    <td colspan="4">2 * 2</td>
                                </tr>
                                <tr>
                                    <td colspan="4">/ (barra)</td>
                                    <td colspan="4">Divisão</td>
                                    <td colspan="4">6 / 3,1</td>
                                </tr>
                                <tr>
                                    <td colspan="4">% (porcentagem)</td>
                                    <td colspan="4">Porcentagem</td>
                                    <td colspan="4">15,00%</td>
                                </tr>
                                <tr>
                                    <td colspan="4">^ (circunflexo)</td>
                                    <td colspan="4">Exponenciação</td>
                                    <td colspan="4">3 ^ 2</td>
                                </tr>
                            </tbody>
                        </table><br>

                        <br>
                        <p class="SubSubTitulo">Operadores de Comparação</p>
                        <hr>

                        <table class="table table-bordered border-success">
                            <tbody>
                                <tr style="background-color: #0d9f2b;color:white">
                                    <td colspan="4">Operador</td>
                                    <td colspan="4">Nome</td>
                                    <td colspan="4">Exemplo</td>
                                </tr>
                                <tr>
                                    <td colspan="4">= (sinal de igual)</td>
                                    <td colspan="4">Igualdade</td>
                                    <td colspan="4">A1 = B1</td>
                                </tr>
                                <tr>
                                    <td colspan="4">> (maior que)</td>
                                    <td colspan="4">Maior que</td>
                                    <td colspan="4">A1 > B1</td>
                                </tr>
                                <tr>
                                    <td colspan="4">< (menor que)</td>
                                    <td colspan="4">Menor que</td>
                                    <td colspan="4">A1 < B1</td>
                                </tr>
                                <tr>
                                    <td colspan="4">>= (maior ou igual a)</td>
                                    <td colspan="4">Maior ou igual a</td>
                                    <td colspan="4">A1 >= B1</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><= (menor ou igual a)</td>
                                    <td colspan="4">Menor ou igual a</td>
                                    <td colspan="4">A1 <= B1</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><> (diferente)</td>
                                    <td colspan="4">Desigualdade</td>
                                    <td colspan="4">A1 <> B1</td>
                                </tr>
                            </tbody>
                        </table><br>

                        <br>
                        <p class="SubSubTitulo">Comandos / Instruções</p>
                        <hr>

                        <table class="table table-bordered border-success">
                            <tbody>
                                <tr style="background-color: #0d9f2b;color:white">
                                    <td colspan="4">Operador</td>
                                    <td colspan="4">Nome</td>
                                    <td colspan="4">Exemplo</td>
                                </tr>
                                <tr>
                                    <td colspan="4">: (dois-pontos)</td>
                                    <td colspan="4">Intervalo</td>
                                    <td colspan="4">A1 : C108</td>
                                </tr>
                                <tr>
                                    <td colspan="4">! (ponto de exclamação)</td>
                                    <td colspan="4">Interseção</td>
                                    <td colspan="4">SOMA (A1 : B6 ! B5 : C12)
Calcula a soma de todas as células na interseção. Neste exemplo, o resultado traz a soma das células B5 e B6.</td>
                                </tr>
                                <tr>
                                    <td colspan="4">~ (Til)</td>
                                    <td colspan="4">Concatenação ou união</td>
                                    <td colspan="4">Toma duas referências e retorna uma lista de referência, que é a concatenação da referência à esquerda seguida da referência à direita.
Entradas duplas são referenciadas duplamente.</td>
                                </tr>
                            </tbody>
                        </table><br>

                        

                        <br><br><!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });

                            $(function() {
                                $('[data-toggle="tooltip"]').tooltip()
                            })
                        </script>

                    </div> <!-- CLASS PAGE TITLE FIM -->
                </div> <!-- End col-md-10 -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico02.5.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico03.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>