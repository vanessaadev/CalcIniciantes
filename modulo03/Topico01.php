<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
?>
<?php
$page = 'Topico01';
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
                            <p class="Titulo">Formatações Condicionais, Filtros e Classificação</p>
                            <hr>
                            <p><strong>Objetivo:</strong> Praticar a construção de planilhas eletrônicas no LibreOffice Calc, fazendo uso dos conceitos de formatações condicionais, filtros e classificações.</p>
                            <br>
                            <!-- Sub Título -->
                            <p class="SubTitulo"> Formatação Condicional </p>
                            <hr>
                            <div class="col-md-12">
                                <p>Recurso muito útil em uma planilha, a Formatação Condicional faz, como o próprio nome sugere, a formatação das células selecionadas de acordo com regras lógicas, estabelecidas pelo usuário. Uma <strong>diferença funcional entre o Calc e o Excel</strong> é que utilizamos Estilos para formatar condicionalmente no Calc, mas isso não acontece no Excel. Desse modo, a formatação condicional no Excel é mais fácil, mais direta. Porém, se quisermos modificar somente o estilo das células afetadas pela formatação condicional, o Calc é uma <em>“mão na roda”</em>, pois podemos manipular o estilo de acordo com a nossa vontade aplicando diferentes formatações de acordo com cada condição preestabelecida por nós. </p>

                                <p>Podemos ter uma planilha de notas de alunos em que, por exemplo, as notas iguais ou maiores que 7 (sete) sejam realçadas em amarelo (plano de fundo) com azul-escuro na cor da fonte. Primeiro, geraremos a nossa planilha fictícia e injetaremos nela alguns nomes de alunos e suas respectivas notas.</p>

                                <p>Selecione o intervalo em que deverá ser inclusa a formatação, pode ser uma tabela inteira, uma coluna ou intervalo aleatório, a ser definido pelo usuário. O uso mais comum é o de colunas. Utilizaremos, como base para essa explicação, a tabela feita na aula 02.</p>

                                <p>Após a seleção dos dados, acesse o <strong>Menu → Formatar → Formatação Condicional</strong> ou clique no <strong>“Acesso Rápido”</strong>, localizado na barra de formatação. Será aberta uma caixa de diálogo da funcionalidade.</p>
                            </div>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Formatação Condicional">
                                </a>
                                <p class="FonteFigura"><strong>Figura 01</strong>: Formatação Condicional </p>
                            </div>
                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Formatação Condicional">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong> Fonte:</strong> EGPCE. </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <div class="col-md-12">
                                <p>É possível fazer vários tipos de formatações, utilizando por exemplo:</p>
                                <ul class="none Texto">
                                    <li><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Condição;</li>
                                    <li><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Escala de Cores;</li>
                                    <li><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Barra de dados;</li>
                                    <li><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Conjunto de ícones e de datas.</li>
                                </ul>
                                <p>A formatação é realizada com base nos valores das células, ou seja, será possível incluir critérios para definir em quais valores será aplicada a formatação especificada. Uma vez feita a definição de intervalo, será aberto um combo para selecionar o critério (valor igual a, maior que, entre e várias outras opções), a caixa de formatação irá se ajustar para inclusão dos dados de acordo com a opção do critério. </p>

                                <p>Queremos marcar as notas que forem maiores ou iguais a 7, conforme imagem a seguir: </p>
                            </div>
                            <br>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura02.png" alt="Condição: o valor da célula é.">
                                </a>
                                <p class="FonteFigura"><strong>Figura 02:</strong> Condição: o valor da célula é. </p>
                            </div>
                            <!-- Imagem 02 - MODAL -->
                            <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura02.png" alt="Condição: o valor da célula é.">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong> Fonte:</strong> EGPCE. </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 02 - End -->

                        <div class="col-md-12">
                            <p>Uma vez definido o intervalo e o critério de formatação, efetue a seleção de estilo a ser aplicado. Há várias opções de formatação preestabelecida, mas é possível adicionar novos estilos, selecionando a opção <strong>“Novo estilo”</strong>. Ao selecionar, será aberta uma janela de formatação e com ela você consegue realizar as devidas mudanças que necessita. No caso, em <strong>“Efeito da Fonte”</strong>, alteramos a cor da fonte, e em “<strong>Plano de fundo</strong>” alteramos a cor de fundo da célula. </p>                        
                            <div class="card" style="background: #ece8c1c5;">
                                <div class="card-body">
                                <p><strong>Clique abaixo e veja um vídeo explicativo - Aplicação de formatação condicional:</strong></p>
                                    <!-- VÍDEO -->
                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-E9C35Gbcj8"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Topico01.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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