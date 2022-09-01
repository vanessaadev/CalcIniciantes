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

                        <p class="SubTitulo">Seleção de Células, Colunas, Linhas e Folhas</p>
                        <hr>

                        <p class="SubSubTitulo">Células</p>
                        <hr>

                        <p>As células podem ser selecionadas de várias maneiras e combinações</p>

                        <p><strong>Célula única:</strong> clique com o botão esquerdo do mouse sobre a célula.</p>

                        <p><strong>Grupo de células contíguas:</strong> você pode selecionar um grupo de células contíguas, utilizando o teclado ou o mouse.</p>

                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Para selecionar um grupo de células arrastando o mouse</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Clique em uma célula;</li><br>
                                        <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Pressione e segure o botão esquerdo do mouse;</li><br>
                                        <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Mova o mouse através da tela com o botão ainda pressionado;</li><br>
                                        <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Uma vez selecionado o bloco de células desejado, solte o botão do mouse.</li>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Para selecionar um grupo de células sem arrastar o mouse</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Clique na célula que será um dos cantos do grupo a ser selecionado;</li><br>
                                        <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Mova o mouse para o canto oposto do grupo a ser selecionado, sem pressionar o botão;</li><br>
                                        <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Pressione e mantenha a tecla <em>Shift</em>;</li><br>
                                        <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Clique na célula que será o canto oposto da seleção.</li>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Para selecionar um grupo de células com o teclado</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Clique na célula que será um dos cantos do grupo a ser selecionado;</li><br>
                                        <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Pressione e mantenha a tecla <em>Shift</em>;</li><br>
                                        <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Utilizando as teclas de navegação do teclado (setas), movimente para selecionar as células.</li>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>Para selecionar células intercaladas</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Selecione a primeira célula;</li><br>
                                        <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Pressione e mantenha a tecla “<strong>Ctrl</strong>”;</li><br>
                                        <li style="text-align: left;list-style: none;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Clique nas demais células que desejar.</li>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>

                        <p class="SubSubTitulo">Colunas, Linhas e Folha</p>
                        <hr>

                        <p>Colunas e linhas inteiras podem ser selecionadas de maneira muito rápida no LibreOffice.</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Para selecionar uma única coluna, clique na letra do identificador da coluna, por exemplo. Para selecionar a coluna <strong>D</strong>, clique sobre a letra <strong>D</strong> no cabeçalho de colunas;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Para selecionar uma única linha, clique no identificador do número da linha, por exemplo. Para selecionar a linha 1, clique sobre o número 1 no cabeçalho de linhas.</li>
                        </ul>

                        <div style="display: flex;justify-content: space-between;" class="row">
                            <div style="list-style:none;width: 49%;padding: 15px;margin-right: 3px;" class="col-md-6 col-sm-12 alert alert-info">
                                <li><i style="color: #477391" class="fa fa-cube CorVerdeClaroEstado"></i> Para selecionar múltiplas colunas ou linhas contíguas</li>
                                <hr>
                                <li><i style="color: #477391" class="fa fa-arrow-right CorVerdeClaroEstado"></i> Clique na primeira coluna ou linha do grupo;</li>
                                <li><i style="color: #477391" class="fa fa-arrow-right CorVerdeClaroEstado"></i> Pressione e segure a tecla <em>Shift</em>;</li>
                                <li><i style="color: #477391" class="fa fa-arrow-right CorVerdeClaroEstado"></i> Clique na última coluna ou linha do grupo.</li>
                            </div>
                            <div style="list-style:none;width: 49%;padding: 15px;margin-left: 3px;" class="col-md-6 col-sm-12 alert alert-info">
                                <li><i style="color: #477391" class="fa fa-cube CorVerdeClaroEstado"></i> Para selecionar múltiplas colunas ou linhas não contíguas</li>
                                <hr>
                                <li><i style="color: #477391" class="fa fa-arrow-right CorVerdeClaroEstado"></i> Clique na primeira coluna ou linha do grupo;</li>
                                <li><i style="color: #477391" class="fa fa-arrow-right CorVerdeClaroEstado"></i> Pressione e segure a tecla <strong>Ctrl<strong>;</li>
                                <li><i style="color: #477391" class="fa fa-arrow-right CorVerdeClaroEstado"></i> Clique em todas as colunas ou linhas subsequentes, enquanto segura a tecla <strong>Ctrl<strong>.</li>
                            </div>
                        </div>

                        <p>Para selecionar uma folha inteira, clique na pequena caixa entre o identificador da coluna “<strong>A</strong>” e o identificador da linha “<strong>1</strong>”.</p>

                        <p>Você também pode pressionar <strong>Ctrl+A</strong> para selecionar folhas inteiras ou indo em <strong>Editar</strong> → <strong>Selecionar tudo</strong>.</p>

                        <div class="text-center">
                            <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 04 - </strong>Seleção de Planilha</p>
                        </div>

                        <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
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
                <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico02.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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