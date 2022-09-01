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

                        <h2 class="Titulo">Prática</h2>
                        <hr>

                        <p><strong>Objetivo:</strong>  Praticar a construção de planilhas eletrônicas no LibreOffice Calc, fazendo uso dos conceitos aprendidos até o momento.</p>
                        <p>Vamos relembrar!</p>

                        <!-- Pratique -->

                        <div class="PratiqueCaixa">
                            <p class="PratiqueTitulo"> Pratique</p>
                            <div class="PratiqueTexto">
                                <p>Com os conceitos aprendidos na aula 01, abra seu LibreOffice Calc, digite e resolva a planilha que segue.</p>
                                <!-- Titulo Figura -->

                                <div class="text-center">
                                    <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                        <img class="img-fluid " src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong>Figura 01</strong>: Exercicio 01</p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte :</strong> EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->
                            </div>
                        </div> 
                        <br>
                        <!-- SubTítulo -->
                        <h2 class="SubTitulo">Referenciamento Relativo x Referenciamento Absoluto</h2>
                        <hr>
                        <p>Um recurso presente em qualquer planilha é o endereçamento ou referenciamento relativo. Dá-se o nome de <strong>referenciamento relativo</strong> ao ato de atribuir, por exemplo, <strong>“=A2+1”,</strong> na célula <strong>“a5” </strong>(repare que as planilhas são insensíveis à caixa, ou seja, podemos grafar os nomes das células em caixa-alta ou caixa-baixa, sem problemas) e se copiar a fórmula para a célula <strong>“A6”,</strong> esta referenciará o valor <strong>“=A3+1”</strong> (observe o incremento na fórmula). Nem sempre esse é o comportamento desejável.</p>
                        <p>Por exemplo, digamos que estamos a fazer uma simulação da venda de um carro, em dólar e em reais. Para referenciar o preço do dólar na planilha, é fundamental que este não mude, ou seja, esse preço é uma constante, para a planilha atual. É aí que entra o <strong>endereçamento absoluto:</strong> o Sistema deve apontar para o valor do dólar sem incrementar o seu valor referencial na planilha.</p>
                        <p>Para se referenciar, de modo absoluto, qualquer endereço na planilha eletrônica, basta colocar um <strong>$ (cifrão)</strong> antes da coordenada a ser referenciada. Por exemplo, para uma fórmula apontando para a célula <strong>“B2”,</strong> usa-se a sintaxe: <strong>“$B$2”.</strong> Somente isso! É possível se referenciar, absolutamente, somente a coluna, somente a linha do endereçamento ou ambos, o que é bastante comum.</p>
                        <!-- Figura do lado do texto-->

                        <div class="row">
                            <div class="col-md-6">
                                <p class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">
                                O atalho para o Referenciamento Absoluto no Calc é <strong>F4.</strong> Lembramos mais uma vez que o Calc é multiplataforma, daí os atalhos nem sempre coincidirem com aqueles da ferramenta proprietária. Você também encontra essa funcionalidade indo no menu <strong>“Planilha → Circular entre tipos de referências de células”.</strong>
                                </p>
                                <p class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">
                                Claro que se pode editar, manualmente, a fórmula e colocar o símbolo de absolutização <strong>(“$”)</strong> no lugar apropriado.
                                </p>
                                
                            </div>
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura img-fluid wow fadeInLeft"><strong>Figura 02:</strong> Referenciamento de célula</p>
                                    </a>
                                </div>

                                <!-- Imagem 02 - MODAL -->
                                <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura img-fluid "><strong>Fonte :</strong>EGPCE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 02 - End -->
                            </div>
                        </div>
                        <!--Fim figura/texto div-->
                        <br>
                        <!-- Pratique -->

                        <div class="PratiqueCaixa">
                            <p class="PratiqueTitulo"> Pratique</p>
                            <div class="PratiqueTexto">
                                <p><strong>Dica 1:</strong> O valor total deverá ser calculado de acordo com a quantidade e o valor unitário de cada item.</p>
                                <!-- Titulo Figura -->

                                <div class="text-center">
                                    <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                        <img class="img-fluid " src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong>Figura 03:</strong> Exercicio 02</p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte :</strong> EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->
                            </div>
                        </div>
                        <br>
                        <!-- Pratique -->
                        <div class="PratiqueCaixa">
                            <p class="PratiqueTitulo"> Pratique</p>
                            <div class="PratiqueTexto">
                                <p>Agora é com você! Coloque em prática tudo que aprendeu até o momento. Use a melhor e mais potente ferramenta de todos os tempos: sua capacidade de pensar! Dedos ao teclado!</p>
                                <!-- Titulo Figura -->

                                <div class="text-center">
                                    <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                        <img class="img-fluid " src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong>Figura 04:</strong> Exercicio 03</p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte :</strong> EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->
                                <p><strong>Venda=</strong> valor unitário do produto + % de lucro.</p>
                                <p><strong>Lucro Total =</strong> Quantidade de produtos do estoque * o lucro por produto.</p>
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
            <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
            <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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