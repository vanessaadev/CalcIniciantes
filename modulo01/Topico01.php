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

                        <h2 class="Titulo">Conhecendo a Interface do Calc</h2>
                        <hr>

                        <p><strong>Objetivo:</strong> Apresentar o editor de planilhas Calc e seus elementos básicos.</p>

                        <p class="SubTitulo">Suíte LibreOffice</p>
                        <hr>

                        <p>Potente suíte de escritório, sua interface limpa. Suas poderosas ferramentas libertam a criatividade e melhoram a produtividade. O <em>LibreOffice</em> incorpora várias aplicações que a tornam uma da mais avançada suíte de escritório livre e de código aberto do mercado. O Calc permite abrir arquivos de outras suítes de escritório, como, por exemplo, o Pacote Office da Microsoft. Isso, graças à utilização do formato <em>Open Document</em> (ODF – <em>OpenDocument Format)</em>.</p>

                        <p>A Suíte conta com editor de texto (<strong>Writ</strong>er), editor de planilhas (<strong>Calc</strong>), criador de apresentações (<strong>Impr</strong>ess), editor de desenho e fluxogramas (<strong>Draw</strong>), banco de dados (<strong>Base</strong>) e editor de equações (<strong>Math</strong>).</p>

                        <p>Trabalharemos durante nosso curso com a versão 5.4.2.2 do LibreOffice, mas você poderá utilizar qualquer outra versão.</p>

                        

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
            <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
            <a href="Topico01.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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