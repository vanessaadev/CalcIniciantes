<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
?>
<?php
// HEADER
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
        <div class="main-content container-fluid Texto">
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Título -->
                    <h2 class="Titulo">Apresentação</h2>
                    <hr>
                    <!-- Titulo Figura -->
                    <div class="text-center">
                        <a href="imagens/banner.png" data-bs-toggle="modal" data-bs-target="banner">
                            <img class="img-fluid wow fadeInLeft" src="imagens/banner.png" alt="Banner">
                        </a>
                        <p class="FonteFigura"></p>
                    </div>
                    <p><strong>Bem-vindo(a) ao Curso de Calc para Iniciantes!</strong></p>
                    <p>Chegamos ao final do nosso curso. Nas aulas anteriores você aprendeu sobre como realizar cálculos de formas mais eficientes além de como estilizar sua planilha. </p>
                    <p>Na aula 03 estaremos trabalhando com os conceitos de gráficos, formatações condicionais e filtros. Conceitos estes que permitirão enriquecer ainda mais suas planilhas.</p>
                    <p>Esperamos que você se dedique ao curso e tenha um bom aproveitamento!</p>
                    <br><br>
                    <!-- Título -->
                    <h2 class="Titulo">Objetivo</h2>
                    <hr>
                    <!-- LISTA EM MOVIMENTO-->
                    <p><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Proporcionar ao aluno uma visão básica de alguns recursos do LibreOffice Calc através de exemplos práticos que possam ser utilizados em seu cotidiano pessoal e profissional.
                    </p>
                    <br>
                    <!-- SCRIPT INTERAÇAO COM ALUNO-->
                    <ul class="none ">
                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i></i>
                            <h4>
                                Olá! <?php echo $NomeUsuario ?>, Bem-vindo(a) ao módulo 03 do curso de Calc para Iniciantes! Esperamos que o conteúdo proposto contribua para aprimorar o seu conhecimento acerca do tema. Bons estudos!
                            </h4>
                        </li>
                    </ul>
                    <!-- FIM SCRIPT INTERAÇAO COM ALUNO--> <br><br>


                    <!-- SCRIPT LIGHTBOX -->
                    <script>
                        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                            event.preventDefault();
                            $(this).ekkoLightbox();
                        });

                        $('#myModal').on('shown.bs.modal', function() {
                            $('#myInput').trigger('focus')
                        })
                    </script>
                    <!--  FIM SCRIPT LIGHTBOX -->
                    <!-- Botões de navegação -->
                    <div class="text-center">

                        <a href="Topico01.1.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>
                    <!--  Fim Botões de navegação -->

                    <!-- FIM DIV col-md-10 -->
                </div>
                <div class="col-md-1"></div>
                <!--  FIM DIV ROW -->
            </div>
            <!-- FIM DIV CONTEINER  -->
        </div>
        <!-- FIM DIV MAIN  -->
    </div>
    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>
    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>