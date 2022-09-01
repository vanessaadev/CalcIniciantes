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

                        <p class="SubTitulo">Trabalho com Folhas de Cálculo</p>
                        <hr>

                        <p class="SubSubTitulo">Inserir Novas Folhas</p>
                        <hr>

                        <p>Há várias maneiras de inserir uma folha na planilha:</p>
                        
                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Clique em <strong>Planilha → Inserir Planilha</strong> na Barra de menu;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ou clique com o botão direito do mouse e escolha a opção <strong>Inserir Planilha</strong> no menu de contexto;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ou clique no sinal “+” localizado na parte inferior esquerda da tabela.</li><br>
                        </ul>

                        <div class="text-center">
                            <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 09 - </strong>Inserir planilha</p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>Veja na imagem 10, a caixa de diálogo <strong>Inserir Planilha</strong>. Nela, você pode escolher se as novas folhas serão inseridas antes ou depois da folha selecionada, e quantas folhas quer inserir. Se você for inserir apenas uma folha, existe a opção de dar-lhe um nome.</p>

                        <div class="text-center">
                            <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 10 - </strong>Caixa de diálogo inserir planilha</p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <p class="SubSubTitulo">Apagar Folhas</p>
                        <hr>

                        <p>As folhas podem ser apagadas individualmente ou em grupos.</p>

                        <p><strong>Folha única:</strong> clique com o botão direito na aba da folha que quer apagar e clique em Excluir Planilha no menu de contexto, ou clique em <strong>Planilha → Excluir planilha</strong> na barra de menu.</p>

                        <p><strong>Múltiplas folhas:</strong> selecione-as utilizando o botão esquerdo do mouse e a tecla CTRL, e clique com o botão direito do mouse sobre uma das abas e escolha a opção “Excluir Planilha” no menu de contexto, ou clique em “<strong>Planilha→ Excluir planilha</strong>” na barra de menu.</p>

                        <br>
                        <p class="SubSubTitulo">Renomear Folhas</p>
                        <hr>

                        <p>O nome padrão para uma folha nova é <strong>PlanilhaX</strong>, onde <strong>X</strong> é um número. Apesar disso funcionar para pequenas planilhas com poucas folhas, pode tornar-se complicado quando temos muitas folhas.</p>

                        <p>Para colocar um nome mais conveniente a uma folha, você pode:</p>
                        
                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Digitar o nome na caixa Nome, quando você criar a folha, ou;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Clicar com o botão direito do mouse e escolher a opção <strong>Renomear Planilha</strong> no menu de contexto e trocar o nome atual por um de sua escolha.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Clicar duas vezes na aba da folha para abrir a caixa de diálogo <strong>Renomear Planilha</strong>.</li>
                        </ul>

                        <br>
                        <p class="SubSubTitulo">Excluir (Deletar) Conteúdo de Uma Planilha</p>
                        <hr>

                        <p>Para <strong>apagar</strong> a célula, basta pressionar a tecla “Delete”. Será apagado somente o conteúdo da célula e não a formatação existente nela.</p>

                        <p>Para escolher as opções de exclusão de conteúdo (formatação), selecione a(s) célula(s) desejada(s) e clique com o botão direito do mouse. Escolha a opção de “<strong>Limpar conteúdo</strong>”, surgirá então uma nova janela com as opções:</p>
                        
                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> <strong>Excluir todas:</strong> exclui todo o conteúdo da célula, independentemente de qual seja;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> <strong>Números:</strong> apenas os números serão excluídos;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> <strong>Texto:</strong> se houver letras e números selecionados, apenas as “letras” serão excluídas;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.1s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> <strong>Fórmulas:</strong> apenas fórmulas serão excluídas;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.4s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> <strong>Formatos:</strong> apenas a formatação (tipo de letra, tamanho de letra, cor etc) será excluída;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.7s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> <strong>Objetos:</strong> exclui apenas objetos (figuras, formas ou botões).</li>
                            <li class="wow fadeInLeft" data-wow-delay="2s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> <strong>Datas e horas:</strong> apenas formatos de data e horas serão excluídos.</li>
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
                <a href="Topico02.4.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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