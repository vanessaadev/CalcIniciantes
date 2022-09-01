    <!-- PLUGIN DO FADE IN -->

    <style>
        .MenuTopico {
            color: #274F23 !important;
            font-weight: bold !important;
        }

        #menuNumero {
            color: #274F23;
            font-weight: bold !important;
            font-size: 1.2rem;
            padding-right: 0.3rem;
            margin-left: 0;
            margin-right: 0.4rem;
            font-family: "Raleway";
            right: 0.8rem;
            margin-top: -0.23rem;
        }

        .ativo {
            background-color: #e1ebe3;
        }
    </style>

    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active ps">
                <div class="m-4 mx-auto text-center">
                    <!-- <a href="index.php">
                    <img class="img-fluid" src="https://atilasilvalima.a2hosted.com/projects/EGPCE/Cedis/cdn/imagens/egpce.png" alt="Logo EGPCE">
                    </a> -->
                    <img class="img-fluid img-responsive" src="https://www.egp.ce.gov.br/wp-content/uploads/sites/8/2021/06/logo-egpce-250x170-1.png" height="140" width="140" alt="Logo EGPCE">
                </div>
                <div class="sidebar-menu">

                    <ul class="menu ms-3">

                        <li class="sidebar-item">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="index.php" class="MenuTopico sidebar-link <?php if ($page == 'index') {echo 'ativo';} ?>"><span id="menuNumero"> </span>Apresentação </a>
                            </div>
                        </li>

                        <li class="sidebar-item has-sub">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="#.php" class="MenuTopico sidebar-link <?php if ($page == 'Topico01') {echo 'ativo'; } ?>">
                                    <div id="menuNumero">01 </div> Conhecendo a interface do Calc</a>
                                <ul class="submenu">
                                    <li class="sidebar-item">
                                        <a href="Topico01.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico01.1.php') { echo 'ativo'; } ?>"><span id="menuNumero"><span> Início</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico01.2.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico01.2.php') { echo 'ativo'; } ?>"><span id="menuNumero"> 01.2 <span> O que é o Calc?</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico01.3.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico01.3.php') { echo 'ativo'; } ?>"><span id="menuNumero"> 01.3 <span> Instalação da Suíte LibreOffice</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico01.4.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico01.4.php') { echo 'ativo'; } ?>"><span id="menuNumero"> 01.4 <span> Elementos básicos de uma planilha no Calc</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico01.5.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico01.5.php') { echo 'ativo'; } ?>"><span id="menuNumero"> 01.5 <span> Interface do Calc</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-item has-sub">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="#.php" class="MenuTopico sidebar-link <?php if ($page == 'Topico02') {echo 'ativo'; } ?>">
                                    <div id="menuNumero">02 </div> Trabalhando com células, colunas, linhas e folhas de cálculo
                                </a>
                                <ul class="submenu">
                                    <li class="sidebar-item">
                                        <a href="Topico02.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico02') { echo 'ativo'; } ?>"><span id="menuNumero"><span> Início</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico02.2.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico02.2') { echo 'ativo'; } ?>"><span id="menuNumero"> 02.2 <span> Seleção de células, colunas, linhas e folhas</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico02.3.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico02.3') { echo 'ativo'; } ?>"><span id="menuNumero"> 02.3 <span> Inserção de colunas ou linhas</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico02.4.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico02.4') { echo 'ativo'; } ?>"><span id="menuNumero"> 02.4 <span> Exclusão de colunas ou linhas</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico02.5.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico02.5') { echo 'ativo'; } ?>"><span id="menuNumero"> 02.5 <span> Trabalho com folhas de cálculo</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-item has-sub">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="#.php" class="MenuTopico sidebar-link <?php if ($page == 'Topico03') {echo 'ativo'; } ?>">
                                    <div id="menuNumero">03 </div> Sintaxe, formatações e comandos</a>
                                <ul class="submenu">
                                    <li class="sidebar-item">
                                        <a href="Topico03.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico03') { echo 'ativo'; } ?>"><span id="menuNumero"><span> Início</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico03.2.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico03.2') { echo 'ativo'; } ?>"><span id="menuNumero"> 03.2 <span> Formatação de dados</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-item">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Referencias.php" class="MenuTopico sidebar-link <?php if ($page == 'Referencias') {  echo 'ativo';  } ?>">Referências
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

    </div>
    <!-- SCRIPT - JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('ul li a').click(function() {
                $('li a').removeClass("ativo");
                $(this).addClass("ativo");
            });
        });
    </script>