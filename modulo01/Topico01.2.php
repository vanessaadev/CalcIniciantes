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

                        <p class="SubTitulo">O que é o Calc?</p>
                        <hr>

                        <p>O Calc é um dos componentes da Suíte <em>LibreOffice</em> e que tem como função trabalhar com planilhas eletrônicas, permitindo ao usuário realizar cálculos diversos, indo de um simples cálculo de orçamento doméstico a planilhas corporativas complexas. Dentre os recursos de uma planilha está a possibilidade de apresentar graficamente os dados selecionados pelo usuário.</p>

                        <p>Outras funcionalidades oferecidas pelo Calc:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Funções que podem ser utilizadas para criar fórmulas, a fim de executar cálculos complexos;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Funções de banco de dados, para organizar, armazenas e filtrar dados;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Gráficos dinâmicos: um grande número de opções de gráficos em 2D e 3D;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.2s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Macros: para a gravação e a execução de tarefas repetitivas;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.5s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Capacidade de abrir, editar e salvar planilhas no formato <strong>.xls</strong> e <strong>.xlsx</strong> (Microsoft Excel);</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.8s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Importação e exportação de planilhas em vários formatos, incluindo HTML, CSV, PDF e <em>PostScript</em>.</li>
                        </ul>

                        <p>Por ser um <em>software</em> do tipo livre, o <em>LibreOffice</em>.org garante que qualquer pessoa pode utiliza-lo e/ou modifica-lo sem a necessidade de autorização prévia.</p>

                        

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
            <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
            <a href="Topico01.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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