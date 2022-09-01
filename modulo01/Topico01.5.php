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

                        <p class="SubTitulo">Interface do Calc</p>
                        <hr>

                        <div class="text-center">
                            <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 02 - </strong>Interface do Calc</p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="SubSubTitulo">Barra de Título</p>
                        <hr>

                        <p>Localizada no alto da tela, mostra o nome do documento atual. Quando a planilha for recém-criada, seu nome será “Sem título X”, onde X é um número. Ao ser salva pela primeira vez, você será solicitado a dar um nome a essa planilha. Encontram-se ainda na barra: a logo do Calc (lado superior esquerdo) e os botões de minimizar, restaurar/maximizar e fechar (lado superior direito).</p>

                        <p class="SubSubTitulo">Barra de Menu</p>
                        <hr>

                        <p>Localizada abaixo da barra de título, a Barra de menu é composta por vários menus e submenus, permitindo acesso rápido a uma série de funcionalidades. Você pode personalizar a Barra de menu conforme as suas necessidades. Para isso, vá em <strong>Ferramentas → Personalizar</strong> e vá na guia <strong>Menu</strong>.</p>

                        <div class="text-center">
                            <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 03 - </strong>Personalizar</p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="SubSubTitulo">Barra de Ferramentas</p>
                        <hr>

                        <p>A barra de ferramentas do LibreOffice inclui elementos comuns aos aplicativos, como os botões: salvar, imprimir, exportar como PDF, desfazer, tabelas etc.</p>

                        <p>Na Barra de ferramentas padrão estão várias opções, tais como:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Gráficos;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Ajuda;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Alinhamento;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.1s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Numeração;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.4s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Recuo;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.7s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Cor da fonte etc.</li>
                        </ul>


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
            <a href="Topico01.4.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
            <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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