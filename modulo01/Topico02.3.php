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

                        <p class="SubTitulo">Inserção de Colunas ou Linhas</p>
                        <hr>

                        <p class="SubSubTitulo">Coluna ou Linha Única</p>
                        <hr>

                        <div class="alert alert-info" role="alert">
                            <p><strong>Utilizando o menu Inserir</strong></p>
                            <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #477391" class="fa fa-arrow-right CorVerdeClaroEstado"></i> Selecione a célula, coluna ou linha em que você quer inserir a nova coluna ou linha;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i style="color: #477391" class="fa fa-arrow-right CorVerdeClaroEstado"></i> Clique em “Planilha → Inserir Colunas” ou “Planilha → Inserir → Linhas”.</li>
                        </div>

                        <div class="alert alert-info" role="alert">
                            <p><strong>Utilizando o mouse</strong></p>
                            <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #477391" class="fa fa-arrow-right CorVerdeClaroEstado"></i> Selecione a célula, coluna ou linha em que você quer inserir a nova coluna ou linha;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i style="color: #477391" class="fa fa-arrow-right CorVerdeClaroEstado"></i> Clique com o botão direito do mouse no cabeçalho da coluna ou da linha;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i style="color: #477391" class="fa fa-arrow-right CorVerdeClaroEstado"></i> Escolha entre: <strong>inserir linhas acima, inserir linhas abaixo, inserir colunas à esquerda ou inserir colunas à direita.</strong></li><br>
                            <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong>Figura 05 - </strong>Inserindo coluna</p>
                                    </a>
                                </div>
                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong>Figura 06 - </strong>Inserindo linha</p>
                                    </a>
                                </div>
                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->
                            </div>
                        </div>
                        </div><br>

                        <p class="SubSubTitulo">Múltiplas Colunas ou Linhas</p>
                        <hr>

                        <p>Você pode também inserir várias colunas ou linhas de uma só vez.</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Selecione o número de colunas ou de linhas pressionando e segurando o botão esquerdo do mouse na primeira, e arraste o número necessário de identificadores.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Proceda da mesma forma, como fosse inserir uma única linha ou coluna, conforme descrito acima.</li><br>
                        </ul>

                        <div class="text-center">
                            <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 07 - </strong>Inserindo 3 linhas abaixo da linha 1</p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                    </div>
                                </div>

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
                <a href="Topico02.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico02.4.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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