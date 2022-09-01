<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01';
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

                        <p class="SubTitulo">Elementos Básicos de Uma Planilha no Calc</p>
                        <hr>

                        <div class="text-center">
                            <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                        </div>
                        <br>
                        <!-- Início Section Modal-->
                        <section id="Modal">
                            <div class="text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Planilha
                                </button>
                                <!-- Modal -->

                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p><strong>Planilha</strong></p>
                                                <hr>
                                                <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> É o arquivo completo, com todas as suas abas ou folhas de cálculo. Na primeira aba, podemos ter, por exemplo, o cálculo de despesas do seu escritório. Na segunda aba as, receitas e na terceira aba, um gráfico demonstrativo.</li><br>
                                                <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Cada planilha contém <strong>colunas</strong>, que são dispostas lado a lado, e <strong>linhas</strong> que correm de cima a baixo, lembrando um plano cartesiano, no qual as coordenadas são representadas pelos pares ordenados "x ; y". No caso das planilhas "<strong>coluna</strong> ; <strong>linha</strong>". As colunas são rotuladas com letras e as linhas são numeradas. Cada planilha possui 1.048.576 linhas e as colunas vão das letras A à AMJ.</li> 
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">
                                    Célula
                                </button>
                                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p><strong>Célula</strong></p>
                                                <hr>
                                                <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Elemento básico, primordial em uma planilha. É identificado como sendo a interseção entre dois vetores (retângulo que se forma do cruzamento de linha x coluna). Recebe a informação a ser processada, podendo ser textual, numérica, fórmula ou outros caracteres.</li><br>
                                                <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> No exemplo, a palavra “<strong>CEDIS”</strong> pertence a célula que se forma com o cruzamento da coluna <strong>B</strong> e a linha <strong>2</strong>. Logo, o Calc entende esta coordenada como “<strong>B2”</strong>. Ela representa então o que chamamos de <strong>endereço da célula</strong>. Em caso de números, as fórmulas serão baseadas nos endereços da célula, facilitando bastante nossos futuros trabalhos com funções.</li><br>

                                                <div class="text-center">
                                                    <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 01 - </strong>Exemplo de Célula</p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>Tecmundo</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Observe ainda que temos (no canto superior esquerdo) o que chamamos de caixa de endereço. Através dela podemos visualizar o endereço da célula selecionada.</li>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal3">
                                    Valores
                                </button>
                                <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p><strong>Valores</strong></p>
                                                <hr>
                                                <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Um valor pode representar um dado numérico ou textual inserido pelo usuário ou pode ser resultado de uma fórmula ou função (nativa ou do usuário).</li>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal4">
                                    Fórmulas
                                </button>
                                <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                            <ul class="none">
                                                <p><strong>Fórmulas</strong></p>
                                                <hr>
                                                <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A fórmula é uma expressão matemática, inserida na célula pelo usuário para calcular um resultado. Os critérios podem ser:</li><br>

                                                <ul class="none">
                                                    <li style="text-align: left;list-style: none;"><i class="fa fa-cube CorVerdeClaroEstado"></i> Célula;</li>
                                                    <li style="text-align: left;list-style: none;"><i class="fa fa-cube CorVerdeClaroEstado"></i> Faixa de células;</li>
                                                    <li style="text-align: left;list-style: none;"><i class="fa fa-cube CorVerdeClaroEstado"></i> Resultado aritmético;</li>
                                                    <li style="text-align: left;list-style: none;"><i class="fa fa-cube CorVerdeClaroEstado"></i> Referência a outras planilhas etc.</li><br>
                                                </ul>

                                                <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A fórmula é a parte inteligente da planilha e sem as fórmulas a planilha. Seria somente um amontoado de textos e números.</li>                                                
                                            </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal5">
                                    Funções
                                </button>
                                <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p><strong>Funções</strong></p>
                                                <hr>
                                                <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> São fórmulas pré-definidas (<strong>nativas</strong>) para pouparem tempo e trabalho na criação de uma equação. O Calc contém muitas funções nativas e o usuário é livre para implementar as suas próprias funções, há de se imaginar como sendo quase ilimitado o poder do usuário em estender a funcionalidade da planilha eletrônica.</li>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        

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
            <a href="Topico01.3.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
            <a href="Topico01.5.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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