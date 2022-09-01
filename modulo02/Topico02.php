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

                        <h2 class="Titulo">Funções (Parte I)</h2>
                        <hr>

                        <p><strong>Objetivo:</strong>  Praticar a construção de planilhas eletrônicas, fazendo uso das principais funções básicas disponíveis no LibreOffice Calc.</p>
                        <br>
                        <!--SubTitulo-->
                        <p class="SubTitulo">Funções (Parte I)</p>
                        <hr>
                        <p>O LibreOffice Calc possui inúmeras funções, com as mais diversas utilidades e níveis de dificuldades distintas. Essas funções são separadas pelas seguintes categorias:</p>
                        <!-- Figura do lado do texto-->

                        <div class="row">
                            <div class="col-md-6">
                                <!-- LISTA EM MOVIMENTO-->
                                <div>
                                    <ul class="none">
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Banco de dados;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Data e hora;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Financeiras;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Informações Lógicas;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Matemáticas;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Matriciais;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="2.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Estatísticas;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="2.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Planilha;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="2.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Texto; e</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="3.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Suplemento.</li>

                                    </ul>
                                </div>
                                <p>A imagem acima nos traz a tela do <strong>“Assistente de Funções”.</strong> Para acessá-lo, clique no Menu Inserir e depois em Função ou no atalho <strong>"Ctrl + F2",</strong> ou ainda clicando no ícone <strong>(Fx),</strong> localizado na barra de cálculo.</p>
                                
                            </div>
                            
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                        <img class="img-fluid wow fadeInRight" width="500" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura img-fluid wow fadeInLeft"><strong>Figura 05 :</strong> Assistente de Funções. </p>
                                    </a>
                                </div>

                                <!-- Imagem 02 - MODAL -->
                                <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
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
                        <br><br>   
                        
                        <p>Perceba que ao selecionar uma categoria, o assistente mostra apenas as funções que pertencem àquela categoria. Além disso, existem também as opções <strong>"Todas",</strong> que mostra a lista completa independentemente de categoria, e <strong>“Recém Utilizadas”,</strong> que mostra apenas as que foram usadas recentemente. Durante a nossa aula, veremos algumas das funções mais utilizadas em planilhas eletrônicas.</p>
                        
                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Soma</p>
                        <hr><br>
                        <!-- Figura do lado do texto-->

                        <div class="row">
                            <div class="col-md-6">
                                <p class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">
                                Uma das funções mais utilizadas em planilhas eletrônicas é a função de <strong>SOMA.</strong> Tanto é que, ao abrir o Calc, você verá um botão com o símbolo <strong>Σ,</strong> localizado na barra de cálculos.
                                </p>
                                <p class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">
                                No exemplo ao lado, perceba que a coluna <strong>“Nota Total”</strong> está em branco. Poderíamos somar com uma calculadora ou até mesmo , os valores de cada nota, mas isso nos tomaria muito tempo, pois, o Calc faz isto para nós de maneira rápida e eficaz.
                                </p>
                                
                            </div>
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura img-fluid wow fadeInLeft"><strong>Figura 06:</strong> Exemplo de Soma.</p>
                                    </a>
                                </div>

                                <!-- Imagem 02 - MODAL -->
                                <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
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
                        <p>Selecione a célula abaixo de Nota Total (basta dar um clique simples sobre a célula) e aperte o botão <strong>Σ.</strong></p>
                        <p>Repare abaixo que o Calc, automaticamente, selecionou as células que contêm as notas do aluno da linha 6. Na célula D6, está mostrando que ali será aplicada a função <strong>=SOMA(A6:C6).</strong> Aperte a tecla <strong>“Enter”</strong> ou pressione o botão <strong>“Aceitar”</strong> (seta azul).</p>
                        <br>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura img-fluid wow fadeInLeft"><strong>Figura 07:</strong> Exemplo de Soma.</p>
                            </a>
                        </div>

                        <!-- Imagem 02 - MODAL -->
                        <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura img-fluid "><strong>Fonte :</strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 02 - End -->
                        <br>
                        <p>Antes de mais nada, vamos entender a função <k class="CorLaranja">=SOMA(B2:D2)</k>
                        </p>
                        <!-- LISTA EM MOVIMENTO-->
                        <div>
                            <ul class="none">
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Toda função começa com o sinal de = (igualdade);</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Logo após o sinal de igualdade, vem o nome da função SOMA;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Em seguida, abre-se parênteses e se coloca o intervalo de células, que deverão ser somadas pela função.</li>                              
                            </ul>
                        </div>
                        <br>
                        <!-- Saiba Mais -->

                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p><strong>Devemos utilizar “ : ” (dois pontos)</strong> , quando estamos nos referindo a um intervalo contínuo de células, que se encontram na mesma linha ou na mesma coluna;</p>
                                <p><strong>Devemos utilizar “ ; ” (ponto e vírgula)</strong>, quando estamos nos referindo a duas células distintas.</p>
                                </div>
                        </div>
                        <br>
                        <p>E as demais notas?</p>
                        <p>Simples, podemos repetir o processo para as demais notas. Você não concorda?</p>
                        <p>No caso dessa planilha em específico, por ter uma quantidade de linhas relativamente, pouca, seria muito simples repetir o processo. Porém, imagine se fossem duas mil notas. Já não seria tão simples, não é mesmo?</p>
                        <!-- Figura do lado do texto-->

                        <div class="row">
                            <div class="col-md-6">
                                <p>Para esses casos, existe um recurso de copiar função conhecido por alça de preenchimento <strong>(minúsculo quadradinho preto localizado no canto direito inferior da célula).</strong> Posicione o mouse sobre ele e perceba que o ponteiro se transformará em uma cruz. Neste momento, clique e mantenha o botão (esquerdo) de seleção do mouse pressionado, arraste o mouse para baixo até cobrir todas as células, para as quais você deseja que a função seja copiada, ou seja, no nosso caso até a célula <strong>D15.</strong> Então, solte o botão do mouse e está feito.</p>
                            </div>
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/figura07.1.png" data-bs-toggle="modal" data-bs-target="#Imagem071">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/figura07.1.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura img-fluid wow fadeInLeft"><strong>Figura 07.1 :</strong> Alça de preenchimento </p>
                                    </a>
                                </div>

                                <!-- Imagem 02 - MODAL -->
                                <div class="modal fade text-center" id="Imagem071" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/figura07.1.png" alt="Alt da imagem fica aqui">
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
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/figura08.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura img-fluid wow fadeInLeft"><strong>Figura 08 :</strong> Alça de preenchimento </p>
                            </a>
                        </div>

                        <!-- Imagem 02 - MODAL -->
                        <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/figura08.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura img-fluid "><strong>Fonte :</strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 02 - End -->
                        <p>O Calc entendeu que queríamos realizar o mesmo cálculo de soma nas células abaixo e copiou a função para nós, alterando o <strong>“valor do intervalo de células”,</strong> que seria somado. Para confirmar a informação, clique na célula <strong>D7,</strong> por exemplo, e perceba que a função <strong>SOMA</strong> nesta célula está assim <strong>=SOMA(A7:C7).</strong></p>
                        <br>
                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Funções de DATA e HORA</p>
                        <hr><br>


                        <div class="col-md-12">
                            <center> <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6></center><br>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item"><a style="font-weight: bold !important;" class=" CorVerdeClaroEstado nav-link active" id="Id_Impostos" data-toggle="pill" href="#Btnnav21" role="tab" aria-selected="true">AGORA</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav22" role="tab" aria-selected="false">MÊS</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav23" role="tab" aria-selected="false">HOJE</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav24" role="tab" aria-selected="false">ANO</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav25" role="tab" aria-selected="false">DIA</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav26" role="tab" aria-selected="false">DOMINGODEPÁSCOA</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav27" role="tab" aria-selected="false">FIMMÊS</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav28" role="tab" aria-selected="false">ÉANOBISSEXTO</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav29" role="tab" aria-selected="false"> DIATRABALHOTOTAL / DIASÚTEISTOTAIS</a></li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="Btnnav21" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>A função <strong>AGORA()</strong> retorna a data e a hora atual do sistema. Se, por exemplo, hoje é o dia <strong>31/01/2017</strong> e, no momento, são <strong>09:25:10</strong>, a função <strong>=AGORA()</strong> retornará <strong>31/01/17 09:25</strong>.</p>
                                    <p>Toda vez que o arquivo é aberto ou que o usuário clica em <strong>F9</strong> (função Recalcular) a função <strong>AGORA</strong> é recalculada. É importante saber que o resultado dessa função pode ser formatado através do menu <strong>Formatar → Células</strong>.</p>
                                </div>
                                <div class="tab-pane fade " id="Btnnav22" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>Retorna o mês de uma data fornecida. O formato da função é: <strong>=MÊS(DATA)</strong></p>
                                    <p>Onde <strong>Data</strong> é uma data qualquer entre “aspas duplas” ou um endereço de uma célula que contenha uma data.</p>
                                    <p><strong>=MÊS("19/12/1970")</strong></p>
                                    <p>O resultado da fórmula acima com a função MÊS será 12.</p>
                                </div>
                                <div class="tab-pane fade " id="Btnnav23" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>A função <strong>HOJE()</strong> retorna a data atual do sistema.</p>
                                    <p>Se, por exemplo, hoje é o dia <strong>31/01/2017</strong>, a função <strong>=HOJE()</strong> retornará <strong>31/01/17</strong>.</p>
                                    <p>Toda vez que o arquivo é aberto ou que o usuário clica em <strong>F9</strong> (função Recalcular), a função <strong>HOJE</strong> é recalculada. O resultado da função pode ser formatado através do menu <strong>Formatar → Células</strong>.</p>
                                </div>
                                <div class="tab-pane fade " id="Btnnav24" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>Retorna o ano de uma data fornecida. O formato da função é: <strong>=ANO(DATA)</strong></p>
                                    <p>Onde <strong>Data</strong> é uma data qualquer entre “aspas duplas” ou um endereço de uma célula que contenha uma data.</p>
                                    <p><strong>=ANO("19/12/1970")</strong></p>
                                    <p>O resultado da fórmula acima com a função ANO será 1970.</p>
                                </div>
                                <div class="tab-pane fade " id="Btnnav25" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>Retorna o dia de uma data fornecida. O formato da função é: <strong>=DIA(DATA)</strong></p>
                                    <p>Onde <strong>Data</strong> é uma data qualquer entre “aspas duplas” ou um endereço de uma célula que contenha uma data.</p>
                                    <p><strong>=DIA("19/12/1970")</strong></p>
                                    <p>O resultado da fórmula acima com a função DIA será 19.</p>
                                </div>
                                <div class="tab-pane fade" id="Btnnav26" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <p>Retorna a data do domingo de páscoa a partir de um <strong>ANO</strong> inserido como argumento. O formato da função é:</p>
                                    <center><p><strong>=DOMINGODEPÁSCOA(ANO)</strong></p></center> 
                                    <center><p><strong>=DOMINGODEPÁSCOA(2017)</strong> <br> resulta em 16/04/17.</p></center> 
                                    <br /><br />
                                </div>
                                <div class="tab-pane fade" id="Btnnav27" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <p>A função <strong>FIMMÊS</strong> possui a seguinte sintaxe: <strong>=FIMMÊS(DATA_REFERÊNCIA; MESES)</strong></p>
                                    <p>Retorna a data do último dia do mês indicado pelo número de MESES a partir da DATA_REFERÊNCIA. <strong>MESES</strong> pode ser um número negativo, se quisermos a data final N meses antes da <strong>DATA_REFERÊNCIA</strong>, ou um número positivo, se quisermos a data final N meses depois da DATA_REFERÊNCIA.</p>
                                    <p>Por exemplo, se quisermos saber a data final do mês de fevereiro de 2017, podemos utilizar:</p>
                                    <p><strong>=FIMMÊS("01/02/2017";0)</strong></p>
                                    <p>Cujo resultado é: <strong>28/02/17</strong></p>
                                    <p>e quisermos saber a data do final do mês, seis meses depois da data atual, usamos: <strong>=FIMMÊS(HOJE();6)</strong></p>
                                    <p>A função HOJE() retorna à data do dia atual e 6 representa o número de meses após a data de hoje.</p>
                                    <br /><br />
                                </div>
                                <div class="tab-pane fade" id="Btnnav28" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <p>A função <strong>ÉANOBISSEXTO</strong> apresenta como resultado o valor <strong>VERDADEIRO (1)</strong>, se o ano da data inserida como argumento for um ano bissexto, ou <strong>FALSO (0)</strong>, se o ano da data inserida como argumento não for um ano bissexto.</p>
                                    <p><strong>=ÉANOBISSEXTO (DATA)</strong></p>
                                    <!-- Exemplo -->

                                    <div class="ExemploCaixa">
                                        <p class="ExemploTitulo"> Exemplo</p>
                                        <p class="ExemploTexto"><span>a. =ÉANOBISSEXTO(C5) retorna valor 0 quando a célula C5 possuir a data 01/01/1990.</span><br /> <span>b. =ÉANOBISSEXTO(C5) retorna valor 1 quando a célula C5 possuir a data 01/01/1996.</span><br> <span>b. =ÉANOBISSEXTO(C5) retorna valor 1 quando a célula C5 possuir a data 01/01/1996.</span></p>
                                    </div>                            
                                    <br><br>
                                </div>
                                <div class="tab-pane fade" id="Btnnav29" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <p>A partir da versão 3.1 a função DIASÚTEISTOTAIS passou a ser chamada de DIATRABALHOTOTAL. Independentemente do nome, o formato da função continuou o mesmo.</p>
                                    <p><strong>=DIATRABALHOTOTAL(DATA_INICIAL; DATA_FINAL; FERIADOS)</strong></p>
                                    <p>Onde:</p>
                                    <p><strong>DATA_INICIAL</strong> é a data a partir da qual os dias úteis serão contados;</p>
                                    <p><strong>DATA_FINAL</strong> é a data até onde os dias úteis serão contados.</p>
                                    <p><strong>FERIADOS</strong> é um intervalo de células em que serão indicadas as datas que não devem ser contabilizadas na contagem.</p>
                                    <p>Ou seja, a função DIATRABALHOTOTAL conta os dias úteis entre a data inicial e final, descontados os sábados, os domingos e os feriados indicados pelo usuário.</p>
                                    <p>Um exemplo interessante da função permite encontrarmos os dias de trabalho em cada mês do ano. Note que, inicialmente, definimos três intervalos: o intervalo de feriados, que é preenchido conforme as datas que identificaremos previamente; o intervalo de datas de início, que corresponde ao primeiro dia de cada mês; e o intervalo dos últimos dias de cada mês, calculado a partir da fórmula:</p>
                                    <center><p><strong>=FIMMÊS(DATA_INICIAL;0)</strong></p></center> 
                                    <p>A coluna Dias úteis é, por fim, obtida pelo cálculo da função DIATRABALHOTOTAL com os argumentos definidos para cada mês do ano. Ao final, podemos somar os resultados que teremos o número total de dias trabalhados no ano.</p>
                                    <!-- Titulo Figura -->

                                    <div class="text-center">
                                        <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                            <img class="img-fluid wow fadeInLeft" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura"><strong>Figura 09:</strong>  Função dos dias trabalhados. </p>
                                    </div>
                                    <!-- Imagem 01 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Fonte :</strong> Google</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Figura 01 - End -->                            
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Funções Estatísticas</p>
                        <hr><br>

                        <div class="col-md-12">
                            <center> <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6></center><br>

                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item"><a style="font-weight: bold !important;" class=" CorVerdeClaroEstado nav-link active" id="Id_Impostos" data-toggle="pill" href="#Btnnav30" role="tab" aria-selected="true">MÁXIMO</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav31" role="tab" aria-selected="false">MÍNIMO</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav32" role="tab" aria-selected="false">MÉDIA</a></li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="Btnnav30" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>Retorna o valor máximo (mais alto) encontrado dentro de um ou mais intervalos de células definidos como argumentos da função. Possui o formato:</p>
                                    <center><p><strong>=MÁXIMO(INTERVALOS)</strong> </p></center>
                                    <P>Na nossa tabela exemplo (imagem 08), ao calcularmos a nota máxima, utilizando o intervalo <strong>D6:D15,</strong>  o resultado será a nota <strong>9,7.</strong> </P>
                                </div>
                                <div class="tab-pane fade " id="Btnnav31" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>Retorna o valor mínimo (mais baixo) encontrado dentro de um ou mais intervalos de células definidos como argumentos da função. Possui o formato:</p>
                                    <center><p><strong>=MÍNIMO(INTERVALOS)</strong></p></center>
                                    <p>Na nossa tabela exemplo (imagem 08), ao calcularmos a nota máxima, utilizando o intervalo <strong>D6:D15,</strong>  o resultado será a nota <strong>0,4.</strong> </p>
                                </div>
                                <div class="tab-pane fade " id="Btnnav32" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>Essa função é utilizada para calcular a média de um intervalo de valores. A estrutura da função MÉDIA é:</p>
                                    <center><p></strong> =MÉDIA (INTERVALO_DE_VALORES)<strong></p></center> 
                                    <p>O intervalo de valores pode ser composto por intervalo de células (sequenciais ou não) ou números.</p>
                                    <!-- Exemplo -->
                                    <div class="ExemploCaixa">
                                        <p class="ExemploTitulo"> Exemplo</p>
                                        <p class="ExemploTexto">a. =MÉDIA(B11 : B19);<br>
                                        b. =MÉDIA(B11 ; B19);<br>
                                        c. =MÉDIA(5 ; 10).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr><br>
                        <!-- Dúvida  -->

                        <div class="DuvidaCaixa">
                            <p class="DuvidaTitulo"> Dúvida</p>
                            <p class="DuvidaTexto">Mas e se você quiser saber a segunda e a terceira maior nota de uma turma? Ou se você quiser saber o segundo valor mais baixo de um intervalo? </p>
                        </div>
                        <p>Para esses casos podemos utilizar as funções:</p>
                        <center><p><strong>=MAIOR(INTERVALO; POSIÇÃO)</strong><br><strong>=MENOR(INTERVALO; POSIÇÃO)</strong> </p></center>
                        <p>É interessante salientar a diferença entre a função MAIOR e a função MÁXIMO. A função MAIOR permite a flexibilidade de definirmos a posição na ordem de classificação do intervalo, enquanto a função MÁXIMO retorna apenas o maior valor no intervalo.</p>
                        <p>No caso da terceira maior nota na nossa planilha exemplo, aplicamos a seguinte fórmula:</p>
                        <center><p><strong>=MAIOR(D6:D15; 3)</strong></p></center>
                        <p>Onde <strong>“D6:D15”</strong>  representa o intervalo em que se quer realizar a busca e o “3” representa a posição, isto é, você está indicando que quer o 3º maior valor do maior para o menor.</p>
                        <p>O mesmo acontece com a função <strong>=MENOR().</strong></p>
                        <br>
                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo"> FATORIAL()</p>
                        <hr>
                        <p>O fatorial simples, nada mais é que o produto de um número e todos os seus antecessores, incluindo si próprio e excluindo o zero.</p>
                        <br>
                        <!-- Exemplo -->
                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <center><p><strong> Fatorial do número 6 = 6 * 5 * 4 * 3 * 2 * 1 = 720</strong></p></center>
                                                           
                            </div>
                        </div>
                        <br>
                        <!-- Titulo Figura -->

                        <div class="text-center">
                                    <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong>Figura 10:</strong> Função fatorial simples.</p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte :</strong>EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End --> 
                        <br>
                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo"> FATORIALDUPLO()</p>
                        <hr>
                        <p>Esta função, por sua vez, consiste em retornar o fatorial duplo de um número inteiro igual ou maior que zero.</p>
                        <br>
                        <!-- Exemplo -->
                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <center><p><strong> Fatorial do número 6 = 6 * 4 * 2 = 48</strong></p></center>
                                                            
                            </div>
                        </div>
                        <br>
                        <!-- Titulo Figura -->

                        <div class="text-center">
                                    <a href="imagens/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong>Figura 11: </strong> Função duplo fatorial.</p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte :</strong>EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->

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
                <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
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