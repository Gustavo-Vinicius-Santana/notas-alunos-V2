<?php
    include ("conteiner_funcoes.php");

    $id_aluno = $_GET['id'];

    $listagem = edit_pegar_valores($id_aluno);
    $nome = $listagem['nomes'];
    $id_notas = $listagem['id_notas'];

    $n1_mat = $listagem['n1_mat'];
    $n2_mat = $listagem['n2_mat'];
    $n3_mat = $listagem['n3_mat'];
    $n4_mat = $listagem['n4_mat'];
    $medi_mat = $listagem['medi_mat'];

    $n1_hist = $listagem['n1_hist'];
    $n2_hist = $listagem['n2_hist'];
    $n3_hist = $listagem['n3_hist'];
    $n4_hist = $listagem['n4_hist'];
    $medi_hist = $listagem['medi_hist'];

    $n1_gram = $listagem['n1_gram'];
    $n2_gram = $listagem['n2_gram'];
    $n3_gram = $listagem['n3_gram'];
    $n4_gram = $listagem['n4_gram'];
    $medi_gram = $listagem['medi_gram'];

    $n1_art = $listagem['n1_art'];
    $n2_art = $listagem['n2_art'];
    $n3_art = $listagem['n3_art'];
    $n4_art = $listagem['n4_art'];
    $medi_art = $listagem['medi_art'];

    $n1_filo = $listagem['n1_filo'];
    $n2_filo = $listagem['n2_filo'];
    $n3_filo = $listagem['n3_filo'];
    $n4_filo = $listagem['n4_filo'];
    $medi_filo = $listagem['medi_filo'];

    $n1_socio = $listagem['n1_socio'];
    $n2_socio = $listagem['n2_socio'];
    $n3_socio = $listagem['n3_socio'];
    $n4_socio = $listagem['n4_socio'];
    $medi_socio = $listagem['medi_socio'];

    $n1_bio = $listagem['n1_bio'];
    $n2_bio = $listagem['n2_bio'];
    $n3_bio = $listagem['n3_bio'];
    $n4_bio = $listagem['n4_bio'];
    $medi_bio = $listagem['medi_bio'];

    $n1_geo = $listagem['n1_geo'];
    $n2_geo = $listagem['n2_geo'];
    $n3_geo = $listagem['n3_geo'];
    $n4_geo = $listagem['n4_geo'];
    $medi_geo = $listagem['medi_geo'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
    <title>editar valores</title>

    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/cores.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
     <!-- ------TOPO DO SITE---------- -->
     <header>
        <!-- ICONE DE VOLTARL -->
        <div class="head-1">
            <a href="consultar_alunos.php">
                <span class="icone1 material-icons perfil md-36 perfil">
                    arrow_back
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

    <main class="corpo-principal">
        <div class="conteiner-titulo">
            <h2 class="t1 text1">EDITAR NOTAS</h2>
        </div>


                <!-- FORMULARIO DE EDIÇÃO DE NOTAS -->
                <form action="" method="get">
            <div class="conteiner-input-edição-notas">
                <!-- INPUT OCULTO -->
                <input type="hidden" name="id" value="<?php echo $id_aluno ?>">
                <!-- CONTEINER MATEMATICA -->
                <div class="conteiner-edit-matematica">
                    <div class="conteiner-titulo">
                        <h3 class="t1 text1">MATEMATICA</h3>
                    </div>

                    <div class="conteiner-input-3">
                        <div class="conteiner-legenda">
                            <label class="text1 legenda2">ANTIGA</label>
                            <label class="text1 legenda3">NOVA</label>
                        </div>

                        <div class="div-input-3">
                            <label class="text1" for="n1-mat">NOTA 1:</label>
                            <input class="text1 input-val n1-mat-val" type="number" disabled value="<?php echo $n1_mat ?>">

                            <input class="input-3 n1-mat" type="number" name="n1-mat" placeholder="nova n1" id="campo-1-mat" required step="any" value="<?php echo $n1_mat ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n2-mat">NOTA 2:</label>
                            <input class="text1 input-val n2-mat-val" type="number" disabled value="<?php echo $n2_mat ?>">

                            <input class="input-3 n2-mat" type="number" name="n2-mat" placeholder="nova n2" id="campo-2-mat" required step="any" value="<?php echo $n2_mat ?>" >
                        </div>
                        <div class="div-input-3">
                            <label class="text1"  for="n3-mat">NOTA 3:</label>
                            <input class="text1 input-val n3-mat-val" type="number" disabled value="<?php echo $n3_mat ?>">

                            <input class="input-3 n3-mat" type="number" name="n3-mat" placeholder="nova n3" id="campo-3-mat" required step="any" value="<?php echo $n3_mat ?>" >
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n4-mat">NOTA 4:</label>
                            <input class="text1 input-val n4-mat-val" type="number" disabled value="<?php echo $n4_mat ?>">

                            <input class="input-3 n4-mat" type="number" name="n4-mat" placeholder="nova n4" id="campo-4-mat" required step="any" value="<?php echo $n4_mat ?>">
                        </div>

                        <div class="div-input">
                            <div class="medias-edit">
                                <label class="text1 legenda-media"  for="media">MEDIA:</label>
                                <div class="conteiner-medias-edit">
                                    <label class="text1">ANTIGA</label>
                                    <h3 class="text1"><?php echo $medi_mat ?></h3>
                                </div>
                                <div class="conteiner-medias-edit" >
                                    <label class="text1">NOVA</label>
                                    <h3 class="media-1">0</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONTEINER HISTORIA -->
                <div class="conteiner-edit-historia">
                    <div class="conteiner-titulo">
                        <h3 class="t1 text1">HISTORIA</h3>
                    </div>

                    <div class="conteiner-input-3">
                        <div class="conteiner-legenda">
                            <label class="text1 legenda2">ANTIGA</label>
                            <label class="text1 legenda3">NOVA</label>
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n1-hist">NOTA 1:</label>
                            <input class="text1 input-val n1-hist-val" type="number" disabled step="any" value="<?php echo $n1_hist ?>">

                            <input class="input-3 n1-hist" type="number" name="n1-hist" placeholder="nova n1" id="campo-1-hist" required value="<?php echo $n1_hist ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n2-hist">NOTA 2:</label>
                            <input class="text1 input-val n2-hist-val" type="number" disabled step="any" value="<?php echo $n2_hist ?>">

                            <input class="input-3 n2-hist" type="number" name="n2-hist" placeholder="nova n2" id="campo-2-hist" required value="<?php echo $n2_hist ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n3-hist">NOTA 3:</label>
                            <input class="text1 input-val n3-hist-val" type="number" disabled value="<?php echo $n3_hist ?>">

                            <input class="input-3 n3-hist" type="number" name="n3-hist" placeholder="nova n3" id="campo-3-hist" required step="any" value="<?php echo $n3_hist ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n4-hist">NOTA 4:</label>
                            <input class="text1 input-val n4-hist-val" type="number" disabled value="<?php echo $n4_hist ?>">

                            <input class="input-3 n4-hist" type="number" name="n4-hist" placeholder="nova n4" id="campo-4-hist" required step="any" value="<?php echo $n4_hist ?>">
                        </div>
                        <div class="div-input">
                            <div class="medias-edit">
                                <label class="text1 legenda-media"  for="media">MEDIA:</label>
                                <div class="conteiner-medias-edit">
                                    <label class="text1">ANTIGA</label>
                                    <h3 class="text1"> <?php echo $medi_hist ?> </h3>
                                </div>
                                <div class="conteiner-medias-edit" >
                                    <label class="text1">NOVA</label>
                                    <h3 class="media-2">0</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONTEINER GRAMATICA -->
                <div class="conteiner-edit-gramatica">
                    <div class="conteiner-titulo">
                        <h3 class="t1 text1">GRAMATICA</h3>
                    </div>

                    <div class="conteiner-input-3">
                        <div class="conteiner-legenda">
                            <label class="text1 legenda2">ANTIGA</label>
                            <label class="text1 legenda3">NOVA</label>
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n1-gram">NOTA 1:</label>
                            <input class="text1 input-val n1-gram-val" type="number" disabled value="<?php echo $n1_gram ?>">

                            <input class="input-3 n1-gram" type="number" name="n1-gram" placeholder="n1" id="campo-1-gram" required step="any" value="<?php echo $n1_gram ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n2-gram">NOTA 2:</label>
                            <input class="text1 input-val n2-gram-val" type="number" disabled value="<?php echo $n2_gram ?>">

                            <input class="input-3 n2-gram" type="number" name="n2-gram" placeholder="n2" id="campo-2-gram" required step="any" value="<?php echo $n2_gram ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n3-gram">NOTA 3:</label>
                            <input class="text1 input-val n3-gram-val" type="number" disabled value="<?php echo $n3_gram ?>">

                            <input class="input-3 n3-gram" type="number" name="n3-gram" placeholder="n3" id="campo-3-gram" required step="any" value="<?php echo $n3_gram ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n4-gram">NOTA 4:</label>
                            <input class="text1 input-val n4-gram-val" type="number" disabled value="<?php echo $n4_gram ?>">

                            <input class="input-3 n4-gram" type="number" name="n4-gram" placeholder="n4" id="campo-4-gram" required step="any" value="<?php echo $n4_gram ?>">
                        </div>
                        <div class="div-input">
                            <div class="medias-edit">
                                <label class="text1 legenda-media"  for="media">MEDIA:</label>
                                <div class="conteiner-medias-edit">
                                    <label class="text1">ANTIGA</label>
                                    <h3 class="text1"><?php echo $medi_gram ?> </h3>
                                </div>
                                <div class="conteiner-medias-edit" >
                                    <label class="text1">NOVA</label>
                                    <h3 class="media-5">0</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONTEINER ARTES -->
                <div class="conteiner-edit-artes">
                    <div class="conteiner-titulo">
                        <h3 class="t1 text1">ARTES</h3>
                    </div>

                    <div class="conteiner-input-3">
                        <div class="conteiner-legenda">
                            <label class="text1 legenda2">ANTIGA</label>
                            <label class="text1 legenda3">NOVA</label>
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n1-arte">NOTA 1:</label>
                            <input class="text1 input-val n1-arte-val" type="number" disabled value="<?php echo $n1_art ?>">

                            <input class="input-3 n1-arte" type="number" name="n1-arte" placeholder="n1" id="campo-1-arte" required step="any" value="<?php echo $n1_art ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n2-arte">NOTA 2:</label>
                            <input class="text1 input-val n2-arte-val" type="number" disabled value="<?php echo $n2_art ?>">

                            <input class="input-3 n2-arte" type="number" name="n2-arte" placeholder="n2" id="campo-2-arte" required step="any" value="<?php echo $n2_art ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n3-arte">NOTA 3:</label>
                            <input class="text1 input-val n3-arte-val" type="number" disabled value="<?php echo $n3_art ?>">

                            <input class="input-3 n3-arte" type="number" name="n3-arte" placeholder="n3" id="campo-3-arte" required step="any" value="<?php echo $n3_art ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n4-arte">NOTA 4:</label>
                            <input class="text1 aparecer-medibio input-val n4-arte-val" type="number" disabled value="<?php echo $n4_art ?>">

                            <input class="input-3 n4-arte" type="number" name="n4-arte" placeholder="n4" id="campo-4-arte" required step="any" value="<?php echo $n4_art ?>">
                        </div>
                        <div class="div-input">
                            <div class="medias-edit">
                                <label class="text1 legenda-media"  for="media">MEDIA:</label>
                                <div class="conteiner-medias-edit">
                                    <label class="text1">ANTIGA</label>
                                    <h3 class="text1"> <?php echo $medi_art ?> </h3>
                                </div>
                                <div class="conteiner-medias-edit" >
                                    <label class="text1">NOVA</label>
                                    <h3 class="media-6">0</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONTEINER FILOSOFIA -->
                <div class="conteiner-edit-filosofia">
                    <div class="conteiner-titulo">
                        <h3 class="t1 text1">FILOSOFIA</h3>
                    </div>

                    <div class="conteiner-input-3">
                        <div class="conteiner-legenda">
                            <label class="text1 legenda2">ANTIGA</label>
                            <label class="text1 legenda3">NOVA</label>
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n1-filo">NOTA 1:</label>
                            <input class="text1 input-val n1-filo-val" type="number" disabled value="<?php echo $n1_filo ?>">

                            <input class="input-3 n1-filo" type="number" name="n1-filo" placeholder="n1" id="campo-1-filo" required step="any" value="<?php echo $n1_filo ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n2-filo">NOTA 2:</label>
                            <input class="text1 input-val n2-filo-val" type="number" disabled value="<?php echo $n2_filo ?>">

                            <input class="input-3 n2-filo " type="number" name="n2-filo" placeholder="n2" id="campo-2-filo" required step="any" value="<?php echo $n2_filo ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n3-filo">NOTA 3:</label>
                            <input class="text1 input-val n3-filo-val" type="number" disabled value="<?php echo $n3_filo ?>">

                            <input class="input-3 n3-filo" type="number" name="n3-filo" placeholder="n3" id="campo-3-filo"required step="any" value="<?php echo $n3_filo ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n4-filo">NOTA 4:</label>
                            <input class="text1 input-val n4-filo-val" type="number" disabled value="<?php echo $n4_filo ?>">

                            <input class="input-3 n4-filo" type="number" name="n4-filo" placeholder="n4" id="campo-4-filo" required step="any" value="<?php echo $n4_filo ?>">
                        </div>
                        <div class="div-input">
                            <div class="medias-edit">
                                <label class="text1 legenda-media"  for="media">MEDIA:</label>
                                <div class="conteiner-medias-edit">
                                    <label class="text1">ANTIGA</label>
                                    <h3 class="text1"> <?php echo $medi_filo ?> </h3>
                                </div>
                                <div class="conteiner-medias-edit" >
                                    <label class="text1">NOVA</label>
                                    <h3 class="media-7">0</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONTEINER SOCIOLOGIA -->
                <div class="conteiner-edit-sociologia">
                    <div class="conteiner-titulo">
                        <h3 class="t1 text1">SOCIOLOGIA</h3>
                    </div>

                    <div class="conteiner-input-3">
                        <div class="conteiner-legenda">
                            <label class="text1 legenda2">ANTIGA</label>
                            <label class="text1 legenda3">NOVA</label>
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n1-socio">NOTA 1:</label>
                            <input class="text1 input-val n1-socio-val" type="number" disabled value="<?php echo $n1_socio ?>">

                            <input class="input-3 n1-socio" type="number" name="n1-socio" placeholder="n1" id="campo-1-socio" required step="any" value="<?php echo $n1_socio ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n2-socio">NOTA 2:</label>
                            <input class="text1 input-val n2-socio-val" type="number" disabled value="<?php echo $n2_socio ?>">

                            <input class="input-3 n2-socio" type="number" name="n2-socio" placeholder="n2" id="campo-2-socio" required step="any" value="<?php echo $n2_socio ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n3-socio">NOTA 3:</label>
                            <input class="text1 input-val n3-socio-val" type="number" disabled value="<?php echo $n3_socio ?>">

                            <input class="input-3 n3-socio" type="number" name="n3-socio" placeholder="n3" id="campo-3-socio" required step="any" value="<?php echo $n3_socio ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n4-socio">NOTA 4:</label>
                            <input class="text1 input-val n4-socio-val" type="number" disabled value="<?php echo $n4_socio ?>">

                            <input class="input-3 n4-socio" type="number" name="n4-socio" placeholder="n4" id="campo-4-socio" required step="any" value="<?php echo $n4_socio ?>">
                        </div>

                        <div class="div-input">
                            <div class="medias-edit">
                                <label class="text1 legenda-media"  for="media">MEDIA:</label>
                                <div class="conteiner-medias-edit">
                                    <label class="text1">ANTIGA</label>
                                    <h3 class="text1"> <?php echo $medi_socio ?> </h3>
                                </div>
                                <div class="conteiner-medias-edit" >
                                    <label class="text1">NOVA</label>
                                    <h3 class="media-8">0</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONTEINER BIOLOGIA -->
                <div class="conteiner-edit-biologia">
                    <div class="conteiner-titulo">
                        <h3 class="t1 text1">BIOLOGIA</h3>
                    </div>

                    <div class="conteiner-input-3">
                        <div class="conteiner-legenda">
                            <label class="text1 legenda2">ANTIGA</label>
                            <label class="text1 legenda3">NOVA</label>
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n1-bio">NOTA 1:</label>
                            <input class="text1 input-val n1-bio-val" type="number" disabled value="<?php echo $n1_bio ?>">

                            <input class="input-3 n1-bio" type="number" name="n1-bio" placeholder="n1" id="campo-1-bio" required step="any" value="<?php echo $n1_bio ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n2-bio">NOTA 2:</label>
                            <input class="text1 input-val n2-bio-val" type="number" disabled value="<?php echo $n2_bio ?>">

                            <input class="input-3 n2-bio" type="number" name="n2-bio" placeholder="n2" id="campo-2-bio" required step="any" value="<?php echo $n2_bio ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n3-bio">NOTA 3:</label>
                            <input class="text1 input-val n3-bio-val" type="number" disabled value="<?php echo $n3_bio ?>">

                            <input class="input-3 n3-bio" type="number" name="n3-bio" placeholder="n3" id="campo-3-bio" required step="any" value="<?php echo $n3_bio ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n4-bio">NOTA 4:</label>
                            <input class="text1 input-val n4-bio-val" type="number" disabled value="<?php echo $n4_bio ?>">

                            <input class="input-3 n4-bio" type="number" name="n4-bio" placeholder="n4" id="campo-4-bio" required step="any" value="<?php echo $n4_bio ?>">
                        </div>
                        <div class="div-input">
                            <div class="medias-edit">
                                <label class="text1 legenda-media"  for="media">MEDIA:</label>
                                <div class="conteiner-medias-edit">
                                    <label class="text1">ANTIGA</label>
                                    <h3 class="text1"> <?php echo $medi_bio ?> </h3>
                                </div>
                                <div class="conteiner-medias-edit" >
                                    <label class="text1">NOVA</label>
                                    <h3 class="media-9">0</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONTEINER GEOGRAFIA -->
                <div class="conteiner-edit-geografia">
                    <div class="conteiner-titulo">
                        <h3 class="t1 text1">GEOGRAFIA</h3>
                    </div>

                    <div class="conteiner-input-3">
                        <div class="conteiner-legenda">
                            <label class="text1 legenda2">ANTIGA</label>
                            <label class="text1 legenda3">NOVA</label>
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n1-arte">NOTA 1:</label>
                            <input class="text1 input-val n1-geo-val" type="number" disabled value="<?php echo $n1_geo ?>">

                            <input class="input-3 n1-geo" type="number" name="n1-geo" placeholder="n1" id="campo-1-geo" required step="any" value="<?php echo $n1_geo ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1"  for="n2-arte">NOTA 2:</label>
                            <input class="text1 input-val n2-geo-val" type="number" disabled value="<?php echo $n2_geo ?>">

                            <input class="input-3 n2-geo" type="number" name="n2-geo" placeholder="n2" id="campo-2-geo" required step="any" value="<?php echo $n2_geo ?>">
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n3-arte">NOTA 3:</label>
                            <input class="text1 input-val n3-geo-val" type="number" disabled value="<?php echo $n3_geo ?>">

                            <input class="input-3 n3-geo" type="number" name="n3-geo" placeholder="n3" id="campo-3-geo" required step="any" value="<?php echo $n3_geo ?>" >
                        </div>
                        <div class="div-input-3">
                            <label class="text1" for="n4-arte">NOTA 4:</label>
                            <input class="text1 input-val n4-geo-val" type="number" disabled value="<?php echo $n4_geo ?>">

                            <input class="input-3 n4-geo" type="number" name="n4-geo" placeholder="n4" id="campo-4-geo" required step="any" value="<?php echo $n3_geo ?>">
                        </div>
                        <div class="div-input">
                            <div class="medias-edit">
                                <label class="text1 legenda-media"  for="media">MEDIA:</label>
                                <div class="conteiner-medias-edit">
                                    <label class="text1">ANTIGA</label>
                                    <h3 class="text1"> <?php echo $medi_geo ?> </h3>
                                </div>
                                <div class="conteiner-medias-edit" >
                                    <label class="text1">NOVA</label>
                                    <h3 class="media-10">0</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="div-btn">
                <input class="btn btn-2" name="confirm-edit" type="submit" value="EDITAR">
            </div>
        </form>

        <?php
            if(isset($_GET['confirm-edit'])){
                editar_valores($id_notas);
            }
        ?>

        <div class="div-btn">
            <a href="consultar_alunos.php">
                <input class="btn btn-1" type="submit" value="CANCELAR">
            </a>
        </div>
    </main>

    <script src="comandos/jquery.js"></script>
    <script src="comandos/comandos_edita_fundamen.js"></script>
</body>
</html>