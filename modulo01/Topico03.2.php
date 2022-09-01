<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03';
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <style>
        .BCorEad {
            Background: #4885AE;
        }

        .textmiddle {
            vertical-align: middle !important;
            text-align: center !important;
        }
    </style>

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
                    <!-- Begin col-md-10 -->
                    <div class="page-title">

                        <p class="SubTitulo"> Formatação de Dados</p>
                        <hr>

                        <p>Os dados no Calc podem ser formatados de várias maneiras. Eles tanto podem ser editados como parte do estilo da célula, e assim a formatação é aplicada automaticamente, quanto podem ser aplicados manualmente à célula. Algumas formatações manuais podem ser aplicadas utilizando-se os ícones da barra de ferramentas. Para um controle maior e opções extras, selecione a célula e clique com o botão direito sobre ela, e selecione Formatar células. Todas as opções de formatação serão tratadas abaixo.</p><br>

                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Mesclar células</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Um recurso útil do Calc é a possibilidade de mesclar várias células contíguas para formar um título de uma folha de planilha, por exemplo. Para isso, selecione as células contíguas a serem mescladas e vá em "<em>Formatar → Mesclar células → Mesclar células” <strong>ou</strong> “Formatar → Mesclar células → Mesclar e centralizar células</em>", para centralizar e mesclar.</p>
                                        <div class="PratiqueCaixa">
                                            <p class="PratiqueTitulo"> Pratique</p>
                                            <div class="PratiqueTexto">
                                                <p>Uma maneira rápida e fácil de aplicar o recurso de mesclagem de células é procurar o atalho <img src="imagens\mesclar.png" alt="">, localizado na barra de formatação. Por padrão, ele mescla e centraliza o conteúdo.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Ferramenta pincel de estilo</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Serve para copiar a formatação para outras células da mesma planilha ou para outras planilhas.</p>
                                        <p>Para copiar o estilo de uma célula, clique uma vez no <img src="imagens\pincel.png" alt="">, localizado na barra de formatação. Em seguida, clique na célula a ser formatada.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Inserir uma anotação (comentário)</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>As células podem conter observações de outros usuários ou lembretes que ficam ocultos, isto é, não são impressos. Uma célula contendo uma anotação apresenta um pequeno <span style="color:#ef6e00">triângulo vermelho</span> no canto superior direito.</p>
                                        <p>Para inserir uma anotação, clique com o botão direito do mouse na célula que conterá a anotação e selecione a opção <strong>Inserir anotação</strong> ou pressione <strong>Ctrl + Alt + C</strong>. Em seguida, digite o texto e clique fora da caixa de texto quando tiver terminado.</p>
                                        <p>Para visualizar a anotação, basta posicionar o ponteiro do mouse em cima do <span style="color:#ef6e00">triângulo vermelho</span>. Você pode ainda clicar com o botão direito sobre a célula que possui a anotação e clicar em “<strong>Mostrar anotação</strong>” para deixá-la sempre a amostra ou clicar em <strong>Excluir anotação</strong> para excluí-la.</p>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>

                        <br>
                        <p class="SubSubTitulo"> Formatação de Linhas de Texto</p>
                        <hr>

                        <p>Múltiplas linhas de texto podem ser inseridas em uma única célula, utilizando a quebra automática de texto, ou quebras manuais de linha. Cada um desses métodos é útil em diferentes situações.</p>

                        <div class="text-center">
                            <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura12.png" alt="">
                            </a>
                            <p class="FonteFigura"><strong>Figura 12 - </strong>Quebra de linha em células.</p>
                        </div>

                        <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura12.png" alt="">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte: </strong>Guia de Introdução às Funções do LibreOffice Calc</p>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <br>
                        <p class="SubSubTitulo"> Utilizando a Quebra Automática de Texto</p>
                        <hr>

                        <p>Para configurar a quebra automática no final da célula, clique com o botão direito nela e selecione a opção <strong>Formatar Células</strong> (ou clique em <strong>Formatar → Células</strong> na barra de menu, ou pressione Ctrl+1). Na aba <strong>Alinhamento</strong> embaixo de <strong>Propriedades</strong>, selecione <strong>Disposição automática</strong> de texto e clique em <strong>OK</strong>.</p>

                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p>Ainda dentro da caixa de formatação de células, ao selecionar <strong>Disposição automática de texto</strong>, fica disponível o recurso <strong>Hifenização ativa</strong> que adiciona um "-" quebrando além da linha, também a palavra, quando ela não couber toda de uma vez.</p>
                            </div>
                        </div>

                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Uma maneira rápida e fácil de aplicar o recurso recurso de quebra de linha automática, é procurar o atalho <img src="imagens\quebral.png" alt="">, localizado na barra de formatação. Por padrão, ele quebra a linha mas não hifeniza.</p>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="imagens/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura13.png" alt="">
                            </a>
                            <p class="FonteFigura"><strong>Figura 13 - </strong>Formatar Células.</p>
                        </div>
                        
                        <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura13.png" alt="">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <p class="SubSubTitulo"> Utilizar Quebras Manuais de Linha</p>
                        <hr>

                        <p>Para inserir uma quebra manual de linha, enquanto digita dentro de uma célula, pressione <strong>Ctrl+Enter</strong>. Quando for editar o texto, primeiro clique duas vezes na célula, depois clique na posição em que você quer quebrar a linha. Quando uma quebra manual de linha é inserida, a largura da célula não é alterada.</p>

                        <br>
                        <p class="SubSubTitulo"> Encolher o Texto para Caber na Célula</p>
                        <hr>

                        <p>O tamanho da fonte pode ser ajustado automaticamente para caber na célula. Para isso, clique com o botão direito na célula a ser formatada e clique em <strong>Formatar Células → na aba Alinhamento</strong>. Marque então o campo <strong>Reduzir para caber na célula</strong>.</p>

                        <br>
                        <p class="SubSubTitulo"> Formatação de Largura da Coluna</p>
                        <hr>

                        <p>A largura da coluna pode ser ajustada automaticamente, para que consigamos visualizar todo o conteúdo da célula. Para isso, clique com o botão direito na coluna a ser formatada e clique em <strong>Largura ideal da coluna</strong>. Aceite, clicando em <strong>OK</strong>.</p>

                        <div class="text-center">
                            <a href="imagens/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura14.png" alt="">
                            </a>
                            <p class="FonteFigura"><strong>Figura 14 - </strong>Largura da coluna</p>
                        </div>
                        
                        <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura14.png" alt="">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte: </strong>Guia de Introdução às Funções do LibreOffice Calc</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p>Uma outra maneira de ajustar a largura da coluna é dar um duplo clique com o mouse na linha que separa as colunas:</p>
                                <img src="imagens/larguraC.png" alt="">
                            </div>
                        </div>

                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p><strong>Você realizou seu cálculo e na célula selecionada, ao receber o resultado, se deparou com um conjunto de "#########"? O que será que houve? Será que a fórmula foi digitada de maneira incorreta?<br>Calma, você provavelmente digitou a fórmula correta sim! Esse conjunto de "########" aparece quando a largura da célula está menor do que o resultado final. Para corrigir, basta alterar a largura da coluna para um valor maior.</strong></p>
                            </div>
                        </div>

                        <br>
                        <p class="SubSubTitulo"> Formatação de Números</p>
                        <hr>

                        <p>Vários formatos diferentes de números podem ser aplicados às células através dos ícones da Barra de ferramentas de formatação. Selecione a célula, e clique no ícone desejado.</p>

                        <div class="text-center">
                            <a href="imagens/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 15 - </strong>Ícones de formatação numérica. Da esquerda para a direita: moeda, porcentagem, data, exponencial, padrão, adiciona casa decimal, exclui casa decimal. </p>
                        </div>

                        <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>Para um melhor controle ou para selecionar outros formatos numéricos, utilize a <strong>aba Números</strong> da caixa de diálogo <strong>Formatar Células</strong>:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Aplique qualquer um dos tipos de dados na lista Categoria aos dados;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Controle o número de casas decimais e de zeros à esquerda;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Entre com um formato numérico personalizado.</li><br>
                        </ul>

                        <div class="text-center">
                            <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 16 - </strong>Formatação de células no formato de números.</p>
                        </div>
                        
                        <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <p class="SubSubTitulo"> Formatação de Fontes</p>
                        <hr>

                        <p>Para escolher rapidamente a fonte a ser utilizada na célula, selecione a célula, e clique na seta próxima à caixa <strong>Nome da Fonte</strong> na Barra de Ferramentas de Formatação e escolha uma fonte da lista.</p>

                        <p>Para escolher o tamanho da fonte, clique na seta, ao lado da caixa <strong>Tamanho da Fonte</strong>, na <strong>Barra de Ferramentas de Formatação</strong>. Para outras formatações, você pode utilizar os ícones de , <em>Itálico</em>, ou <u>Sublinhado</u>.</p>

                        <p>Para escolher a cor da fonte, clique na seta ao lado do ícone “<strong>Cor da fonte</strong>” para exibir a paleta de cores. Clique na cor desejada.</p>

                        <p>Para especificar um idioma para a célula (útil, pois permite que diferentes idiomas possam compartilhar o mesmo documento e ser verificados ortograficamente de maneira correta), utilize a aba Fonte da caixa de diálogo <strong>Formatar Células</strong>. Utilize a aba <strong>Efeitos da Fonte</strong> para ajustar outras características.</p>

                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p>Na barra de ferramentas do Calc, você consegue realizar as principais formatações como: mudança de fonte, tamanho, cor, etc.</p><br>
                                <div class="text-center">
                                    <a href="imagens/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura17.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong>Figura 17 - </strong>Formatação de células</p>
                                </div>
                                
                                <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura17.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <p class="SubSubTitulo">Formatação de Bordas da Célula</p>
                        <hr>

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <p class="wow fadeInUp" data-wow-delay="0.5s">Para adicionar uma borda a uma célula (ou grupo de células selecionadas), clique no ícone de Bordas na Barra de ferramentas de formatação, e selecione uma das opções de bordas mostradas na paleta.</p>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="text-center wow fadeInDown">
                                    <a href="imagens/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18">
                                        <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s"  class="img-fluid" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura wow fadeInDown"><strong>Figura 18 - </strong>Formatando bordas das células.</p>
                                    </a>
                                </div>
                                <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>Para escolher rapidamente um estilo de linha para a borda da célula, clique na pequena seta próxima aos ícones de Estilo da Linha e Cor da Linha, na Barra de ferramentas de formatação. Nos dois casos, uma paleta de opções será exibida.</p>

                        <p>Para mais controles, incluindo o espaçamento entre as bordas das células e o texto, utilize a aba <strong>Bordas na caixa de diálogo Formatar Células</strong>. Lá, também, é possível definir uma sombra.</p>

                        <br>
                        <p class="SubSubTitulo">Formatação do Plano de Fundo da Célula</p>
                        <hr>

                        <p>Para escolher rapidamente uma cor para o plano de fundo da célula, clique na pequena seta ao lado do ícone “<strong>Cor do plano de fundo</strong>”, na Barra de ferramentas de formatação. Uma paleta de opções de cores, semelhante à paleta de Cores da fonte, é exibida. É possível, também utilizar a aba Plano de fundo da caixa de diálogo “<strong>Formatar Células</strong>”.</p>

                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p><strong style="font-weight:bolder">Salvar um documento</strong><hr><br>O "<strong>Salvar</strong>" e "<strong>Salvar Como</strong>" existem na maioria dos programas como: Office, Corel Draw, Photoshop, entre outros.<br>Para <strong>salvar</strong> a planilha temos três opções: a primeira é clicar no menu “<strong>Arquivo</strong>” e em seguida “<strong>Salvar</strong>”. Já a segunda opção é por meio do botão da barra padrão, com o ícone. A terceira é com a tecla de atalho “<strong>CTRL+ S</strong>”.<br>"<strong>Salvar</strong>" e "<strong>Salvar Como</strong>" têm a finalidade de salvar, mas o uso dessas funções vai depender da situação:<br>Utilizamos o “<strong>Salvar Como</strong>” quando precisamos dar um nome ao arquivo (ou substituir o nome) e dizer ao programa onde este arquivo será gravado (pasta, unidade ou diretório). Usamos o Salvar (<strong>Arquivo – Salvar</strong>) para atualizar as alterações feitas em seu arquivo.</p>
                            </div>
                        </div>

                        <div class="PratiqueCaixa">
                            <p class="PratiqueTitulo"> Pratique</p>
                            <div class="PratiqueTexto">
                                <p>Vamos agora colocar em prática os conceitos aprendidos até o momento. Abra seu LibreOffice Calc e digite a planilha abaixo:</p><br>
                                <div class="text-center">
                                    <a href="imagens/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong>Figura 19 - </strong>Exercício 1</p>
                                </div>

                                <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>Na próxima aula, abordaremos as funções que estão disponíveis no Calc. Não acumule conteúdo e mantenha seus estudos em dia!</p>



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

                    </div> <!-- CLASS PAGE TITLE FIM -->
                </div> <!-- End col-md-10 -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Referencias.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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