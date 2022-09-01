<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
?>
<?php
$page = 'Topico01.2';
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
                            <p class="SubTitulo"> Filtros </p>
                            <hr>
                            <p>Um filtro é uma lista de condições em que cada entrada deve atender para poder ser exibida. Você pode configurar três tipos de filtros no submenu. Selecione as colunas nas quais deseja aplicar o filtro e em seguida vá ao menu <strong>Dados → Autofiltro</strong>.</p>

                            <p>Filtros automáticos adicionam uma lista de seleção na linha de topo da coluna que contém os filtros mais utilizados. Eles são rápidos, convenientes e úteis com textos e números, porque cada lista contém cada entrada única nas células selecionadas.</p>

                            <p>Além dessas entradas únicas, filtros automáticos incluem a opção de exibir todas as entradas, os dez maiores valores numéricos, e todas as células vazias, ou as preenchidas, assim como um filtro padrão. Os filtros automáticos são um pouco limitados. Em particular, eles não permitem expressões regulares. Portanto, você não pode utilizá-los para exibir células com conteúdo semelhante, mas não idênticos.</p>
                            <br>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura03.png" alt="Autofiltro">
                                </a>
                                <p class="FonteFigura"><strong>Figura 03:</strong> Autofiltro. </p>
                            </div>
                            <!-- Imagem 03 - MODAL -->
                            <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura03.png" alt="Autofiltro">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> EGPCE.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 03 - End -->

                            <div class="col-md-12">
                                <p>Filtros padrão são mais complexos do que os filtros automáticos. Você pode configurar até três condições para cada filtro, e combiná-las com operadores <strong>E</strong> e <strong>OU</strong>. Filtros padrão são mais úteis para números, embora alguns dos operadores, como = e <> também possam ser úteis com textos.</p>

                                <p>Outros operadores condicionais para filtros padrão incluem opções para exibição do maior e do menor valor, ou uma porcentagem deles. Úteis por si só, os filtros padrão adicionam valor, quando utilizados para refinar os filtros automáticos.</p>

                                <p><strong>Filtros avançados</strong>, são estruturas semelhantes aos filtros padrão. As diferenças são que os filtros avançados são limitados a três condições, e seus critérios não são configurados em uma caixa de diálogo. Ao invés disso, os filtros avançados são inseridos numa área em branco da folha, e referenciados pela ferramenta de filtro avançado para que sejam aplicados.</p>
                            </div>
                            <br>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura04.png" alt="Mais filtros">
                                </a>
                                <p class="FonteFigura"><strong>Figura 04:</strong> Mais filtros. </p>
                            </div>
                            <!-- Imagem 04 - MODAL -->
                            <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura04.png" alt="Mais filtros">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> EGPCE.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Figura 04 - End -->
                            <br>
                            
                            <!-- CARD -->
                            <div class="card" style="background: #ece8c1c5;">
                                <div class="card-body">
                                <p><strong>Clique abaixo e veja um vídeo explicativo um vídeo explicativo sobre Filtros.</strong></p>
                            
                                <!-- VÍDEO -->
                                <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vGzHj4XFxBw"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                </div>
                                <!-- FIM VÍDEO --> 
                            </div>
                            <!-- FIM CARD -->

                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto">Quer aprender um pouco mais sobre como utilizar corretamente os filtros?
                                    <br>Acesse: <a target="_blank" href="http://camilaoliveira.net">https://camilaoliveira.net</a>
                                </p>
                            </div>
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
                                <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Topico01.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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