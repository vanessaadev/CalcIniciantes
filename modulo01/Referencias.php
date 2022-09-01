
<?php
    // EGPCE - Chama o conectamoodle.php
    require_once('conectamoodle.php');
?>
<?php
$page = 'Referencias';
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
            <!-- CONTEUDO INICIO -->
            <div class="main-content container-fluid">
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">

                            <div class="bd-callout bd-callout-success">

                                <h2 class="Titulo">REFERÊNCIAS</h2>


                                <p class="Texto"> ALENCAR, Thiago. ANDRADE, Elinardy. <strong>Apostila Módulo I – Projeto e-Jovem</strong>. Fortaleza: SEDUC Fortaleza, 2016. </p>
                                <p class="Texto"> <strong>Curso Básico de LibreOffice.org –</strong> EGPCE Disponível em: <a target="_blank" href="http://softwarelivre.ceara.gov.br/phocadownload/libreoffice.org.basico.apostila.hist.calc.writer.2011r02.pdf">Clique aqui para ter acesso.</a><br> Acesso em 15 de fevereiro de 2017. </p>
                                <p class="Texto"> <strong>Guia de introdução às funções do LibreOffice Calc</strong> Disponível em: <a target="_blank" href="https://wiki.documentfoundation.org/images/9/95/Guia_de_Introdu%C3%A7%C3%A3o_%C3%A0s_Fun%C3%A7%C3%B5es_do_LibreOffice_Calc.pdf">Clique aqui para ter acesso.</a><br> Acesso em 15 de fevereiro de 2017. </p>
                                <p class="Texto"> <strong>LibreOffice – The Document Foundation</strong> Disponível em: <a target="_blank" href="https://pt-br.libreoffice.org/descubra/calc/">Clique aqui para ter acesso.</a><br> Acesso em 15 de fevereiro de 2017. </p>

                            </div>

                          
          
                            <!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });                    
                            </script>

                        </div> <!-- CLASS PAGE TITLE FIM -->
                    </div> <!-- End col-md-10 -->

                    <div class="col-md-1"></div>
                </div> <!-- End row-->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico03.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="http://cursos.egp.ce.gov.br/mod/quiz/view.php?id=1333" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-tasks"></i> Realização Avaliação 01 </a>
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
