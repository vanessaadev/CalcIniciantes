<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
?>
<?php
$page = 'Topico01.4';
include('layout/header.php');
?>

<html>
<meta charset="utf-8">
<!-- PLUGIN DO FADE IN -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<body>
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>

        <!--INÍCIO CONTEUDO PARTE 01-->
        <section id="pt01">
            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <!-- LINHA pt01 -->
                        <div class="col-md-1"></div>
                        <div class="col-md-10">

                            <!-- INICIO CONTEUDO -->

                            <!-- Título -->
                            <p class="SubTitulo">Divisão e Congelamento de Janelas</p>
                            <hr>
                            <p>Se houver linhas ou colunas longas de dados que vão além da área visível na planilha, será possível congelá-las, o que permite que as colunas ou linhas congeladas sejam vistas quando percorrer o resto dos dados. </p>
                            <p>Vamos visualizar a tabela a seguir, percebam que a quantidade de colunas ultrapassa o espaço de visualização da tela. </p>
                            <br>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura07.png" alt="Congelar Linhae Coluna." width="800">
                                </a>
                                <p class="FonteFigura"><strong>Figura 07:</strong> Congelar Linha e Coluna. </p>
                            </div>
                            <!-- Imagem 07 - MODAL -->
                            <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura07.png" alt="Congelar Linhae Coluna.">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong> Fonte:</strong> EGPCE. </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 07 - End -->

                            <div class="col-md-12">
                                <p>Selecione a primeira coluna (A), em seguida, vá na barra de ferramentas e escolha a ferramenta “<strong>Congelar linhas e colunas</strong>”. Nesse caso, vamos escolher “<strong>Fixar primeira coluna</strong>”.</p>

                                <p>Perceba agora que mesmo rolando a barra horizontal para o lado, a primeira coluna permanece fixa. Isso facilita muito na visualização de dados que sejam importantes.</p>
                            </div>

                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <div class="SaibaMaisTexto">
                                    <p>
                                    <strong>Quer saber mais sobre?</strong><br>
                                    <strong>Clique abaixo e assista ao vídeo sobre Divisão e Congelamento de Janelas:</strong><br>
                                    </p>
                                    <!-- VÍDEO -->
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6F4XWKcQIk0"></iframe>
                                                </div>
                                            </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                    <!-- FIM VÍDEO --> 
                                </div>
                            </div>

                            <!-- FIM CONTEÚDO -->
                                
                            <br><br><br>

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

                            <!-- FIM SCRIPT LIGHTBOX -->

                            <!-- Botões de navegação -->

                            <div class="text-center">
                                <a href="Topico01.3.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                            </div>

                            <!-- Fim Botões de navegação -->


                        </div> <!-- FIM DIV col-md-10 -->
                        <div class="col-md-1"></div>
                    </div><!--  FIM ROW -->
                </div><!--  FIM PAGE TITULO -->


            </div> <!-- FIM DIV CONTEINE  -->

        </section>
        <!--FIM SELECTION-->





    </div> <!--  FIM DIV MAIN -->

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>