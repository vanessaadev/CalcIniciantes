<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
?>
<?php
$page = 'Topico01.3';
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
                            <p class="SubTitulo">Classificação</p>
                            <hr>
                            <div class="col-md-12">
                                <p>A classificação organiza as células visíveis na folha. No Calc, você pode classificar células utilizando
                                    até três critérios, que são aplicados, um após o outro. Classificações são úteis, quando há a necessidade de
                                    procurar por um item específico, e se torna ainda mais poderosa quando os dados são filtrados.</p>

                                <p>Além disso, a classificação é sempre útil quando adicionamos novas informações. Quando uma lista é extensa,
                                    normalmente é mais fácil adicionar novas informações no final da folha, em vez de incluir linhas nos locais
                                    apropriados. Uma vez inseridas as informações, é possível classificá-las para atualizar a folha.</p>
                                <p>Essa funcionalidade é utilizada para ordenar os dados da planilha com base na informação de uma ou mais
                                    colunas, extremamente útil para facilitar a análise dos dados ou apresentação do resultado. A utilização é
                                    simples.</p>
                            </div>

                        <!-- Figura do lado do texto-->
                        <div class="row">
                            <div class="col-md-10 col-sm-12">
                                <p>Há duas formas de fazer, a mais simples e imediata é acessar os botões do menu. São duas opções: a ordenação crescente e a decrescente. Primeiro, selecione uma das colunas, depois clique no tipo de classificação desejada. Pronto, os dados serão imediatamente ordenados.</p>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <!-- Titulo Figura -->
                                <div>
                                    <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                        <img width="300" class="img-fluid wow fadeInRight" src="imagens/Figura05.png" alt="Classificações Rápidas">
                                        <p class="TituloFigura text-center"><strong>Figura 05:</strong> Classificações Rápidas.</p>
                                    </a>
                                </div>
                                <!-- Imagem 05 - MODAL -->
                                <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura05.png" alt="Classificações Rápidas.">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 05 - End -->
                            </div>
                        </div>

                            <p>A segunda forma é através do acesso pelo menu Dados – Classificação. Será exibido um menu com recursos mais
                                avançado de classificação. É possível fazer a ordenação, utilizando várias colunas com níveis diferentes e
                                marcar algumas opções adicionais. Segue um breve passo a passo:</p>

                            <p>O primeiro passo é selecionar o intervalo de dados, que será ordenado. Geralmente, selecionamos toda a
                                tabela para manter a consistência da informação, mas caso seja necessário é possível ordenar apenas uma
                                coluna. Acesse o menu, na opção Dados – Classificação para definir os critérios de classificação desejado.
                            </p>

                            <p>Caso tenha esquecido de efetuar a seleção, não tem problema, o Calc exibirá uma mensagem sinalizando que
                                não foram selecionadas todas células da tabela e será dada a opção de Estender a seleção, manter a seleção
                                ou cancelar.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura06.png" alt="Ordenar.">
                                </a>
                                <p class="FonteFigura"><strong>Figura 06:</strong> Ordenar. </p>
                            </div>
                            <!-- Imagem 06 - MODAL -->
                            <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura06.png" alt="Ordenar.">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> EGPCE. </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 06 - End -->

                            <div class="col-md-12">
                                <p>Será exibido um menu que conterá duas abas para definir os parâmetros de ordenação:   
                                </p>
                                <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Aba de Critério de Ordenação:</strong> nessa aba, é possível definir três níveis de ordenação, ou seja, é possível selecionar várias colunas e classificar os dados seguindo a ordem das chaves.</p>
                                <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Aba de opções:</strong> é possível adicionar alguns critérios adicionais à classificação, as opções são:</p>
                            
                            <ul class="none Texto">
                                <li><i class="fa fa-circle CorVerdeClaroEstado"></i> <strong>Diferenciar maiúscula de minúscula na classificação:</strong> se duas entradas são quase idênticas, uma com uma letra maiúscula no início, outra com uma letra minúscula na mesma posição;</li>
                                <br><li><i class="fa fa-circle CorVerdeClaroEstado"></i> <strong>O intervalo contém rótulos de coluna:</strong> se não for marcada, a primeira linha (ou coluna) também será ordenada. Por padrão fica pré marcado;</li>
                                <br><li><i class="fa fa-circle CorVerdeClaroEstado"></i> <strong>Incluir formatos:</strong> preservar o formato atual das células, por padrão também ficam selecionadas;</li>
                                <br><li><i class="fa fa-circle CorVerdeClaroEstado"></i> <strong>Ativar classificação natural:</strong> esta função é para ordenar corretamente uma sequência do tipo A1, A2, A3, …, A10, A11, …, A20, A21. Por padrão, a ordenação é feita verificando o primeiro caractere, começamos com A. Depois verificamos o segundo caractere e o terceiro, ficando assim: A1, A10, A11, A2, A20 etc. Com a flag ativa a ordenação fica mais natural desta forma: A1, A2, A3, …, A10, A11, …, A20, A21;</li>
                                <br><li><i class="fa fa-circle CorVerdeClaroEstado"></i> <strong>Copiar resultados da classificação para:</strong> permite copiar a seleção para outro local pré-definido. Para usar essa função, antes de classificar os dados, acesse a opção “Dados – Definir Intervalo”. Insira um nome para o intervalo, selecione o intervalo em si e depois clique na opção “Adicionar”. Ao voltar para o menu de classificação, será possível ver o nome do intervalo criado na relação abaixo da flag e ao clicar Ok os dados serão colados lá;</li>
                                <br><li><i class="fa fa-circle CorVerdeClaroEstado"></i> <strong>Ordem de classificação personalizada:</strong> é a possibilidade de criar uma lista personalizada de ordenação, como os modelos personalizados que já existem de dia da semana e mês. É possível inserir mais modelos personalizados, acessando o menu <strong>LibreOffice – Preferência – LibreOffice Calc – Listas de Classificação</strong>, clique na opção “Nova” para inserir uma nova relação e depois em “Adicionar”;</li>
                                <br><li><i class="fa fa-circle CorVerdeClaroEstado"></i> <strong>Idioma:</strong> selecionar o idioma específico para ordenação;</li>
                               <br><li><i class="fa fa-circle CorVerdeClaroEstado"></i> <strong>Direção:</strong> Acreditamos ser este o mais diferente, a direção em como deverá ser feita a classificação. Normalmente, classificamos de cima para baixo, essa é a opção padrão, mas também pode ser feito da esquerda para direita.</li>
                                </ul>
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
                                <a href="Topico01.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Topico01.4.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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