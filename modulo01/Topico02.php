<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02';
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>

        <div class="main-content container-fluid" id="#Apresentacao">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">

                        <h2 class="Titulo">Trabalhando com Células, Colunas, Linhas e Folhas de Cálculo</h2>
                        <hr>

                        <p><strong>Objetivo:</strong> Conhecer alguns dos elementos básicos relacionados as células, colunas, linhas e folhas de cálculo.</p>

                        <p class="SubTitulo">Intervalo de Célula</p>
                        <hr>

                        <p>Saber a diferença entre o uso do ponto-e-vírgula e o uso dos dois pontos nas operações realizadas tanto no MSExcel quanto no LibreOffice Calc é de importância fundamental.</p>

                        <p>Imagine os seguintes dados: <strong>A4</strong> = 1; <strong>A5</strong> = 2; <strong>A6</strong> = 3.</p>

                        
                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <p>O uso dos <strong>DOIS PONTOS</strong> “:” em planilhas eletrônicas equivale ao intervalo de um número a outro.</p>

                                <p><strong style="font-weight: bolder;">=SOMA(A4:A6)</strong></p>
                                
                                <p>Com essa fórmula dizemos para a planilha que efetue a soma dos valores contidos no intervalo entre as células A4 e A6</p>
        
                                <p><strong>Em resumo, o cálculo realizado será: A4 + A5 + A6 = 1+2+3 = 6</strong></p>
        
                            </div>
                        </div>
                        
                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <p>Ao utilizar <strong>PONTO E VÍRGULA</strong> “;” dizemos para a planilha que devem ser somados os números, e somente eles, contidos nas respectivas células citadas:</p>

                                <p><strong style="font-weight: bolder;">=SOMA(A4; A6)</strong></p>

                                <p>Em resumo, o cálculo realizado será: A4 + A6 = 1+3 = 4</p>
                            </div>
                        </div>

                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Vale lembrar que se quisermos selecionar as células A1, A2, A3, A4, A5, A6 e A7 para somar seu conteúdo, podemos fazer assim:<br><strong>=SOMA(A1;A2;A3;A4;A5;A6;A7)</strong> ou de uma maneira mais simples: <strong>=SOMA(A1:A7)</strong></p>
                            </div>
                        </div>

                    

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

                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico01.5.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico02.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>