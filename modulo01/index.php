<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Apresentacao';
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


                        <h2 class="Titulo">Apresentação</h2>
                        <hr>

                        <img style="width: 100%;" src="imagens\banner.png" alt=""><br>

                        <br>                    
                        <p><strong>Bem-vindo ao Curso “Calc para Iniciantes”!</strong></p>

                        <p>Conhecido como um potente editor de Planilhas Eletrônicas, o LibreOffice Calc é um software livre e gratuito, que surgiu como uma alternativa ao Microsoft Excel, software proprietário e pago.</p>

                        <p>Nosso curso busca apresentar uma linguagem simples que lhe ajudará a conhecer um pouco mais sobre os conceitos básicos da utilização desse programa, através da utilização de exemplos claros e objetivos.</p>

                        <p>Esperamos que você se dedique ao curso e tenha um bom aproveitamento!</p>

                        <br>
                        <h2 class="Titulo">Objetivos</h2>
                        <hr>

                        <p class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Proporcionar ao aluno uma visão básica de alguns recursos do LibreOffice Calc através de exemplos práticos que possam ser utilizados em seu cotidiano pessoal e profissional.</p>

                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });

                            $(function() {
                                $('[data-toggle="tooltip"]').tooltip()
                            });

                            $(function() {
                                $('.example-popover').popover({
                                    container: 'body'
                                })
                            });
                        </script>

                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <br>
            <br>

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>