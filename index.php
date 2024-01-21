<?php include ("conteiner_funcoes.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
    <title>sistema de notas</title>

    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/cores.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>

    <!-- ------TOPO DO SITE---------- -->
    <header>
        <!-- ICONE DE PERFIL -->
        <div class="head-1">
            <a href="https://github.com/gusvinicius" target="_blank">
                <span class="icone1 material-icons perfil md-36">
                    rocket_launch
                </span>
            </a>
        </div>
        <!-- NOME DO SISTEMA -->
        <div class="head-2">
            <h1 class="text1">SISTEMA DE NOTAS</h1>
        </div>
        <!-- ICONE DO MENU -->
        <div class="head-3">
            <span class="icone1 material-icons md-36 menu nav">
                menu
            </span>
        </div>
    </header>

    <!-- -------------------MENU BURGUER DO SITE---------------- -->
    <menu class="conteiner-menu" id="menu">
        <!-- NOME DE MENU -->
        <div>
            <h3 class="t1">MENU</h3>
        </div>
        <!-- SWITCH DE DARK MODE -->
        <div class="list-menu sel">
            <span class="material-icons md-24 icone-modo">
                light_mode
            </span>
            <h4>TEMA</h4>
            <input type="checkbox" id="check" class="control">
            <label for="check" class="switch">
                <span class="slider"></span>
            </label>
        </div>
        <!-- ICONE DE ALUNOS -->
        <a href="consultar_alunos.php">
            <div class="list-menu sel">
                <span class="material-icons md-24">
                    groups
                </span>
                <h4>ALUNOS</h4>
            </div>
        </a>

        <!-- SALAS -->
        <a href="consultar_salas.php">
            <div class="list-menu sel">
                <span class="material-symbols-outlined">
                    table
                </span>
                <h4>SALAS</h4>
            </div>
        </a>
        <!-- LINK PARA O PORTIFOLIO -->
        <div class="list-menu sel">
            <a href="https://github.com/gusvinicius" target="_blank">
                <span class="material-icons md-24">
                    rocket_launch
                </span>
            </a>
            <a href="https://github.com/gusvinicius" target="_blank">
                <h4>PORTIFOLIO</h4>
            </a>
        </div>
    </menu>

    <!-- ----------------CORPO PRINCIPAL DO SITE------------ -->
    <main class="corpo-principal">
        <!-- CONTEINER DE FORMULARIO DE SALA -->
        <div class="conteiner-sala">
            <div class="conteiner-titulo">
                <h2 class="t1 text1">SALA</h2>
            </div>

            <div>
                <!-- SELEÇÃO DO TIPO DA SALA -->
                <div class="conteiner-titulo">
                    <h3 class="t1 text1">GERAR UMA SALA</h3>
                    <div>
                        <div class="conteiner-esc">
                            <div class="esc-2 escolha">
                                <label class="fundamental">FUNDAMENTAL</label>
                            </div>

                            <div class="esc-1 escolha">
                                <label class="medio" for="ck-1">MEDIO</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TEXTO DO TIPO DE SALA -->
                <div class="conteiner-texto">
                    <div class="cortina">
                        <h3 class="texto-medio text1">MEDIO</h3>
                        <h3 class="texto-fundamental text1">FUNDAMENTAL</h3>
                    </div>
                </div>
                <!-- CONTEINERS FORMULARIOS DE CRIAÇÃO DE SALA -->
                <div class="cortina-2">
                    <div class="ocultador">
                        <!-- FORMULARIO DO FUNDAMENTAL -->
                        <div class="esc-fundamen">
                            <form action="" method="get">
                                <div class="div-input">
                                    <label class="text1" for="nome">NOME:</label>
                                    <input class="input-1" id="input_fundamen" type="text" name="nome-sala-fundament" placeholder="Digite o nome da sala" required maxlength="15">
                                </div>

                                <div class="div-input">
                                    <label class="text1">ANO LETIVO:</label>
                                    <select name="faixa-sala" id="anos">
                                        <option value="6_ano">6º ano</option>
                                        <option value="7_ano">7º ano</option>
                                        <option value="8_ano">8º ano</option>
                                        <option value="9_ano">9º ano</option>
                                    </select>
                                </div>

                                <div class="div-btn">
                                    <input class="btn btn-1"  name="cadastra-sala-2" type="submit" value="CRIAR">
                                </div>
                            </form>
                            <?php
                                if(isset($_GET['cadastra-sala-2'])){
                                    $nome_sala = $_GET['nome-sala-fundament'];
                                    $faixa_sala = $_GET['faixa-sala'];
                                    cadastrar_sala_fundamental($nome_sala, $faixa_sala);
                                }
                            ?>
                        </div>

                        <!-- FORMULARIO DO MEDIO -->
                        <div class="esc-medi">
                            <form action="" method="get">
                                <div class="div-input">
                                    <label class="text1" for="nome">NOME:</label>
                                    <input class="input-1" id="input_med" type="text" name="nome-sala-med" placeholder="Digite o nome da sala" required maxlength="15">
                                </div>

                                <div class="div-input">
                                    <label class="text1" for="">ANO LETIVO:</label>
                                    <select name="faixa-sala" id="anos">
                                        <option value="1_ano">1º ano</option>
                                        <option value="2_ano">2º ano</option>
                                        <option value="3_ano">3º ano</option>
                                    </select>
                                </div>

                                <div class="div-btn">
                                    <input class="btn btn-1" name="cadastra-sala-1" type="submit" value="CRIAR">
                                </div>
                            </form>
                            <?php
                                if(isset($_GET['cadastra-sala-1'])){
                                    $nome_sala = $_GET['nome-sala-med'];
                                    $faixa_sala = $_GET['faixa-sala'];
                                    cadastrar_sala_medio($nome_sala, $faixa_sala);
                                }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- CONTEINER DE ARTIBUAÇÃO DE NOTAS -->
        <div class="conteiner-aluno">
            <div class="conteiner-titulo">
                <h2 class="t1 text1">ALUNOS</h2>
            </div>

            <div class="conteiner-tipo">
                <div class="conteiner-label-tipo">
                    <label class="tipo-fundamental">fundamental</label>
                </div>
            </div>


            <!-- FORMULARIO DE ATRIBUIÇÃO DE NOTA-->
            <form action="" method="get">
                <input name="tipo-formu" type="hidden" class="tipo-formulario-notas" value="medio" required maxlength="15">

                <!-- ENTRADA DE NOME DO ALUNO -->
                <div class="div-input">
                    <label class="text1" for="nome">NOME:</label>
                    <input class="input-name-aluno" type="text" name="nome-alun" placeholder="Digite o nome do aluno" required maxlength="25">
                </div>

                <!-- CONTEINER DOS SELECT-->
                <div class="conteiner-ocultador-materia">
                    <div class="cortina-select">
                        <!-- SELEÇÃO DE SALA MEDIO-->
                        <div class="div-input conteiner-select-medio">
                            <label class="text1" for="">SALAS MEDIO:</label>
                            <select class="input-select salas-medio" name="salas-medio" id="salas-medio">
                                <?php
                                    select_salas_medio();
                                ?>
                            </select>
                        </div>

                        <!--SELEÇÃO DE SALA FUNDAMENTAL -->
                        <div class="div-input conteiner-select-fundamen">
                            <label class="text1" for="">SALAS FUNDAMENTAL:</label>
                            <select class="input-select salas-fundamen" name="salas-fundamen" id="salas-fundamen" disabled>
                                <?php
                                    select_salas_fundamen();
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- INPUT DE NOTAS RESPONSIVO 1 -->
                <div class="conteiner-materias-flex-1">
                    <div class="conteiner-materias">
                        <div class="materia">
                            <div class="nome-materia mat">
                                <h3>MATEMATICA</h3>
                            </div>
                            <div class="conteiner-input1">
                                <div class="div-input-2 conteiner-n1mat">
                                    <label class="text1" for="n1-mat">NOTA 1:</label>
                                    <input class="input-2 n1-mat" type="number" name="n1-mat" placeholder="n1" id="campo-1-mat" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n2mat">
                                    <label class="text1" for="n2-mat">NOTA 2:</label>
                                    <input class="input-2 n2-mat" type="number" name="n2-mat" placeholder="n2" id="campo-2-mat" required>
                                </div>
                                <div class="div-input-2 conteiner-n3mat">
                                    <label class="text1"  for="n3-mat">NOTA 3:</label>
                                    <input class="input-2 n3-mat" type="number" name="n3-mat" placeholder="n3" id="campo-3-mat" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n4mat">
                                    <label class="text1" for="n4-mat">NOTA 4:</label>
                                    <input class="input-2 n4-mat" type="number" name="n4-mat" placeholder="n4" id="campo-4-mat" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-medimat">
                                    <label class="text1"  for="media">MEDIA:</label>
                                    <h3 class="media-1"></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="conteiner-materias">
                        <div class="materia">
                            <div class="nome-materia histo">
                                <h3>HISTORIA</h3>
                            </div>
                            <div class="conteiner-input2">
                                <div class="div-input-2 conteiner-n1hist">
                                    <label class="text1" for="n1-hist">NOTA 1:</label>
                                    <input class="input-2 n1-hist" type="number" name="n1-hist" placeholder="n1" id="campo-1-hist" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n2hist">
                                    <label class="text1" for="n2-hist">NOTA 2:</label>
                                    <input class="input-2 n2-hist" type="number" name="n2-hist" placeholder="n2" id="campo-2-hist" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n3hist">
                                    <label class="text1" for="n3-hist">NOTA 3:</label>
                                    <input class="input-2 n3-hist" type="number" name="n3-hist" placeholder="n3" id="campo-3-hist" required>
                                </div>
                                <div class="div-input-2 conteiner-n4hist">
                                    <label class="text1" for="n4-hist">NOTA 4:</label>
                                    <input class="input-2 n4-hist" type="number" name="n4-hist" placeholder="n4" id="campo-4-hist" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-medihist">
                                    <label class="text1" for="media">MEDIA:</label>
                                    <h3 class="media-2"></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- OCULTADOR DE QUIMICA -->
                    <div class="conteiner-ocultador-materia">
                        <div class="ocultador-de-materia1">
                            <div class="conteiner-materias conteiner-quimica">
                                <div class="materia">
                                    <div class="nome-materia quimi">
                                        <h3>QUIMICA</h3>
                                    </div>
                                    <div class="conteiner-input3">
                                        <div class="div-input-2 conteiner-n1quim">
                                            <label class="text1" for="n1-quim">NOTA 1:</label>
                                            <input class="input-2 n1-quim" type="number" name="n1-quim" placeholder="n1" id="campo-1-quim" required step="any">
                                        </div>
                                        <div class="div-input-2 conteiner-n2quim">
                                            <label class="text1" for="n2-quim">NOTA 2:</label>
                                            <input class="input-2 n2-quim" type="number" name="n2-quim" placeholder="n2" id="campo-2-quim" required step="any">
                                        </div>
                                        <div class="div-input-2 conteiner-n3quim">
                                            <label class="text1" for="n3-quim">NOTA 3:</label>
                                            <input class="input-2 n3-quim" type="number" name="n3-quim" placeholder="n3" id="campo-3-quim" required step="any">
                                        </div>
                                        <div class="div-input-2 conteiner-n4quim">
                                            <label class="text1" for="n4-quim">NOTA 4:</label>
                                            <input class="input-2 n4-quim" type="number" name="n4-quim" placeholder="n4" id="campo-4-quim" required step="any">
                                        </div>
                                        <div class="div-input-2 conteiner-mediaquim">
                                            <label class="text1" for="media">MEDIA:</label>
                                            <h3 class="media-3"></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- OCULTADOR DE FISICA -->
                    <div class="conteiner-ocultador-materia">
                        <div class="ocultador-de-materia2">
                            <div class="conteiner-materias conteiner-fisica">
                                <div class="materia">
                                    <div class="nome-materia fisi">
                                        <h3>FISICA</h3>
                                    </div>
                                    <div class="conteiner-input4">
                                        <div class="div-input-2 conteiner-n1fisi">
                                            <label class="text1" for="n1-fisi">NOTA 1:</label>
                                            <input class="input-2 n1-fisi" type="number" name="n1-fisi" placeholder="n1" id="campo-1-fisi" required step="any">
                                        </div>
                                        <div class="div-input-2 conteiner-n2fisi">
                                            <label class="text1" for="n2-fisi">NOTA 2:</label>
                                            <input class="input-2 n2-fisi" type="number" name="n2-fisi" placeholder="n2" id="campo-2-fisi" required step="any">
                                        </div>
                                        <div class="div-input-2 conteiner-n3fisi">
                                            <label class="text1" for="n3-fisi">NOTA 3:</label>
                                            <input class="input-2 n3-fisi" type="number" name="n3-fisi" placeholder="n3" id="campo-3-fisi" required step="any">
                                        </div>
                                        <div class="div-input-2 conteiner-n4fisi">
                                            <label class="text1" for="n4-fisi">NOTA 4:</label>
                                            <input class="input-2 n4-fisi" type="number" name="n4-fisi" placeholder="n4" id="campo-4-fisi" required step="any">
                                        </div>
                                        <div class="div-input-2 conteiner-medifisi">
                                            <label class="text1" for="media">MEDIA:</label>
                                            <h3 class="media-4"></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="conteiner-materias">
                        <div class="materia">
                            <div class="nome-materia grama">
                                <h3>GRAMATICA</h3>
                            </div>
                            <div class="conteiner-input5">
                                <div class="div-input-2 conteiner-n1grama">
                                    <label class="text1" for="n1-gram">NOTA 1:</label>
                                    <input class="input-2 n1-gram" type="number" name="n1-gram" placeholder="n1" id="campo-1-gram" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n2grama">
                                    <label class="text1" for="n2-gram">NOTA 2:</label>
                                    <input class="input-2 n2-gram" type="number" name="n2-gram" placeholder="n2" id="campo-2-gram" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n3grama">
                                    <label class="text1" for="n3-gram">NOTA 3:</label>
                                    <input class="input-2 n3-gram" type="number" name="n3-gram" placeholder="n3" id="campo-3-gram" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n4grama">
                                    <label class="text1" for="n4-gram">NOTA 4:</label>
                                    <input class="input-2 n4-gram" type="number" name="n4-gram" placeholder="n4" id="campo-4-gram" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-medigrama">
                                    <label class="text1" for="media">MEDIA:</label>
                                    <h3 class="media-5"></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INPUT DE NOTAS RESPONSIVO 2 -->
                <div class="conteiner-materias-flex-2">
                    <div class="conteiner-materias">
                        <div class="materia">
                            <div class="nome-materia arte">
                                <h3>ARTES</h3>
                            </div>
                            <div class="conteiner-input6">
                                <div class="div-input-2 conteiner-n1arte">
                                    <label class="text1" for="n1-arte">NOTA 1:</label>
                                    <input class="input-2 n1-arte" type="number" name="n1-arte" placeholder="n1" id="campo-1-arte" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n2arte">
                                    <label class="text1" for="n2-arte">NOTA 2:</label>
                                    <input class="input-2 n2-arte" type="number" name="n2-arte" placeholder="n2" id="campo-2-arte" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n3arte">
                                    <label class="text1" for="n3-arte">NOTA 3:</label>
                                    <input class="input-2 n3-arte" type="number" name="n3-arte" placeholder="n3" id="campo-3-arte" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n4arte">
                                    <label class="text1" for="n4-arte">NOTA 4:</label>
                                    <input class="input-2 n4-arte" type="number" name="n4-arte" placeholder="n4" id="campo-4-arte" required step="any">
                                </div>
                                <div class="div-input-6 conteiner-mediarte">
                                    <label class="text1" for="media">MEDIA:</label>
                                    <h3 class="media-6"></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="conteiner-materias">
                        <div class="materia">
                            <div class="nome-materia filoso">
                                <h3>FILOSOFIA</h3>
                            </div>
                            <div class="conteiner-input7">
                                <div class="div-input-2 conteiner-n1filo">
                                    <label class="text1" for="n1-filo">NOTA 1:</label>
                                    <input class="input-2 n1-filo" type="number" name="n1-filo" placeholder="n1" id="campo-1-filo" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n2filo">
                                    <label class="text1" for="n2-filo">NOTA 2:</label>
                                    <input class="input-2 n2-filo " type="number" name="n2-filo" placeholder="n2" id="campo-2-filo" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n3filo">
                                    <label class="text1" for="n3-filo">NOTA 3:</label>
                                    <input class="input-2 n3-filo" type="number" name="n3-filo" placeholder="n3" id="campo-3-filo"required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n4filo">
                                    <label class="text1" for="n4-filo">NOTA 4:</label>
                                    <input class="input-2 n4-filo" type="number" name="n4-filo" placeholder="n4" id="campo-4-filo" required step="any">
                                </div>
                                <div class="div-input-7 conteiner-medifilo">
                                    <label class="text1" for="media">MEDIA:</label>
                                    <h3 class="media-7"></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="conteiner-materias">
                        <div class="materia">
                            <div class="nome-materia sociolo">
                                <h3>SOCIOLOGIA</h3>
                            </div>
                            <div class="conteiner-input8">
                                <div class="div-input-2 conteiner-n1socio">
                                    <label class="text1" for="n1-socio">NOTA 1:</label>
                                    <input class="input-2 n1-socio" type="number" name="n1-socio" placeholder="n1" id="campo-1-socio" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n2socio">
                                    <label class="text1" for="n2-socio">NOTA 2:</label>
                                    <input class="input-2 n2-socio" type="number" name="n2-socio" placeholder="n2" id="campo-2-socio" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n3socio">
                                    <label class="text1" for="n3-socio">NOTA 3:</label>
                                    <input class="input-2 n3-socio" type="number" name="n3-socio" placeholder="n3" id="campo-3-socio" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n4socio">
                                    <label class="text1" for="n4-socio">NOTA 4:</label>
                                    <input class="input-2 n4-socio" type="number" name="n4-socio" placeholder="n4" id="campo-4-socio" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-medisocio">
                                    <label class="text1" for="media">MEDIA:</label>
                                    <h3 class="media-8"></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="conteiner-materias">
                        <div class="materia">
                            <div class="nome-materia biolo">
                                <h3>BIOLOGIA</h3>
                            </div>
                            <div class="conteiner-input9">
                                <div class="div-input-2 conteiner-n1bio">
                                    <label class="text1" for="n1-bio">NOTA 1:</label>
                                    <input class="input-2 n1-bio" type="number" name="n1-bio" placeholder="n1" id="campo-1-bio" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n2bio">
                                    <label class="text1" for="n2-bio">NOTA 2:</label>
                                    <input class="input-2 n2-bio" type="number" name="n2-bio" placeholder="n2" id="campo-2-bio" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n3bio">
                                    <label class="text1" for="n3-bio">NOTA 3:</label>
                                    <input class="input-2 n3-bio" type="number" name="n3-bio" placeholder="n3" id="campo-3-bio" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n4bio">
                                    <label class="text1" for="n4-bio">NOTA 4:</label>
                                    <input class="input-2 n4-bio" type="number" name="n4-bio" placeholder="n4" id="campo-4-bio" required>
                                </div>
                                <div class="div-input-2 conteiner-medibio">
                                    <label class="text1" for="media">MEDIA:</label>
                                    <h3 class="media-9"></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="conteiner-materias">
                        <div class="materia">
                            <div class="nome-materia geo">
                                <h3>GEOGRAFIA</h3>
                            </div>
                            <div class="conteiner-input10">
                                <div class="div-input-2 conteiner-n1geo">
                                    <label class="text1" for="n1-arte">NOTA 1:</label>
                                    <input class="input-2 n1-geo" type="number" name="n1-geo" placeholder="n1" id="campo-1-geo" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n2geo">
                                    <label class="text1"  for="n2-arte">NOTA 2:</label>
                                    <input class="input-2 n2-geo" type="number" name="n2-geo" placeholder="n2" id="campo-2-geo" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n3geo">
                                    <label class="text1" for="n3-arte">NOTA 3:</label>
                                    <input class="input-2 n3-geo" type="number" name="n3-geo" placeholder="n3" id="campo-3-geo" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-n4geo">
                                    <label class="text1" for="n4-arte">NOTA 4:</label>
                                    <input class="input-2 n4-geo" type="number" name="n4-geo" placeholder="n4" id="campo-4-geo" required step="any">
                                </div>
                                <div class="div-input-2 conteiner-medigeo">
                                    <label class="text1" for="media">MEDIA:</label>
                                    <h3 class="media-10"></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="div-btn">
                    <input class="btn-2" type="submit" name="cadastro-aluno" value="APLICAR">
                </div>
            </form>

            <?php
                if(isset($_GET['cadastro-aluno'])){
                    cadastro_alun();
                }
            ?>


        </div>
    </main>

    <script src="comandos/jquery.js"></script>
    <script src="comandos/comando_index.js"></script>
</body>
</html>