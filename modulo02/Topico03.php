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

                        <h2 class="Titulo">Funções (Parte II)</h2>
                        <hr>

                        <p><strong>Objetivo:</strong>  Praticar a construção de planilhas eletrônicas, fazendo uso das principais funções básicas disponíveis no LibreOffice Calc.</p>
                        <br>
                        <!--SubTitulo-->
                        <p class="SubTitulo"> Funções Lógicas: Função SE</p>
                        <hr>
                        <p>A função <strong>SE</strong> pertence à categoria <strong>“lógicas”.</strong> É utilizada quando queremos que o Calc efetue um teste lógico que indicará um valor verdadeiro ou falso. Geralmente, o teste é feito comparando uma célula com um valor de referência.</p>
                        <p>Em outras palavras, esta é uma função bastante interessante, pois permite ao usuário da planilha construir expressões condicionais, avaliando e apresentando diferentes resultados, conforme uma cláusula avaliada.</p>
                        <p>A estrutura da função SE é: <strong>=SE(teste; Valor_então; Valor_senão)</strong></p>
                        <p>A função <strong>“SE”</strong> é composta por três parâmetros:</p>
                        <!-- LISTA EM MOVIMENTO-->
                        <div>
                            <ul class="none">
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Teste: </strong> É a comparação que será feita para verificar se a condição é verdadeira ou falsa. Para isso, podem ser utilizados os operadores: > (maior que); < (menor que); = (igual); >= (maior ou igual a); <= (menor ou igual a) e <> (diferente de), além de outras funções.</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Valor_então: </strong>É o que o Calc retornará, caso o resultado do teste seja verdadeiro. Pode ser um texto (nesse caso, o valor deve estar entre aspas duplas), um número ou até mesmo uma função.</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Valor_senão:</strong> É o que o Calc retornará, caso o resultado do teste seja falso. Os itens possíveis são os mesmos do Valor_então. <br>
                                </li>                                     
                            </ul>
                        </div>
                        <p>Para melhor compreensão, vamos utilizar a nossa tabela exemplo. A nota mínima para que o aluno seja aprovado é 7,0. Baseado nisso, queremos que na coluna resultado, apareça a palavra <strong style="color: blue">APROVADO</strong>, caso sua média tenha sido maior ou igual a 7,0 e <strong style="color: red">REPROVADO</strong> caso sua média tenha sido <strong style="color: red">inferior a 7.</strong></p>
                        <p>Vamos juntar as informações para resolver esta função:</p>
                        <p> <strong>Nome da função: SE</strong><br>
                        <strong> Condição (Teste): MÉDIA >= 7 </strong><br>
                        <strong>Valor Verdadeiro:</strong> Se a condição for verdadeira, preencher a célula com o nome  <strong style="color: blue">APROVADO.</strong><br>
                        Valor Falso: Se a condição for falsa, preencher a célula com o nome <strong style="color: red">REPROVADO.</strong></p>
                        <p>Nesse exemplo, será preenchido <strong style="color: blue">APROVADO</strong> para <strong style="color: blue">Valor então.</strong> (sempre que for um texto, deverá ser colocado entre aspas) e <strong style="color: red">REPROVADO</strong> para <strong style="color: red">Valor_senão.</strong></p>
                        <p>Depois de juntar todas as informações necessárias, chegou o momento de realizar o cálculo. Para isso, primeiramente posicionamos o cursor na célula desejada (no caso, E6). Em seguida digitamos:</p>
                        <p class="alert alert-success" role="alert"><strong>=SE(D6>=7; “APROVADO”; “REPROVADO”)</strong></p>
                        <p>Na célula G2, aparecerá escrito <strong style="color: blue">APROVADO.</strong>, pois a média em D6 é 8,5 que é <strong style="color: blue">maior que 7</strong> , resultando, portanto, a condição <strong style="color: blue">VERDADEIRO.</strong></p>  
                        <p>Caso seja alterada alguma das notas para BAIXO, de modo que a média fique <strong style="color: red">inferior a 7</strong>, o valor de D6 mudará, automaticamente, para <strong style="color: red">REPROVADO</strong>, pois a condição passará a ser <strong style="color: red">falsa</strong>.</p>
                        <br>
                        <!--SubSubTitulo-->
                        <p class="SubSubTitulo"> Funções Matemáticas</p>
                        <hr><br>
                        <!--Acordion Horizontal-->

                        <div class="col-md-12">
                                 <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </center><br>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item"><a style="font-weight: bold !important;" class=" CorVerdeClaroEstado nav-link active" id="Id_Impostos" data-toggle="pill" href="#Btnnav21" role="tab" aria-selected="true">ABS</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav22" role="tab" aria-selected="false">ALEATÓRIO</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav23" role="tab" aria-selected="false">ARRED</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav24" role="tab" aria-selected="false">ARREDONDAR.PARA.BAIXO</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav25" role="tab" aria-selected="false">ARREDONDAR.PARA.CIMA</a></li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="Btnnav21" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>Retorna como resultado o valor absoluto do número fornecido.</p>
                                    <p><STRONG>Sintaxe: =ABS(NÚMERO)</STRONG> </p>

                                    <!-- Exemplo -->
                                    <div class="ExemploCaixa">
                                        <p class="ExemploTitulo"> Exemplo</p>
                                        <p class="ExemploTexto">
                                            a. =ABS(150) resulta em 150;<br>
                                            b. =ABS(-8,25) resulta em 8,25.</p>
                                    </div>

                                </div>
                                <div class="tab-pane fade " id="Btnnav22" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>A função ALEATÓRIO retorna um número qualquer <strong>entre 0 e 1</strong> como resultado. A função não possui parâmetros e é utilizada na forma:</p>
                                    <p><strong>=ALEATÓRIO()</strong></p>
                                    <p><strong>=MÊS("19/12/1970")</strong></p>
                                    <p>É importante salientar que qualquer modificação indireta na célula pode resultar no novo cálculo da função aleatório como, por exemplo, uma mudança de formatação ou a função <strong> Ferramentas → Recalcular (F9).</strong></p>
                                </div>
                                <div class="tab-pane fade " id="Btnnav23" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>Arredonda um número para o valor mais próximo até uma quantidade de dígitos definida pelo usuário.</p>
                                    <p><strong>=ARRED(NÚMERO; QUANTIDADE_DE_DÍGITOS)</strong></p>
                                    <p>Essa função apresenta como resultado o <strong> NÚMERO</strong> fornecido como primeiro argumento arredondado com a <strong>QUANTIDADE_DE_DÍGITOS,</strong>  colocada no segundo argumento.</p>
                                    <!-- Exemplo -->
                                    <div class="ExemploCaixa">
                                        <p class="ExemploTitulo"> Exemplo</p>
                                        <div class="ExemploTexto">
                                            <p><strong>=ARRED(2,348;2) cujo resultado é 2,35.</strong> </p>                                            
                                        </div>
                                    </div>
                                    <p>Em alguns casos, é necessário mudar o formato da célula para ver todas as decimais.</p>
                                    <!-- Exemplo -->
                                    <div class="ExemploCaixa">
                                        <p class="ExemploTitulo"> Exemplo</p>
                                        <div class="ExemploTexto">
                                            <p><strong>=ARRED(-32,4834;3)</strong> retorna -32,483 (com a formatação mostrando mais casas decimais).</p>                                            
                                        </div>
                                    </div>
                                    <p>Em alguns casos, é necessário mudar o formato da célula para ver todas as decimais.</p>
                                    <p>Se a QUANTIDADE_DE_DÍGITOS for omitida ou for zero, a função arredonda para o inteiro mais próximo:</p>
                                    <p><strong>=ARRED(2,348;0) </strong>retorna 2.</p>
                                    <p>Se a <strong> QUANTIDADE_DE_DÍGITOS</strong> for negativa, a função arredonda para a dezena, centena ou milhar etc., mais próximo.</p>
                                    <p><strong>=ARRED(835,65;-2)</strong> retorna 800.</p>
                                </div>
                                <div class="tab-pane fade " id="Btnnav24" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>Arredonda um número para baixo até uma quantidade de dígitos nas casas decimais definida pelo usuário.</p>
                                    <p><strong>=ARREDONDAR.PARA.BAIXO (NÚMERO; QUANTIDADE_DE_DIGITOS)</strong></p>
                                    <!-- Exemplo -->
                                    <div class="ExemploCaixa">
                                        <p class="ExemploTitulo"> Exemplo</p>
                                        <div class="ExemploTexto">
                                            <p><strong>=ARREDONDAR.PARA.BAIXO (1,234;2)</strong> retorna 1,23.</p>                                            
                                        </div>
                                    </div>
                                    <p>Se a <strong>QUANTIDADE_DE_DÍGITOS </strong> for omitida ou for zero, a função arredonda para o inteiro mais alto:</p>
                                    <p><strong>=ARREDONDAR.PARA.BAIXO (45,67;0)</strong> retorna 45.</p>
                                    <p>Se a <strong>QUANTIDADE_DE_DÍGITOS</strong> for negativa, a função arredonda para a dezena, centena ou milhar etc., mais baixa.</p>
                                    <p><strong>=ARREDONDAR.PARA.BAIXO (975,65;-2)</strong> retorna 900.</p>
                                </div>
                                <div class="tab-pane fade " id="Btnnav25" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>Arredonda um número para cima até uma quantidade de dígitos nas casas decimais definida pelo usuário.</p>
                                    <p><strong>=ARREDONDAR.PARA.CIMA (NÚMERO;QUANTIDADE_DE_DIGITOS)</strong></p>
                                    <!-- Exemplo -->
                                    <div class="ExemploCaixa">
                                        <p class="ExemploTitulo"> Exemplo</p>
                                        <div class="ExemploTexto">
                                            <p><strong>=ARREDONDAR.PARA.CIMA (1,2345;1) </strong> retorna 1,3.</p>                                            
                                        </div>
                                    </div>
                                    <p>Se a QUANTIDADE_DE_DÍGITOS for omitida ou for zero, a função arredonda para o inteiro mais alto:</p>
                                    <p><strong>=ARREDONDAR.PARA.CIMA (45,67;0) </strong>retorna 46.</p>
                                    <p>Se a <strong>QUANTIDADE_DE_DÍGITOS </strong>for negativa, a função arredonda para a dezena, centena ou milhar etc, mais alta.</p>
                                    <p><strong>=ARREDONDAR.PARA.CIMA (975,65;-2) </strong>retorna 1000.</p> 
                                </div>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <!-- Início Accordion -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center><br>
                            <!-- Accordion 01 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong><i class="fa fa-cube "></i> <strong style="color: "></strong> CONT.NÚM</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>A função <strong>CONT.NÚM</strong> conta quantos valores numéricos estão entre os ARGUMENTOS da função.</p>
                                        <p><strong>Entende-se como valores numéricos: </strong>números, datas e fórmulas, cujo resultado seja um número.</p>
                                        <p>Células vazias ou células com conteúdo de texto não são contadas na função<strong> CONT.NÚM.</strong></p>
                                        <p>O formato da função é:</p><br>
                                        <p><strong style="color:DeepSkyBlu">=CONT.NÚM(ARGUMENTOS)</strong></p>
                                        <br>
                                        <p>Observe no exemplo abaixo que nem todos os alunos fizeram a primeira avaliação. Podemos usar a função <strong>CONT.NÚM</strong>  para contar as notas do intervalo B11:B19 e identificar quantos alunos, de fato, fizeram a prova.</p>
                                        <br>
                                        <!-- Titulo Figura -->

                                        <div class="text-center">
                                            <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                            </a>
                                            <p class="TituloFigura wow fadeInLeft"><strong>Figura 12:</strong>  Função CONT.NÚM </p>
                                        </div>

                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="FonteFigura"><strong>Fonte :</strong> Guia de introdução às funções do Libre Office Calc</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 01 - End -->
                                        <P>O resultado da função <strong>=CONT.NÚM(B11:B19)</strong> será 7 pois, as duas células, correspondentes aos alunos que não fizeram a prova, estão vazias.</P>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 01 -->

                            <!-- Accordion 02 -->
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong><i class="fa fa-cube "></i> <strong > CONT.SE</strong></strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>A função <strong>CONT.SE</strong>  tem como objetivo contar quantos valores obedecem a um determinado critério.</p>
                                        <p>A estrutura é bastante simples:</p>
                                        <center><p><strong style="color:Orange">=CONT.SE (INTERVALO; CONDIÇÃO)</strong></p></center>
                                        <p>Os valores dentro do intervalo são avaliados um a um de acordo com a condição. O valor é contado somente se a condição for verdadeira.</p>
                                        <p>No exemplo abaixo, contamos quantos alunos estão com notas acima da média estabelecida. Note que usamos uma concatenação de texto para expressar adequadamente o critério, indicado no segundo argumento com a expressão <strong>“>” &B6.</strong> Ou seja, concatenamos o sinal de > com o conteúdo da célula <strong> B6.</strong></p>
                                        <!-- Titulo Figura -->

                                        <div class="text-center">
                                            <a href="imagens/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                            </a>
                                            <p class="TituloFigura wow fadeInLeft"><strong>Figura 13:</strong>  Função Cont.se  </p>
                                        </div>

                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="FonteFigura"><strong>Fonte :</strong>Guia de introdução às funções do Libre Office Calc</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 01 - End -->
                                        <P>O resultado da função CONT.SE acima é de 7 alunos.</P>
                                        <p>Quando o critério ou condição for de igualdade, não precisamos usar a concatenação de texto.</p><br>
                                        <!-- Exemplo -->
                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <center><p><strong>=CONT.SE(B10:B18;B6)</strong></p>  </center>                                          
                                            </div>
                                        </div>
                                        <p>Em sua construção mais comum, a função CONT.SE permite apenas um argumento como critério de contagem. No entanto, em casos específicos, é possível utilizar mais de um argumento através do uso de expressões regulares em fórmulas.</p>
                                        <p>O exemplo abaixo ilustra essa situação. A partir da tabela abaixo, desejamos obter a quantidade de cadastros de pessoas, que são dos estados do Rio Grande do Sul e Santa Catarina.</p>
                                        <br>
                                        <!-- Titulo Figura -->

                                        <div class="text-center">
                                            <a href="imagens/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                            </a>
                                            <p class="TituloFigura wow fadeInLeft"><strong>Figura 14:</strong> Função Cont.se  </p>
                                        </div>

                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="FonteFigura"><strong>Fonte :</strong> Guia de introdução às funções do Libre Office Calc</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 01 - End -->
                                        <p>Uma abordagem óbvia e simples seria a soma de CONT.SE:</p>
                                        <center><p><strong style="color:Orange">=CONT.SE(F3:F8;"RS") + CONT.SE(F3:F8;"SC")</strong></p></center><br>
                                        <p>Uma abordagem elegante poderia utilizar expressões regulares:</p>
                                        <center><p><strong style="color:Orange"> =CONT.SE(F3:F8;"RS|SC")></strong></p></center><br>
                                        <p>Onde o símbolo “ | ” (pipe) entre as siglas RS e SC representa a operação <strong>"OU"</strong> lógica. Logo, estamos contando apenas os valores do intervalo de <strong>F3</strong> até <strong>F8</strong> que são iguais a RS ou a SC.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 02 -->

                            <!-- Accordion 03 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong><i class="fa fa-cube CorVerdeEstad"></i> <strong>CONT.VALORES</strong> </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>A função CONT.VALORES permite contar células preenchidas com valores de texto, número ou fórmula dentro de um intervalo.</p>
                                        <p>O formato da função CONT.VALORES é:</p><br> 

                                        <center><p><strong style="color:ForestGreen">=CONT.VALORES (ARGUMENTOS)</strong></p></center><br>

                                        <p>No exemplo abaixo, o usuário deverá preencher o espaço amarelo com cinco códigos de produto.</p>
                                        <p>Para contar quantas células já foram preenchidas, utilizamos a função <strong> CONT.VALORES</strong> e o intervalo de <strong> G5:G9.</strong></p>
                                        <p>O resultado da função será <strong>3</strong>.</p><br>

                                        <!-- Titulo Figura -->

                                        <div class="text-center">
                                            <a href="imagens/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                            </a>
                                            <p class="TituloFigura wow fadeInLeft"><strong>Figura 15:</strong> Função Cont.valores  </p>
                                        </div>

                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="FonteFigura"><strong>Fonte :</strong> Guia de introdução às funções do Libre Office Calc</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div><br>
                                        <!-- Figura 01 - End -->
                                    </div>
                                </div>
                            </div>                        
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                    <strong><i class="fa fa-cube #"></i><strong>CONT.VAZIO</strong></strong> 
                                </h2>
                                <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>A função CONTAR.VAZIO conta quantas células do intervalo indicado em ARGUMENTOS estão vazias, isto é, sem conteúdo algum.</p>
                                        <p>O formato da função CONT.VALORES é:</p><br> 

                                        <p><strong style="color:DodgerBlu">=CONTAR.VAZIO(ARGUMENTOS)</strong></p><br>

                                        <p>No nosso exemplo anterior, da função stron CONT.VALORES, calculamos quantas células do intervalo amarelo já haviam sido preenchidas. Podemos encontrar a informação complementar (quantas células faltam ser preenchidas) através da função CONTAR.VAZIO.</p>
                                        <p>No exemplo, a função <strong>CONTAR.VAZIO</strong> pode ser utilizada sobre o intervalo de <strong>G5:G9.</strong>  O resultado da função na célula <strong>H15</strong> será de <strong>2.</strong></p><br>
                                        
                                        <!-- Titulo Figura -->

                                        <div class="text-center">
                                            <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                            </a>
                                            <p class="TituloFigura wow fadeInLeft"><strong>Figura 16: </strong> Função Contar.vazio </p>
                                        </div>

                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="FonteFigura"><strong>Fonte :</strong>  Guia de introdução às funções do Libre Office Calc</p>
                                                    </div>
                                                </div>

                                        </div>                                    
                                        <!-- Figura 01 - End -->                                        
                                    </div>
                                </div>
                            </div>
                        </div><br>                      
                        <br>
                        <!-- Fique Atento -->

                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <p class="FiqueAtentoTexto"><strong>CONT.NÚM x CONT.VALORES </strong> <br> Enquanto a função CONT.NÚM nos permite trabalhar somente com números, a função CONT.VALORES permite contar células preenchidas com valores de texto, número ou até mesmo fórmula.</p>
                        </div>
                        <br>
                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Funções de Planilhas</p>
                        <hr>
                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">PROC</p>
                        <hr>
                        <p>O resultado da função PROC é o conteúdo da célula do intervalo do resultado, correspondente ao conteúdo localizado no intervalo de pesquisa. <br> O formato da função é:</p>
                        <center><p><strong >=PROC (ARGUMENTO_DE_PESQUISA; INTERVALO_DE_PESQUISA; INTERVALO_DO_RESULTADO)</strong></p></center>
                        <p>O resultado da função é o conteúdo da célula do INTERVALO_DO_RESULTADO localizada na mesma posição da célula que contém o ARGUMENTO_DE_PESQUISA no INTERVALO_DE_PESQUISA. É importante salientar que os dois intervalos não precisam ser adjacentes. <br>Veja o exemplo abaixo:</p>
                        <!-- Titulo Figura -->

                        <div class="text-center">
                            <a href="imagens/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura17.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="TituloFigura wow fadeInLeft">Figura 17: Função Contar.vazio  </p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura17.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte :</strong> Guia de introdução às funções do Libre Office Calc</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->
                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">PROCV</p>
                        <hr>
                        <p>A função PROCV é uma função de procura muito útil. Com ela podemos fazer uma busca de um determinado valor dentro de um intervalo e retornar como resultado um valor de uma coluna adjacente.</p>
                        <p>A estrutura da função PROCV é a seguinte:</p>
                        <p><strong>=PROCV (VALOR_PROCURADO; INTERVALO_DE_PESQUISA; ÍNDICE_DA_COLUNA; ORDEM)</strong></p>
                        <p>O valor procurado é pesquisado dentro da primeira coluna do intervalo de pesquisa. Quando o valor é encontrado, o resultado correspondente, indicado pelo índice da coluna, é apresentado. A ordem é um argumento opcional, que pode assumir o valor verdadeiro ou falso. Caso tenha o valor falso, a pesquisa será realizada sempre considerando valores exatos. Por exemplo, podemos fazer uma procura por dados de uma pessoa a partir do seu nome ou do seu número de cadastro.</p>
                        <p>No exemplo abaixo, temos uma tabela com dados de alunos e suas respectivas notas.</p>
                        <!-- Titulo Figura -->

                        <div class="text-center">
                            <a href="imagens/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="TituloFigura wow fadeInLeft"><strong>Figura 18:</strong> Função Procv </p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte :</strong>  Guia de introdução às funções do Libre Office Calc</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->
                        <p>Para fazer uma busca pelos desempenho dos alunos na disciplina, podemos usar a função PROCV. Procurando pelo campo de matrícula na primeira coluna do intervalo, podemos achar os demais dados do aluno. Se desejarmos como resultado o nome do aluno cuja matrícula é <strong>126-4,</strong>  teríamos a seguinte fórmula:</p>
                        <center><p><strong>=PROCV(H9;A10:D18;2;FALSO)</strong></p></center>
                        <p>O resultado seria o nome Éverton Brenner Oliveira. Para chegar a esse resultado, a função procurou pela matrícula 126-4 na primeira coluna do intervalo <strong>A10:D18.</strong>  Ao encontrar o registro pesquisado, a função verificou qual o índice da coluna do intervalo <strong>A10:D18.</strong>  O índice, cujo valor é 2, indica a segunda coluna do intervalo. A intersecção entre a linha indicada pelo número de matrícula e o índice da coluna do intervalo indicam o resultado final da fórmula.</p>
                        <p>Para evitar a pesquisa por aproximação, inserimos o quarto argumento com o valor <span style="color: orange">FALSO.</span></p>
                        <p>Dessa forma, somente os valores existentes no intervalo retornarão resultados válidos.</p>
                        <br>
                        <!-- Saiba Mais -->

                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <p class="SaibaMaisTexto"><strong>- Sempre utilizar intervalos ordenados pela primeira coluna;<br>
                            - Usar, na primeira coluna, valores únicos e não nulos.</strong></p>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <center>
                            <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center><br>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item"><a style="font-weight: bold !important;" class=" CorVerdeClaroEstado nav-link active" id="Id_Impostos" data-toggle="pill" href="#Btnnav30" role="tab" aria-selected="true">CARACT</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav31" role="tab" aria-selected="false">EXT.TEXTO</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav32" role="tab" aria-selected="false">DIREITA</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav33" role="tab" aria-selected="false">ESQUERDA</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav34" role="tab" aria-selected="false">MAIÚSCULA</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav35" role="tab" aria-selected="false">PRI.MAIÚSCULA</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav36" role="tab" aria-selected="false">NÚM.CARACT</a></li>
                                <li class="nav-item"><a style="font-weight: bold !important;" class="CorVerdeClaroEstado nav-link" id="Id_DistorcoesDoMercado" data-toggle="pill" href="#Btnnav37" role="tab" aria-selected="false">CONCATENAR</a></li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="Btnnav30" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>A função <STRONG>CARACT()</STRONG> apresenta como resultado o caractere correspondente ao número fornecido como argumento da função:</p>
                                    <center><p><strong>=CARACT(ARGUMENTO)</strong></p></center>
                                    <p>Letras, números e símbolos da escrita em geral (pontuação, acentos, operações matemáticas) são encontrados <strong>a partir do número 33</strong> como ARGUMENTO.</p>
                                    <!-- Exemplo -->
                                    <div class="ExemploCaixa">
                                        <p class="ExemploTitulo"> Exemplo</p>
                                        <div class="ExemploTexto">
                                            <center><p><strong>=CARACT(97) resulta na letra "a".</strong></p> </center>                                           
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Fique Atento -->

                                    <div class="FiqueAtentoCaixa">
                                        <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                        <p class="FiqueAtentoTexto">Ao digitar qualquer argumento do número =CARACT(1) ao =CARACT(32), o resultado será sempre “em branco”.</p>
                                    </div>                                   
                                </div>
                                <div class="tab-pane fade " id="Btnnav31" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>Possui a estrutura:</p>
                                    <p><strong>=EXT.TEXTO (ARGUMENTO; POSIÇÃO_INICIAL; TAMANHO)</strong></p>

                                    <p>A função <strong>EXT.TEXTO</strong> retorna um conteúdo de texto obtido a partir de um <strong>ARGUMENTO</strong> de texto original. O texto resultante é obtido a partir da <strong>POSIÇÃO_INICIAL</strong> e do <strong>TAMANHO</strong>, em quantidade de caracteres, definidos no segundo e terceiro argumentos.</p>
                                    <!-- Exemplo -->
                                    <div class="ExemploCaixa">
                                        <p class="ExemploTitulo"> Exemplo</p>
                                        <div class="ExemploTexto">
                                        <strong>a. =EXT.TEXTO(“LibreOffice”;3;2)</strong>  resulta no texto <strong>“br”.</strong> <br>
                                        <strong>b. =EXT.TEXTO(“LibreOffice”;5;5)</strong>  resulta no texto <strong>“eOffi”.</strong>
                                    </div>
                                    </div>  
                                </div>
                                <div class="tab-pane fade " id="Btnnav32" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>Devolve como resultado as letras do texto utilizado como ARGUMENTO correspondentes a quantidade solicitada através de "N". O formato da função é:</p>
                                    <center><p><strong>=DIREITA (ARGUMENTO; N)</strong></p></center>
                                    <p>O parâmetro <strong>N</strong> é opcional. Caso o mesmo seja omitido, o valor retornado pela função corresponderá apenas ao último caractere do texto do ARGUMENTO.</p>
                                    <!-- Exemplo -->
                                    <div class="ExemploCaixa">
                                        <p class="ExemploTitulo"> Exemplo</p>
                                        <div class="ExemploTexto">
                                        <strong>a. =DIREITA(“Carro”;2)</strong> retornará como resultado o texto <strong> “ro”.</strong><br>
                                        <strong>b. =DIREITA(“Carro”)</strong> retornará como resultado a letra <strong>“o”.</strong>                                         
                                        </div>
                                    </div>  
                                </div>
                                <div class="tab-pane fade " id="Btnnav33" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>Devolve como resultado as letras do texto utilizado como ARGUMENTO correspondentes a quantidade solicitada através de "N".</p>
                                    <p>O formato da função é:</p>
                                     <center><p><strong>=DIREITA (ARGUMENTO; N)</strong></p></center>
                                    <p>O parâmetro <strong>N</strong> é opcional. Caso o mesmo seja omitido, o valor retornado pela função corresponderá apenas ao primeiro caractere do texto do ARGUMENTO.</p>
                                    <!-- Exemplo -->
                                    <div class="ExemploCaixa">
                                        <p class="ExemploTitulo"> Exemplo</p>
                                        <div class="ExemploTexto">
                                        <strong> a. =ESQUERDA(“LibreOffice”;2)</strong> retornará como resultado o texto <strong>“Li”.</strong> <br>
                                        <strong>b. =ESQUERDA(“LibreOffice”)</strong> retornará como resultado a letra <strong>“L”. </strong>                                      
                                        </div>
                                    </div>  
                                </div>
                                <div class="tab-pane fade " id="Btnnav34" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>Apresenta o ARGUMENTO em letras maiúsculas.</p>
                                    <center><p><strong>=MAIÚSCULA(ARGUMENTO)</strong></p></center>
                                    <!-- Exemplo -->
                                    <div class="ExemploCaixa">
                                        <p class="ExemploTitulo"> Exemplo</p>
                                        <div class="ExemploTexto">
                                        <strong>=MAIÚSCULA("Bom dia")</strong>  retorna BOM DIA.                                       
                                        </div>
                                    </div>  
                                    
                                </div>
                                <div class="tab-pane fade" id="Btnnav35" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <p>Apresenta o texto do ARGUMENTO com as primeiras letras de cada palavra em maiúsculas.</p>
                                    <center><p><strong>=PRI.MAIÚSCULA(ARGUMENTO)</strong></p></center>
                                    <!-- Exemplo -->
                                    <div class="ExemploCaixa">
                                        <p class="ExemploTitulo"> Exemplo</p>
                                        <div class="ExemploTexto">
                                        <strong>=PRI.MAIÚSCULA("Bom dia")</strong> retorna Bom Dia.                                       
                                        </div>
                                    </div>  
                                </div>
                                <div class="tab-pane fade" id="Btnnav36" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <p>A Função NÚM.CARACT apresenta como resultado o tamanho, em número de caracteres, do TEXTO inserido na função como argumento. A estrutura da função é:</p>
                                    <center><p><strong>=NÚM.CARACT(TEXTO)</strong></p></center>
                                    <p>O resultado da função =NÚM.CARACT(“Teste”) é igual a 5.</p>
                                </div>
                                <div class="tab-pane fade" id="Btnnav37" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <p>A função <strong>CONCATENAR()</strong>  permite agregar, em um único resultado, várias sequências de caracteres referenciados pelos ARGUMENTOS da função.</p>
                                    <center><p><strong>=CONCATENAR(ARGUMENTOS)</strong></p></center>
                                    <p>Os ARGUMENTOS podem ser trechos de texto, valores numéricos ou referências de célula. <br>
                                    Observe no exemplo abaixo a composição do código do produto, usando a função <strong>CONCATENAR.</strong>  <br>
                                    A coluna código utiliza a função CONCATENAR, combinando as referências de célula das colunas Tipo, Série e Número, além do “-”, utilizado para a composição do formato correto dos códigos. <br>
                                    Uma observação útil é que o mesmo procedimento pode ser feito com o operador de texto de concatenação, o &. Nesse caso, a fórmula utilizada para uma construção similar à do exemplo: <strong>=B3 & C3 & “-” & D3.</strong></p>

                                    <!-- Titulo Figura -->

                                    <div class="text-center">
                                        <a href="imagens/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                            <img class="img-fluid wow fadeInLeft" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="TituloFigura wow fadeInLeft"><strong>Figura 19:</strong> Função Concatenar </p>
                                    </div>

                                    <!-- Imagem 01 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="FonteFigura"><strong>Fonte :</strong> Guia de introdução às funções do Libre Office Calc</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Figura 01 - End -->
                                </div><hr>                                
                            </div>
                        </div>
                        <br><br>
                        <!-- Pratique -->

                        <div class="PratiqueCaixa">
                            <p class="PratiqueTitulo"> Pratique</p>
                            <div class="PratiqueTexto">
                                <p>Vamos agora colocar em prática os conceitos aprendidos até o momento. Abra seu LibreOffice Calc e resolva a planilha abaixo:</p>
                                <!-- Titulo Figura -->

                                <div class="text-center">
                                <a href="imagens/Figura20.png" data-bs-toggle="modal" data-bs-target="#Imagem20">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="TituloFigura wow fadeInLeft"><strong>Figura 20:</strong></p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="FonteFigura"><strong>Fonte :</strong> EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->
                                <!-- LISTA EM MOVIMENTO-->
                                <div>
                                    <ul class="none">
                                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Utilizando as devidas funções, preencha os campos de “data”, “dia da semana” e “hora”;</li>
                                        <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> No campo "dia da semana", retorne o nome do dia da semana, de acordo com o número encontrado pela fórmula "dia da semana";</li>
                                        <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Digite em uma célula fora das tabelas @cedis.gov, utilize o endereço para concatenar e formar o e-mail de cada aluno, no formato: nome.sobrenome@cedis.gov (lembre de utilizar a alça de preenchimento);</li>
                                        <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Para a nota total, utilize a soma das três (3) notas;</li>
                                        <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  No resultado, preencha com “Aprovado”, caso o aluno tenha tido média maior ou igual a seis (6) e “Reprovado” caso tenha tido média menor do que seis (6).</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Chegamos ao final da nossa segunda aula. Espero que você tenha aproveitado todos os conceitos que foram apresentados. Na próxima aula, finalizaremos nosso curso falando sobre gráficos e novas formatações.</p>

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
                <a href="Referencias.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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