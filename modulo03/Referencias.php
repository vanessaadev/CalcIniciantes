<?php
// HEADER
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
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">
                        <div class="bd-callout bd-callout-success">
                            <h5 class="Titulo"><i class="fas fa-book CorVerdeEstado"></i> REFERÊNCIAS</h5>
                            <br>
                            <p>ALENCAR, Thiago. ANDRADE, Elinardy. Apostila Módulo I – Projeto e-Jovem. Fortaleza: SEDUC Fortaleza, 2</p>

                            <p><strong>Site Camila Oliveira.</strong> Disponível em: <a href="http://camilaoliveira.net">http://camilaoliveira.net</a>. Acesso em: 09 mar. 2017.</p>

                            <p><strong>Curso Básico de LibreOffice.org – EGPCE.</strong> Disponível em: <a href="http://softwarelivre.ceara.gov.br/phocadownload/libreoffice.org.basico.apostila.hist.calc.writer.2011r02.pdf">http://softwarelivre.ceara.gov.br/phocadownload/libreoffice.org.basico.apostila.hist.calc.writer.2011r02.pdf</a>. Acesso em: 15 fev. de 2017.</p>

                            <p><strong>Guia de introdução às funções do LibreOffice Calc.</strong> Disponível em: <a href="https://wiki.documentfoundation.org/images/9/95/Guia_de_Introdu%C3%A7%C3%A3o_%C3%A0s_Fun%C3%A7%C3%B5es_do_LibreOffice_Calc.pdf"> https://wiki.documentfoundation.org/images/9/95/Guia_de_Introdu%C3%A7%C3%A3o_%C3%A0s_Fun%C3%A7%C3%B5es_do_LibreOffice_Calc.pdf</a>. Acesso em: 15 fev. de 2017.</p>

                            <p><strong>LibreOffice – The Document Foundation.</strong> Disponível em: <a href="https://pt-br.libreoffice.org/descubra/calc/">https://pt-br.libreoffice.org/descubra/calc/</a>. Acesso em: 15 fev. de 2017.</p>
                        </div><br><br><br>

                        <h4>
                            Parabéns! <?php echo $NomeUsuario ?>, você concluiu o módulo 03 do curso de Calc para Iniciantes. Agora você já pode responder a avaliação do módulo 03. Clique em “Realizar Avaliação”. Boa sorte e até o próximo módulo!
                        </h4><br><br><br>

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
                <a href="Topico02.1.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="http://cursos.egp.ce.gov.br/mod/quiz/view.php?id=1338" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-tasks"></i> Realizar Avaliação 03 </a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>