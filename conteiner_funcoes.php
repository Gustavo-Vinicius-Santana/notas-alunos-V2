<?php
/*FUNÇAO INSERÇÃO DE NOTA*/
function cadastro_alun(){
                /*DECLARAÇÃO DAS NOTAS*/

    /*NOTAS MATEMATICA */
    $nota1_mat = $_GET['n1-mat'] ?? 0;
    $nota2_mat = $_GET['n2-mat'] ?? 0;
    $nota3_mat = $_GET['n3-mat'] ?? 0;
    $nota4_mat = $_GET['n4-mat'] ?? 0;

    /*NOTAS HISTORIA*/
    $nota1_hist = $_GET['n1-hist'] ?? 0;
    $nota2_hist = $_GET['n2-hist'] ?? 0;
    $nota3_hist = $_GET['n3-hist'] ?? 0;
    $nota4_hist = $_GET['n4-hist'] ?? 0;

    /*NOTAS QUIMICA*/
    $nota1_quim = $_GET['n1-quim'] ?? 0;
    $nota2_quim = $_GET['n2-quim'] ?? 0;
    $nota3_quim = $_GET['n3-quim'] ?? 0;
    $nota4_quim = $_GET['n4-quim'] ?? 0;

    /*NOTAS FISICA*/
    $nota1_fisi = $_GET['n1-fisi'] ?? 0;
    $nota2_fisi = $_GET['n2-fisi'] ?? 0;
    $nota3_fisi = $_GET['n3-fisi'] ?? 0;
    $nota4_fisi = $_GET['n4-fisi'] ?? 0;

    /*NOTAS GRAMATICA*/
    $nota1_gram = $_GET['n1-gram'] ?? 0;
    $nota2_gram = $_GET['n2-gram'] ?? 0;
    $nota3_gram = $_GET['n3-gram'] ?? 0;
    $nota4_gram = $_GET['n4-gram'] ?? 0;

    /*NOTAS ARTES*/
    $nota1_arte = $_GET['n1-arte'] ?? 0;
    $nota2_arte = $_GET['n2-arte'] ?? 0;
    $nota3_arte = $_GET['n3-arte'] ?? 0;
    $nota4_arte = $_GET['n4-arte'] ?? 0;

    /*NOTAS FILOSOFIA*/
    $nota1_filo = $_GET['n1-filo'] ?? 0;
    $nota2_filo = $_GET['n2-filo'] ?? 0;
    $nota3_filo = $_GET['n3-filo'] ?? 0;
    $nota4_filo = $_GET['n4-filo'] ?? 0;

    /*NOTAS SOCIOLOGIA*/
    $nota1_socio = $_GET['n1-socio'] ?? 0;
    $nota2_socio = $_GET['n2-socio'] ?? 0;
    $nota3_socio = $_GET['n3-socio'] ?? 0;
    $nota4_socio = $_GET['n4-socio'] ?? 0;

    /*NOTAS BIOLOGIA*/
    $nota1_bio = $_GET['n1-bio'] ?? 0;
    $nota2_bio = $_GET['n2-bio'] ?? 0;
    $nota3_bio = $_GET['n3-bio'] ?? 0;
    $nota4_bio = $_GET['n4-bio'] ?? 0;

    /*NOTAS GEOGRAFIA*/
    $nota1_geo = $_GET['n1-geo'] ?? 0;
    $nota2_geo = $_GET['n2-geo'] ?? 0;
    $nota3_geo = $_GET['n3-geo'] ?? 0;
    $nota4_geo = $_GET['n4-geo'] ?? 0;

    /*NOME DO ALUNO*/
    $nome = $_GET['nome-alun'] ?? 'non';

    /*TIPO DE FORMULARIO*/
    $tipo_formulario = $_GET['tipo-formu'] ?? 'non';

    if($tipo_formulario == 'medio'){
        $id_sala = $_GET['salas-medio'] ?? 0;
    }else if($tipo_formulario == 'fundamental'){
        $id_sala = $_GET['salas-fundamen'] ?? 0;
    }

    include("conecta.php");


    /*BUSCADORES DE SALA ESCOLHIDA POR ID*/
    $coman_ident_sala = "select * from salas where id_sal = $id_sala";
    $exec_ident_sala = mysqli_query($con, $coman_ident_sala);
    $busc_ident_sala = mysqli_fetch_assoc ($exec_ident_sala);
    $result_ident_sala = $busc_ident_sala['NOME_SAL'];
    $faixa_ident_sala = $busc_ident_sala['FAIXA'];
    $tipo_ident_sala = $busc_ident_sala['TIPO'];


                            /*CONTADORES DE AUTO INCREMENTO*/

        /*TABELA DE NOTAS */
    $comando_cont_notas = "select count(*) as total_notas from notas";
    $exec_cont_notas = mysqli_query($con, $comando_cont_notas);
    $resultado = mysqli_fetch_assoc($exec_cont_notas );
    $resultado_cont_notas = $resultado['total_notas'];

    /*INCREMENTO ID NOTAS*/
    $ad_id_notas = $resultado_cont_notas + 1;

        /*TABELA DE ALUNOS */
    $comando_cont_alunos = "select count(*) as total_alun from alunos";
    $exec_cont_alunos = mysqli_query($con, $comando_cont_alunos);
    $busc_cont_alunos = mysqli_fetch_assoc($exec_cont_alunos);
    $result_cont_alunos = $busc_cont_alunos['total_alun'];

    /*INCREMENTO ID ALUNOS*/
    $ad_id_alun = $result_cont_alunos + 1;

    /*TABELA DE SALA ESCOLHIDA*/
    $comando_cont_sala_x = "select count(*) as total_alun from $result_ident_sala";
    $exec_cont_sala_x = mysqli_query($con, $comando_cont_sala_x);
    $cont_sala_x = mysqli_fetch_assoc($exec_cont_sala_x);
    $resultado_cont_sala_x = $cont_sala_x['total_alun'];

    /*ICNREMENTO ID SALA ESCOLHIDA */
    $ad_id_sala_x = $resultado_cont_sala_x + 1;


                        /*INSERÇÕES DE MATERIAS*/

    /*FUNÇÃO DE CONTADORES DE ID MATERIAS*/
    function cont_materia($nome_materia){
        include("conecta.php");

        $comando_cont_x = "select count(*) as total_x from $nome_materia";
        $exec_cont_x = mysqli_query($con, $comando_cont_x);
        $cont_x = mysqli_fetch_assoc($exec_cont_x);

        $resultado_cont_x = $cont_x['total_x'];

        $result_id_ad_mat = $resultado_cont_x + 1;

        return $result_id_ad_mat;
    }
    /*FUNÇÃO DE INSERÇÃO NAS TABELAS*/
    function insert_nota($materia, $nom_id_materia, $ad_id_materia, $n1, $n2, $n3, $n4, $medi, $ad_id_notas){
        include("conecta.php");

        $x_insert = "insert into $materia values ($ad_id_materia, $n1, $n2, $n3, $n4, $medi)";
        mysqli_query($con, $x_insert);

        if($materia == 'geo'){
            $notas_insert = "insert into notas
            (ID_NOTAS, ID_MAT, ID_HIST, ID_QUIM, ID_FISI, ID_GRAM, ID_ARTE, ID_FILO, ID_SOCIO, ID_BIO, ID_GEO)
            values
            ($ad_id_notas, $ad_id_materia, $ad_id_materia, $ad_id_materia, $ad_id_materia, $ad_id_materia, $ad_id_materia, $ad_id_materia, $ad_id_materia, $ad_id_materia, $ad_id_materia)";
            mysqli_query($con, $notas_insert);
        }
    }

    /*MATEMATICA*/
    $nome_tabel_mat = "mat";
    $nome_id_mat = "ID_MAT";
    $media_mat = ($nota1_mat + $nota2_mat + $nota3_mat + $nota4_mat) / 4;
    $ad_id_mat = cont_materia($nome_tabel_mat);

    insert_nota($nome_tabel_mat, $nome_id_mat, $ad_id_mat,
    $nota1_mat, $nota2_mat, $nota3_mat, $nota4_mat, $media_mat, $ad_id_notas);

    /*HISTORIA*/
    $nome_tabel_hist = "hist";
    $nome_id_hist = "ID_HIST";
    $media_hist = ($nota1_hist + $nota2_hist + $nota3_hist + $nota4_hist) / 4;
    $ad_id_hist = cont_materia($nome_tabel_hist);

    insert_nota($nome_tabel_hist, $nome_id_hist, $ad_id_hist, $nota1_hist, $nota2_hist, $nota3_hist, $nota4_hist, $media_hist, $ad_id_notas);

    /*QUIMICA*/
    $nome_tabel_quimi = "quim";
    $nome_id_quimi = "ID_QUIM";
    $media_quim = ($nota1_quim + $nota2_quim + $nota3_quim + $nota4_quim) / 4;
    $ad_id_quim = cont_materia($nome_tabel_quimi);

    insert_nota($nome_tabel_quimi, $nome_id_quimi, $ad_id_quim, $nota1_quim, $nota2_quim, $nota3_quim, $nota4_quim, $media_quim, $ad_id_notas);

    /*FISICA*/
    $nome_tabel_fisi = "fisi";
    $nome_id_fisi = "ID_FISI";
    $media_fisi = ($nota1_fisi + $nota2_fisi + $nota3_fisi + $nota4_fisi) / 4;
    $ad_id_fisi = cont_materia($nome_tabel_fisi);

    insert_nota($nome_tabel_fisi, $nome_id_fisi, $ad_id_fisi, $nota1_fisi, $nota2_fisi, $nota3_fisi, $nota4_fisi, $media_fisi, $ad_id_notas);

    /*GRAMATICA*/
    $nome_tabel_gram = "gram";
    $nome_id_gram = "ID_GRAM";
    $media_gram = ($nota1_gram + $nota2_gram + $nota3_gram + $nota4_gram) / 4;
    $ad_id_gram = cont_materia($nome_tabel_gram);

    insert_nota($nome_tabel_gram, $nome_id_gram, $ad_id_gram, $nota1_gram, $nota2_gram, $nota3_gram, $nota4_gram, $media_gram, $ad_id_notas);

    /*ARTES*/
    $nome_tabel_arte = "artes";
    $nome_id_arte = "ID_ARTE";
    $media_arte = ($nota1_arte + $nota2_arte + $nota3_arte + $nota4_arte) / 4;
    $ad_id_arte = cont_materia($nome_tabel_arte);

    insert_nota($nome_tabel_arte, $nome_id_arte, $ad_id_arte, $nota1_arte, $nota2_arte, $nota3_arte, $nota4_arte, $media_arte, $ad_id_notas);

    /*FILOSOFIA*/
    $nome_tabel_filo = "filosofia";
    $nome_id_filo = "ID_FILO";
    $media_filo = ($nota1_filo + $nota2_filo + $nota3_filo + $nota4_filo) / 4;
    $ad_id_filo = cont_materia($nome_tabel_filo);

    insert_nota($nome_tabel_filo, $nome_id_filo, $ad_id_filo, $nota1_filo, $nota2_filo, $nota3_filo, $nota4_filo, $media_filo, $ad_id_notas);

    /*SOCIOLOGIA*/
    $nome_tabel_socio = "socio";
    $nome_id_socio = "ID_SOCIO";
    $media_socio = ($nota1_socio + $nota2_socio + $nota3_socio + $nota4_socio) / 4;
    $ad_id_socio = cont_materia($nome_tabel_socio);

    insert_nota($nome_tabel_socio, $nome_id_socio, $ad_id_socio, $nota1_socio, $nota2_socio, $nota3_socio, $nota4_socio, $media_socio, $ad_id_notas);

    /*BIOLOGIA*/
    $nome_tabel_bio = "bio";
    $nome_id_bio = "ID_BIO";
    $media_bio = ($nota1_bio + $nota2_bio + $nota3_bio + $nota4_bio) / 4;
    $ad_id_bio = cont_materia($nome_tabel_bio);

    insert_nota($nome_tabel_bio, $nome_id_bio, $ad_id_bio, $nota1_bio, $nota2_bio, $nota3_bio, $nota4_bio, $media_bio, $ad_id_notas);

    /*GEOGRAFIA*/
    $nome_tabel_geo = "geo";
    $nome_id_geo = "ID_GEO";
    $media_geo = ($nota1_geo + $nota2_geo + $nota3_geo + $nota4_geo) / 4;
    $ad_id_geo = cont_materia($nome_tabel_geo);

    insert_nota($nome_tabel_geo, $nome_id_geo, $ad_id_geo, $nota1_geo, $nota2_geo, $nota3_geo, $nota4_geo, $media_geo, $ad_id_notas);


    /*INSERÇÃO NA SALA*/
    $comando_insert_alunos = "insert into alunos(ID_ALUN, NOME, ID_NOTAS, ID_SAL, ATIVO) values ($ad_id_alun, '$nome', $ad_id_notas, $id_sala, 'sim')";
    mysqli_query($con, $comando_insert_alunos);

    $comando_insert_sala = "insert into $result_ident_sala (ID_SAL, ID_ALUN, ID_NOTAS, NUM_SAL, FAIXA, TIPO) values ($ad_id_sala_x, $ad_id_alun, $ad_id_notas, $id_sala, '$faixa_ident_sala', '$tipo_ident_sala')";
    mysqli_query($con, $comando_insert_sala);

    echo
    "
    <script type='text/JavaScript'>
        window.alert('aluno cadastrado com sucesso!')
    </script>
    ";
}

/*FUNÇÃO CRIAR SALA MEDIO*/
function cadastrar_sala_medio($nome_sala, $faixa_sala){
    include("conecta.php");

    $comando_busc_nome = "select * from salas where NOME_SAL = '$nome_sala'";
    $exec_busc_nome = mysqli_query($con, $comando_busc_nome);
    $valida = false;
    while($busca = $exec_busc_nome -> fetch_assoc()){
        $dado_achado = $busca['NOME_SAL'];
        if($dado_achado == $nome_sala){
            $valida = true;
        }
    }
    if($valida == true){
        echo
        "
        <script type='text/JavaScript'>
            window.alert('já existe uma sala com esse nome. Tente outro nome.')
        </script>
        ";
    }else{

        $comando_cont_salas = "select count(*) as total_salas from salas";
        $exec_cont_salas = mysqli_query($con, $comando_cont_salas);
        $cont_salas = mysqli_fetch_assoc($exec_cont_salas);
        $resultado_cont_sala = $cont_salas['total_salas'];

        $ad_id_sala = $resultado_cont_sala + 1;

        $comando_insert_salax = "insert into salas (ID_SAL, NOME_SAL, FAIXA, TIPO) values ($ad_id_sala, '$nome_sala', '$faixa_sala', 'medio')";
        mysqli_query($con, $comando_insert_salax);

        $comando_criar_sala = "create table $nome_sala(
            ID_SAL INT,
            PRIMARY KEY (ID_SAL),

            ID_ALUN INT,
            FOREIGN KEY (ID_ALUN) REFERENCES alunos (ID_ALUN),

            ID_NOTAS INT,
            FOREIGN KEY (ID_NOTAS) REFERENCES notas (ID_NOTAS),

            NUM_SAL INT,
            FOREIGN KEY (NUM_SAL) REFERENCES salas (ID_SAL),

            FAIXA varchar(30),

            TIPO varchar(30)
        );";
        mysqli_query($con, $comando_criar_sala);

        echo
        "
        <script type='text/JavaScript'>
            window.alert('sala cadastrada com sucesso!')
        </script>
        ";
    }
}

/*FUNÇÃO CRIAR SALA FUNDAMENTAL*/
function cadastrar_sala_fundamental($nome_sala, $faixa_sala){
    include("conecta.php");

    $comando_busc_nome = "select * from salas where NOME_SAL = '$nome_sala'";
    $exec_busc_nome = mysqli_query($con, $comando_busc_nome);
    $valida = false;
    while($busca = $exec_busc_nome -> fetch_assoc()){
        $dado_achado = $busca['NOME_SAL'];
        if($dado_achado == $nome_sala){
            $valida = true;
        }
    }
    if($valida == true){
        echo
        "
        <script type='text/JavaScript'>
            window.alert('essa sala já existe')
        </script>
        ";
    }else{

        $comando_cont_salas = "select count(*) as total_salas from salas";
        $exec_cont_salas = mysqli_query($con, $comando_cont_salas);
        $cont_salas = mysqli_fetch_assoc($exec_cont_salas);
        $resultado_cont_sala = $cont_salas['total_salas'];

        $ad_id_sala = $resultado_cont_sala + 1;

        $comando_insert_salax = "insert into salas (ID_SAL, NOME_SAL, FAIXA, TIPO) values ($ad_id_sala, '$nome_sala', '$faixa_sala', 'fundamental')";
        mysqli_query($con, $comando_insert_salax);

        $comando_criar_sala = "create table $nome_sala(
            ID_SAL INT,
            PRIMARY KEY (ID_SAL),

            ID_ALUN INT,
            FOREIGN KEY (ID_ALUN) REFERENCES alunos (ID_ALUN),

            ID_NOTAS INT,
            FOREIGN KEY (ID_NOTAS) REFERENCES notas (ID_NOTAS),

            NUM_SAL INT,
            FOREIGN KEY (NUM_SAL) REFERENCES salas (ID_SAL),

            FAIXA varchar(30),

            TIPO varchar(30)
        );";
        mysqli_query($con, $comando_criar_sala);

        echo
        "
        <script type='text/JavaScript'>
            window.alert('sala cadastrada com sucesso!')
        </script>
        ";
    }
}

/*MOSTRAR SALAS NO SELECT*/
function select_salas(){
    include("conecta.php");

    $comando_sal = "select * from salas";
    $exec_sal = mysqli_query($con, $comando_sal);
    while($salas = $exec_sal -> fetch_assoc()){
        $id_sal = $salas['ID_SAL'];
        $nome_sal = $salas['NOME_SAL'];
        echo "<option value='$id_sal'>$nome_sal</option>";
    }
}
function select_salas_fundamen(){
    include("conecta.php");

    $comando_sal = "select * from salas where TIPO = 'fundamental'";
    $exec_sal = mysqli_query($con, $comando_sal);
    while($salas = $exec_sal -> fetch_assoc()){
        $id_sal = $salas['ID_SAL'];
        $nome_sal = $salas['NOME_SAL'];
        echo "<option value='$id_sal'>$nome_sal</option>";
    }
}
function select_salas_medio(){
    include("conecta.php");

    $comando_sal = "select * from salas where TIPO = 'medio'";
    $exec_sal = mysqli_query($con, $comando_sal);
    while($salas = $exec_sal -> fetch_assoc()){
        $id_sal = $salas['ID_SAL'];
        $nome_sal = $salas['NOME_SAL'];
        echo "<option value='$id_sal'>$nome_sal</option>";
    }
}
/*PESQUISA SALAS*/
    /*RETORNO FAIXA*/
        function retorno_faixa($id_faixa){
            include("conecta.php");

            $comando_faixa = "select * from salas where ID_SAL = $id_faixa";
            $exec_faixa = mysqli_query($con, $comando_faixa);
            while($faixa_repet = $exec_faixa -> fetch_assoc()){
                $faixa = $faixa_repet['FAIXA'];
                if($faixa == '1_ano'){
                    $tp1 = '1° medio';
                    return $tp1;
                }else if($faixa == '2_ano'){
                    $tp1 = '2° medio';
                    return $tp1;
                }else if($faixa == '3_ano'){
                    $tp1 = '3° medio';
                    return $tp1;
                }else if($faixa == '6_ano'){
                    $tp1 = '6° fundamental';
                    return $tp1;
                }else if($faixa == '7_ano'){
                    $tp1 = '7° fundamental';
                    return $tp1;
                }else if($faixa == '8_ano'){
                    $tp1 = '8° fundamental';
                    return $tp1;
                }else if($faixa == '9_ano'){
                    $tp1 = '9° fundamental';
                    return $tp1;
                }
            }
        }

    /*MOSTRAR TODAS AS SALAS */
        function mostra_salas(){
        include("conecta.php");

        $comando = "select * from salas";
        $exec = mysqli_query($con, $comando);
        while($dados = $exec -> fetch_assoc()){
            $id = $dados['ID_SAL'];
            $nome = $dados['NOME_SAL'];
            $faixa = $dados['FAIXA'];
            $tipo = $dados['TIPO'];

            $retorno = retorno_faixa($id);

            echo "
            <div class='conteiner-listagem-sala'>
                <table>
                    <thead>
                        <tr>
                            <th colspan = '3'> SALA </th>
                        </tr>
                        <tr>
                            <th>NOME</th>
                            <th>TIPO</th>
                            <th>LETIVO</th>
                        </tr>
                        <tr>
                            <td>$nome</td>
                            <td>$tipo</td>
                            <td>$retorno</td>
                        </tr>
                        <tr>
                            <th colspan = '3'>ALUNOS</th>
                        </tr>
                    </thead>

                    <tbody>";

            $comando_alunos = "select * from alunos where ID_SAL = $id";
            $exec_alunos = mysqli_query($con, $comando_alunos);
            while($alunos = $exec_alunos -> fetch_assoc()){
                $nome = $alunos['NOME'];

                echo "
                    <tr>
                        <td colspan = '3'> $nome </td>
                    </tr>
                ";
            }

            echo "
                    </tbody>
                </table>
            </div>";

        }
        }

/*PESQUISA ALUNOS*/
    /*MOSTRAR TODOS OS ALUNOS E NOTAS*/
        function mostra_alunos(){
        include("conecta.php");

        $comando = "select distinct
        alunos.NOME, alunos.ID_ALUN, salas.NOME_SAL, salas.TIPO,
        mat.N1_MAT, mat.N2_MAT, mat.N3_MAT, mat.N4_MAT, mat.MEDI_MAT,
        hist.N1_HIST, hist.N2_HIST, hist.N3_HIST, hist.N4_HIST, hist.MEDI_HIST,
        quim.N1_QUIM, quim.N2_QUIM, quim.N3_QUIM, quim.N4_QUIM, quim.MEDI_QUIM,
        fisi.N1_FISI, fisi.N2_FISI, fisi.N3_FISI, fisi.N4_FISI, fisi.MEDI_FISI,
        gram.N1_GRAM, gram.N2_GRAM, gram.N3_GRAM, gram.N4_GRAM, gram.MEDI_GRAM,
        artes.N1_ARTE, artes.N2_ARTE, artes.N3_ARTE, artes.N4_ARTE, artes.MEDI_ARTE,
        filosofia.N1_FILO, filosofia.N2_FILO, filosofia.N3_FILO, filosofia.N4_FILO, filosofia.MEDI_FILO,
        socio.N1_SOCIO, socio.N2_SOCIO, socio.N3_SOCIO, socio.N4_SOCIO, socio.MEDI_SOCIO,
        bio.N1_BIO, bio.N2_BIO, bio.N3_BIO, bio.N4_BIO, bio.MEDI_BIO,
        geo.N1_GEO, geo.N2_GEO, geo.N3_GEO, geo.N4_GEO, geo.MEDI_GEO
        FROM alunos
        INNER JOIN
            salas ON salas.ID_SAL = alunos.ID_SAL
        INNER JOIN
            mat ON mat.ID_MAT = alunos.ID_NOTAS
        INNER JOIN
            hist ON hist.ID_HIST = alunos.ID_NOTAS
        INNER JOIN
            quim ON quim.ID_QUIM = alunos.ID_NOTAS
        INNER JOIN
            fisi ON fisi.ID_FISI = alunos.ID_NOTAS
        INNER JOIN
            gram ON gram.ID_GRAM = alunos.ID_NOTAS
        INNER JOIN
            artes ON artes.ID_ARTE = alunos.ID_NOTAS
        INNER JOIN
            filosofia ON filosofia.ID_FILO = alunos.ID_NOTAS
        INNER JOIN
            socio ON socio.ID_SOCIO = alunos.ID_NOTAS
        INNER JOIN
            bio ON bio.ID_BIO = alunos.ID_NOTAS
        INNER JOIN
            geo ON geo.ID_GEO = alunos.ID_NOTAS
        WHERE ATIVO = 'sim'
        ;";
        $exec = mysqli_query($con, $comando);

        $cont = 0;
        while($dados = $exec -> fetch_assoc()){
            $cont = $cont + 1;

            $nome = $dados['NOME'];
            $nome_sala = $dados['NOME_SAL'];
            $tipo_sala = $dados['TIPO'];
            $id_alun = $dados['ID_ALUN'];

            $n1_mat = $dados['N1_MAT'];
            $n2_mat = $dados['N2_MAT'];
            $n3_mat = $dados['N3_MAT'];
            $n4_mat = $dados['N4_MAT'];
            $medi_mat = $dados['MEDI_MAT'];

            $n1_hist = $dados['N1_HIST'];
            $n2_hist = $dados['N2_HIST'];
            $n3_hist = $dados['N3_HIST'];
            $n4_hist = $dados['N4_HIST'];
            $medi_hist = $dados['MEDI_HIST'];

            $n1_quim = $dados['N1_QUIM'];
            $n2_quim = $dados['N2_QUIM'];
            $n3_quim = $dados['N3_QUIM'];
            $n4_quim = $dados['N4_QUIM'];
            $medi_quim = $dados['MEDI_QUIM'];

            $n1_fisi = $dados['N1_FISI'];
            $n2_fisi = $dados['N2_FISI'];
            $n3_fisi = $dados['N3_FISI'];
            $n4_fisi = $dados['N4_FISI'];
            $medi_fisi = $dados['MEDI_FISI'];

            $n1_gram = $dados['N1_GRAM'];
            $n2_gram = $dados['N2_GRAM'];
            $n3_gram = $dados['N3_GRAM'];
            $n4_gram = $dados['N4_GRAM'];
            $medi_gram = $dados['MEDI_GRAM'];

            $n1_art = $dados['N1_ARTE'];
            $n2_art = $dados['N2_ARTE'];
            $n3_art = $dados['N3_ARTE'];
            $n4_art = $dados['N4_ARTE'];
            $medi_art = $dados['MEDI_ARTE'];

            $n1_filo = $dados['N1_FILO'];
            $n2_filo = $dados['N2_FILO'];
            $n3_filo = $dados['N3_FILO'];
            $n4_filo = $dados['N4_FILO'];
            $medi_filo = $dados['MEDI_FILO'];

            $n1_socio = $dados['N1_SOCIO'];
            $n2_socio = $dados['N2_SOCIO'];
            $n3_socio = $dados['N3_SOCIO'];
            $n4_socio = $dados['N4_SOCIO'];
            $medi_socio = $dados['MEDI_SOCIO'];

            $n1_bio = $dados['N1_BIO'];
            $n2_bio = $dados['N2_BIO'];
            $n3_bio = $dados['N3_BIO'];
            $n4_bio = $dados['N4_BIO'];
            $medi_bio = $dados['MEDI_BIO'];

            $n1_geo = $dados['N1_GEO'];
            $n2_geo = $dados['N2_GEO'];
            $n3_geo = $dados['N3_GEO'];
            $n4_geo = $dados['N4_GEO'];
            $medi_geo = $dados['MEDI_GEO'];

            $contador = $cont - 1;

            if($tipo_sala == 'medio'){
                echo "
                <div class='conteiner-listagem lista'>
                    <div class='icones-superiores'>
                        <a href='editar_nota_medio.php?id=$id_alun'>
                            <span class='material-symbols-outlined'>
                                edit
                            </span>
                        </a>

                        <h2 onclick= 'mostrar($contador)'>$nome</h2>

                        <div class='conteiner-icone-listagem icone-delete'>
                        <a href='consultar_alunos.php?id=$id_alun&func=DELETAR'>
                            <span class='material-symbols-outlined'>
                                delete
                            </span>
                        </a>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th colspan='2'>ALUNO: $nome</th>
                                <th colspan='2'>SALA: $nome_sala</th>
                                <th colspan='2'>ID: $id_alun</th>
                            </tr>
                            <tr>
                                <th colspan='6'>NOTAS</th>
                            </tr>
                            <tr>
                                <th>MATERIA</th>
                                <th>NOTA 1</th>
                                <th>NOTA 2</th>
                                <th>NOTA 3</th>
                                <th>NOTA 4</th>
                                <th>MEDIA</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>MATEMATICA</td>
                            <td>$n1_mat</td>
                            <td>$n2_mat</td>
                            <td>$n3_mat</td>
                            <td>$n4_mat</td>
                            <td>$medi_mat</td>
                        </tr>

                        <tr>
                            <td>HISTORIA</td>
                            <td>$n1_hist</td>
                            <td>$n2_hist</td>
                            <td>$n3_hist</td>
                            <td>$n4_hist</td>
                            <td>$medi_hist</td>
                        </tr>

                        <tr>
                            <td>QUIMICA</td>
                            <td>$n1_quim</td>
                            <td>$n2_quim</td>
                            <td>$n3_quim</td>
                            <td>$n4_quim</td>
                            <td>$medi_quim</td>
                        </tr>

                        <tr>
                            <td>FISICA</td>
                            <td>$n1_fisi</td>
                            <td>$n2_fisi</td>
                            <td>$n3_fisi</td>
                            <td>$n4_fisi</td>
                            <td>$medi_fisi</td>
                        </tr>

                        <tr>
                            <td>GRAMATICA</td>
                            <td>$n1_gram</td>
                            <td>$n2_gram</td>
                            <td>$n3_gram</td>
                            <td>$n4_gram</td>
                            <td>$medi_gram</td>
                        </tr>

                        <tr>
                            <td>ARTES</td>
                            <td>$n1_art</td>
                            <td>$n2_art</td>
                            <td>$n3_art</td>
                            <td>$n4_art</td>
                            <td>$medi_art</td>
                        </tr>

                        <tr>
                            <td>FILOSOFIA</td>
                            <td>$n1_filo</td>
                            <td>$n2_filo</td>
                            <td>$n3_filo</td>
                            <td>$n4_filo</td>
                            <td>$medi_filo</td>
                        </tr>

                        <tr>
                            <td>SOCIOLOGIA</td>
                            <td>$n1_socio</td>
                            <td>$n2_socio</td>
                            <td>$n3_socio</td>
                            <td>$n4_socio</td>
                            <td>$medi_socio</td>
                        </tr>

                        <tr>
                            <td>BIOLGOIA</td>
                            <td>$n1_bio</td>
                            <td>$n2_bio</td>
                            <td>$n3_bio</td>
                            <td>$n4_bio</td>
                            <td>$medi_bio</td>
                        </tr>

                        <tr>
                            <td>GEOGRAFIA</td>
                            <td>$n1_geo</td>
                            <td>$n2_geo</td>
                            <td>$n3_geo</td>
                            <td>$n4_geo</td>
                            <td>$medi_geo</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                ";
            }else{
                echo "
                <div class='conteiner-listagem lista'>
                    <div class='icones-superiores'>
                        <a href='editar_nota_fundamen.php?id=$id_alun'>
                            <span class='material-symbols-outlined'>
                                edit
                            </span>
                        </a>

                        <h2 onclick= 'mostrar($contador)'>$nome</h2>

                        <div class='conteiner-icone-listagem icone-delete'>
                        <a href='consultar_alunos.php?id=$id_alun&func=DELETAR'>
                            <span class='material-symbols-outlined'>
                                delete
                            </span>
                        </a>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th colspan='2'>ALUNO: $nome</th>
                                <th colspan='2'>SALA: $nome_sala</th>
                                <th colspan='2'>ID: $id_alun</th>
                            </tr>
                            <tr>
                                <th colspan='6'>NOTAS</th>
                            </tr>
                            <tr>
                                <th>MATERIA</th>
                                <th>NOTA 1</th>
                                <th>NOTA 2</th>
                                <th>NOTA 3</th>
                                <th>NOTA 4</th>
                                <th>MEDIA</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>MATEMATICA</td>
                            <td>$n1_mat</td>
                            <td>$n2_mat</td>
                            <td>$n3_mat</td>
                            <td>$n4_mat</td>
                            <td>$medi_mat</td>
                        </tr>

                        <tr>
                            <td>HISTORIA</td>
                            <td>$n1_hist</td>
                            <td>$n2_hist</td>
                            <td>$n3_hist</td>
                            <td>$n4_hist</td>
                            <td>$medi_hist</td>
                        </tr>

                        <tr>
                            <td>GRAMATICA</td>
                            <td>$n1_gram</td>
                            <td>$n2_gram</td>
                            <td>$n3_gram</td>
                            <td>$n4_gram</td>
                            <td>$medi_gram</td>
                        </tr>

                        <tr>
                            <td>ARTES</td>
                            <td>$n1_art</td>
                            <td>$n2_art</td>
                            <td>$n3_art</td>
                            <td>$n4_art</td>
                            <td>$medi_art</td>
                        </tr>

                        <tr>
                            <td>FILOSOFIA</td>
                            <td>$n1_filo</td>
                            <td>$n2_filo</td>
                            <td>$n3_filo</td>
                            <td>$n4_filo</td>
                            <td>$medi_filo</td>
                        </tr>

                        <tr>
                            <td>SOCIOLOGIA</td>
                            <td>$n1_socio</td>
                            <td>$n2_socio</td>
                            <td>$n3_socio</td>
                            <td>$n4_socio</td>
                            <td>$medi_socio</td>
                        </tr>

                        <tr>
                            <td>BIOLGOIA</td>
                            <td>$n1_bio</td>
                            <td>$n2_bio</td>
                            <td>$n3_bio</td>
                            <td>$n4_bio</td>
                            <td>$medi_bio</td>
                        </tr>

                        <tr>
                            <td>GEOGRAFIA</td>
                            <td>$n1_geo</td>
                            <td>$n2_geo</td>
                            <td>$n3_geo</td>
                            <td>$n4_geo</td>
                            <td>$medi_geo</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                ";
            }
        }
        echo
        "
        <script type='text/JavaScript'>
            function mostrar(paran){
                var lista = document.querySelectorAll('.lista')
                lista[paran].classList.toggle('listagem-ativa')
            }
        </script>
        ";
        }

    /*MOSTRAR ALUNOS POR SALA*/
        function mostra_alun_sala(){
        include("conecta.php");

        $id_sala = $_GET['sala'];
        $coman_ident_sala = "select * from salas where id_sal = $id_sala";
        $exec_ident_sala = mysqli_query($con, $coman_ident_sala);
        $busc_ident_sala = mysqli_fetch_assoc ($exec_ident_sala);
        $result_ident_sala = $busc_ident_sala['NOME_SAL'];


        $comando = "select distinct
        alunos.nome, alunos.id_alun, salas.NOME_SAL, salas.TIPO,
        mat.N1_MAT, mat.N2_MAT, mat.N3_MAT, mat.N4_MAT, mat.MEDI_MAT,
        hist.N1_HIST, hist.N2_HIST, hist.N3_HIST, hist.N4_HIST, hist.MEDI_HIST,
        quim.N1_QUIM, quim.N2_QUIM, quim.N3_QUIM, quim.N4_QUIM, quim.MEDI_QUIM,
        fisi.N1_FISI, fisi.N2_FISI, fisi.N3_FISI, fisi.N4_FISI, fisi.MEDI_FISI,
        gram.N1_GRAM, gram.N2_GRAM, gram.N3_GRAM, gram.N4_GRAM, gram.MEDI_GRAM,
        artes.N1_ARTE, artes.N2_ARTE, artes.N3_ARTE, artes.N4_ARTE, artes.MEDI_ARTE,
        filosofia.N1_FILO, filosofia.N2_FILO, filosofia.N3_FILO, filosofia.N4_FILO, filosofia.MEDI_FILO,
        socio.N1_SOCIO, socio.N2_SOCIO, socio.N3_SOCIO, socio.N4_SOCIO, socio.MEDI_SOCIO,
        bio.N1_BIO, bio.N2_BIO, bio.N3_BIO, bio.N4_BIO, bio.MEDI_BIO,
        geo.N1_GEO, geo.N2_GEO, geo.N3_GEO, geo.N4_GEO, geo.MEDI_GEO
        FROM alunos
        INNER JOIN
            salas ON salas.ID_SAL = alunos.ID_SAL
        INNER JOIN
            mat ON mat.ID_MAT = alunos.ID_NOTAS
        INNER JOIN
            hist ON hist.ID_HIST = alunos.ID_NOTAS
        INNER JOIN
            quim ON quim.ID_QUIM = alunos.ID_NOTAS
        INNER JOIN
            fisi ON fisi.ID_FISI = alunos.ID_NOTAS
        INNER JOIN
            gram ON gram.ID_GRAM = alunos.ID_NOTAS
        INNER JOIN
            artes ON artes.ID_ARTE = alunos.ID_NOTAS
        INNER JOIN
            filosofia ON filosofia.ID_FILO = alunos.ID_NOTAS
        INNER JOIN
            socio ON socio.ID_SOCIO = alunos.ID_NOTAS
        INNER JOIN
            bio ON bio.ID_BIO = alunos.ID_NOTAS
        INNER JOIN
            geo ON geo.ID_GEO = alunos.ID_NOTAS
        WHERE ATIVO = 'sim' AND alunos.ID_SAL = $id_sala
        ;";
        $exec = mysqli_query($con, $comando);

        $cont = 0;
        while($dados = $exec -> fetch_assoc()){
            $cont = $cont + 1;

            $nome = $dados['nome'];
            $nome_sala = $dados['NOME_SAL'];
            $tipo_sala = $dados['TIPO'];
            $id_alun = $dados['id_alun'];

            $n1_mat = $dados['N1_MAT'];
            $n2_mat = $dados['N2_MAT'];
            $n3_mat = $dados['N3_MAT'];
            $n4_mat = $dados['N4_MAT'];
            $medi_mat = $dados['MEDI_MAT'];

            $n1_hist = $dados['N1_HIST'];
            $n2_hist = $dados['N2_HIST'];
            $n3_hist = $dados['N3_HIST'];
            $n4_hist = $dados['N4_HIST'];
            $medi_hist = $dados['MEDI_HIST'];

            $n1_quim = $dados['N1_QUIM'];
            $n2_quim = $dados['N2_QUIM'];
            $n3_quim = $dados['N3_QUIM'];
            $n4_quim = $dados['N4_QUIM'];
            $medi_quim = $dados['MEDI_QUIM'];

            $n1_fisi = $dados['N1_FISI'];
            $n2_fisi = $dados['N2_FISI'];
            $n3_fisi = $dados['N3_FISI'];
            $n4_fisi = $dados['N4_FISI'];
            $medi_fisi = $dados['MEDI_FISI'];

            $n1_gram = $dados['N1_GRAM'];
            $n2_gram = $dados['N2_GRAM'];
            $n3_gram = $dados['N3_GRAM'];
            $n4_gram = $dados['N4_GRAM'];
            $medi_gram = $dados['MEDI_GRAM'];

            $n1_art = $dados['N1_ARTE'];
            $n2_art = $dados['N2_ARTE'];
            $n3_art = $dados['N3_ARTE'];
            $n4_art = $dados['N4_ARTE'];
            $medi_art = $dados['MEDI_ARTE'];

            $n1_filo = $dados['N1_FILO'];
            $n2_filo = $dados['N2_FILO'];
            $n3_filo = $dados['N3_FILO'];
            $n4_filo = $dados['N4_FILO'];
            $medi_filo = $dados['MEDI_FILO'];

            $n1_socio = $dados['N1_SOCIO'];
            $n2_socio = $dados['N2_SOCIO'];
            $n3_socio = $dados['N3_SOCIO'];
            $n4_socio = $dados['N4_SOCIO'];
            $medi_socio = $dados['MEDI_SOCIO'];

            $n1_bio = $dados['N1_BIO'];
            $n2_bio = $dados['N2_BIO'];
            $n3_bio = $dados['N3_BIO'];
            $n4_bio = $dados['N4_BIO'];
            $medi_bio = $dados['MEDI_BIO'];

            $n1_geo = $dados['N1_GEO'];
            $n2_geo = $dados['N2_GEO'];
            $n3_geo = $dados['N3_GEO'];
            $n4_geo = $dados['N4_GEO'];
            $medi_geo = $dados['MEDI_GEO'];

            $contador = $cont - 1;

            if($tipo_sala == 'medio'){
                echo "
                <div class='conteiner-listagem lista'>
                    <div class='icones-superiores'>
                        <a href='editar_nota_medio.php?id=$id_alun'>
                            <span class='material-symbols-outlined'>
                                edit
                            </span>
                        </a>

                        <h2 onclick= 'mostrar($contador)'>$nome</h2>

                        <div class='conteiner-icone-listagem icone-delete'>
                        <a href='consultar_alunos.php?id=$id_alun&func=DELETAR'>
                            <span class='material-symbols-outlined'>
                                delete
                            </span>
                        </a>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th colspan='2'>ALUNO: $nome</th>
                                <th colspan='2'>SALA: $nome_sala</th>
                                <th colspan='2'>ID: $id_alun</th>
                            </tr>
                            <tr>
                                <th colspan='6'>NOTAS</th>
                            </tr>
                            <tr>
                                <th>MATERIA</th>
                                <th>NOTA 1</th>
                                <th>NOTA 2</th>
                                <th>NOTA 3</th>
                                <th>NOTA 4</th>
                                <th>MEDIA</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>MATEMATICA</td>
                            <td>$n1_mat</td>
                            <td>$n2_mat</td>
                            <td>$n3_mat</td>
                            <td>$n4_mat</td>
                            <td>$medi_mat</td>
                        </tr>

                        <tr>
                            <td>HISTORIA</td>
                            <td>$n1_hist</td>
                            <td>$n2_hist</td>
                            <td>$n3_hist</td>
                            <td>$n4_hist</td>
                            <td>$medi_hist</td>
                        </tr>

                        <tr>
                            <td>QUIMICA</td>
                            <td>$n1_quim</td>
                            <td>$n2_quim</td>
                            <td>$n3_quim</td>
                            <td>$n4_quim</td>
                            <td>$medi_quim</td>
                        </tr>

                        <tr>
                            <td>FISICA</td>
                            <td>$n1_fisi</td>
                            <td>$n2_fisi</td>
                            <td>$n3_fisi</td>
                            <td>$n4_fisi</td>
                            <td>$medi_fisi</td>
                        </tr>

                        <tr>
                            <td>GRAMATICA</td>
                            <td>$n1_gram</td>
                            <td>$n2_gram</td>
                            <td>$n3_gram</td>
                            <td>$n4_gram</td>
                            <td>$medi_gram</td>
                        </tr>

                        <tr>
                            <td>ARTES</td>
                            <td>$n1_art</td>
                            <td>$n2_art</td>
                            <td>$n3_art</td>
                            <td>$n4_art</td>
                            <td>$medi_art</td>
                        </tr>

                        <tr>
                            <td>FILOSOFIA</td>
                            <td>$n1_filo</td>
                            <td>$n2_filo</td>
                            <td>$n3_filo</td>
                            <td>$n4_filo</td>
                            <td>$medi_filo</td>
                        </tr>

                        <tr>
                            <td>SOCIOLOGIA</td>
                            <td>$n1_socio</td>
                            <td>$n2_socio</td>
                            <td>$n3_socio</td>
                            <td>$n4_socio</td>
                            <td>$medi_socio</td>
                        </tr>

                        <tr>
                            <td>BIOLGOIA</td>
                            <td>$n1_bio</td>
                            <td>$n2_bio</td>
                            <td>$n3_bio</td>
                            <td>$n4_bio</td>
                            <td>$medi_bio</td>
                        </tr>

                        <tr>
                            <td>GEOGRAFIA</td>
                            <td>$n1_geo</td>
                            <td>$n2_geo</td>
                            <td>$n3_geo</td>
                            <td>$n4_geo</td>
                            <td>$medi_geo</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                ";
            }else{
                echo "
                <div class='conteiner-listagem lista'>
                    <div class='icones-superiores'>
                        <a href='editar_nota_fundamen.php?id=$id_alun'>
                            <span class='material-symbols-outlined'>
                                edit
                            </span>
                        </a>

                        <h2 onclick= 'mostrar($contador)'>$nome</h2>

                        <div class='conteiner-icone-listagem icone-delete'>
                        <a href='consultar_alunos.php?id=$id_alun&func=DELETAR'>
                            <span class='material-symbols-outlined'>
                                delete
                            </span>
                        </a>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th colspan='2'>ALUNO: $nome</th>
                                <th colspan='2'>SALA: $nome_sala</th>
                                <th colspan='2'>ID: $id_alun</th>
                            </tr>
                            <tr>
                                <th colspan='6'>NOTAS</th>
                            </tr>
                            <tr>
                                <th>MATERIA</th>
                                <th>NOTA 1</th>
                                <th>NOTA 2</th>
                                <th>NOTA 3</th>
                                <th>NOTA 4</th>
                                <th>MEDIA</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>MATEMATICA</td>
                            <td>$n1_mat</td>
                            <td>$n2_mat</td>
                            <td>$n3_mat</td>
                            <td>$n4_mat</td>
                            <td>$medi_mat</td>
                        </tr>

                        <tr>
                            <td>HISTORIA</td>
                            <td>$n1_hist</td>
                            <td>$n2_hist</td>
                            <td>$n3_hist</td>
                            <td>$n4_hist</td>
                            <td>$medi_hist</td>
                        </tr>

                        <tr>
                            <td>GRAMATICA</td>
                            <td>$n1_gram</td>
                            <td>$n2_gram</td>
                            <td>$n3_gram</td>
                            <td>$n4_gram</td>
                            <td>$medi_gram</td>
                        </tr>

                        <tr>
                            <td>ARTES</td>
                            <td>$n1_art</td>
                            <td>$n2_art</td>
                            <td>$n3_art</td>
                            <td>$n4_art</td>
                            <td>$medi_art</td>
                        </tr>

                        <tr>
                            <td>FILOSOFIA</td>
                            <td>$n1_filo</td>
                            <td>$n2_filo</td>
                            <td>$n3_filo</td>
                            <td>$n4_filo</td>
                            <td>$medi_filo</td>
                        </tr>

                        <tr>
                            <td>SOCIOLOGIA</td>
                            <td>$n1_socio</td>
                            <td>$n2_socio</td>
                            <td>$n3_socio</td>
                            <td>$n4_socio</td>
                            <td>$medi_socio</td>
                        </tr>

                        <tr>
                            <td>BIOLGOIA</td>
                            <td>$n1_bio</td>
                            <td>$n2_bio</td>
                            <td>$n3_bio</td>
                            <td>$n4_bio</td>
                            <td>$medi_bio</td>
                        </tr>

                        <tr>
                            <td>GEOGRAFIA</td>
                            <td>$n1_geo</td>
                            <td>$n2_geo</td>
                            <td>$n3_geo</td>
                            <td>$n4_geo</td>
                            <td>$medi_geo</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                ";
            }
        }
        echo
        "
        <script type='text/JavaScript'>
            function mostrar(paran){
                var lista = document.querySelectorAll('.lista')
                lista[paran].classList.toggle('listagem-ativa')
            }
        </script>
        ";
        }

    /*PESQUISA ALUNOS POR SALA E NOME*/
        function pesq_alun_sala(){
            include("conecta.php");

            $id_sala = $_GET['sala'];
            $coman_ident_sala = "select * from salas where id_sal = $id_sala";
            $exec_ident_sala = mysqli_query($con, $coman_ident_sala);
            $busc_ident_sala = mysqli_fetch_assoc ($exec_ident_sala);
            $result_ident_sala = $busc_ident_sala['NOME_SAL'];

            $nome_aluno = $_GET['nome-aluno-pesq'];


            $comando_busc_nome = "select * from alunos where NOME LIKE '%$nome_aluno%' AND ID_SAL = $id_sala";
            $exec_busc_nome = mysqli_query($con, $comando_busc_nome);
            $valida = false;
            $linhas = mysqli_num_rows($exec_busc_nome);
            if($linhas == 0){
                $valida = false;
            }else{
                $valida = true;
            }



            if($valida == true){
                $comando = "select distinct
                alunos.nome, alunos.id_alun, salas.NOME_SAL, salas.TIPO,
                mat.N1_MAT, mat.N2_MAT, mat.N3_MAT, mat.N4_MAT, mat.MEDI_MAT,
                hist.N1_HIST, hist.N2_HIST, hist.N3_HIST, hist.N4_HIST, hist.MEDI_HIST,
                quim.N1_QUIM, quim.N2_QUIM, quim.N3_QUIM, quim.N4_QUIM, quim.MEDI_QUIM,
                fisi.N1_FISI, fisi.N2_FISI, fisi.N3_FISI, fisi.N4_FISI, fisi.MEDI_FISI,
                gram.N1_GRAM, gram.N2_GRAM, gram.N3_GRAM, gram.N4_GRAM, gram.MEDI_GRAM,
                artes.N1_ARTE, artes.N2_ARTE, artes.N3_ARTE, artes.N4_ARTE, artes.MEDI_ARTE,
                filosofia.N1_FILO, filosofia.N2_FILO, filosofia.N3_FILO, filosofia.N4_FILO, filosofia.MEDI_FILO,
                socio.N1_SOCIO, socio.N2_SOCIO, socio.N3_SOCIO, socio.N4_SOCIO, socio.MEDI_SOCIO,
                bio.N1_BIO, bio.N2_BIO, bio.N3_BIO, bio.N4_BIO, bio.MEDI_BIO,
                geo.N1_GEO, geo.N2_GEO, geo.N3_GEO, geo.N4_GEO, geo.MEDI_GEO
                FROM alunos
                INNER JOIN
                    salas ON salas.ID_SAL = alunos.ID_SAL
                INNER JOIN
                    mat ON mat.ID_MAT = alunos.ID_NOTAS
                INNER JOIN
                    hist ON hist.ID_HIST = alunos.ID_NOTAS
                INNER JOIN
                    quim ON quim.ID_QUIM = alunos.ID_NOTAS
                INNER JOIN
                    fisi ON fisi.ID_FISI = alunos.ID_NOTAS
                INNER JOIN
                    gram ON gram.ID_GRAM = alunos.ID_NOTAS
                INNER JOIN
                    artes ON artes.ID_ARTE = alunos.ID_NOTAS
                INNER JOIN
                    filosofia ON filosofia.ID_FILO = alunos.ID_NOTAS
                INNER JOIN
                    socio ON socio.ID_SOCIO = alunos.ID_NOTAS
                INNER JOIN
                    bio ON bio.ID_BIO = alunos.ID_NOTAS
                INNER JOIN
                    geo ON geo.ID_GEO = alunos.ID_NOTAS
                WHERE ATIVO = 'sim' AND alunos.ID_SAL = $id_sala AND alunos.NOME like '%$nome_aluno%'
                ;";
                $exec = mysqli_query($con, $comando);

                $cont = 0;
                while($dados = $exec -> fetch_assoc()){
                    $cont = $cont + 1;
    
                    $nome = $dados['nome'];
                    $nome_sala = $dados['NOME_SAL'];
                    $tipo_sala = $dados['TIPO'];
                    $id_alun = $dados['id_alun'];
    
                    $n1_mat = $dados['N1_MAT'];
                    $n2_mat = $dados['N2_MAT'];
                    $n3_mat = $dados['N3_MAT'];
                    $n4_mat = $dados['N4_MAT'];
                    $medi_mat = $dados['MEDI_MAT'];
    
                    $n1_hist = $dados['N1_HIST'];
                    $n2_hist = $dados['N2_HIST'];
                    $n3_hist = $dados['N3_HIST'];
                    $n4_hist = $dados['N4_HIST'];
                    $medi_hist = $dados['MEDI_HIST'];
    
                    $n1_quim = $dados['N1_QUIM'];
                    $n2_quim = $dados['N2_QUIM'];
                    $n3_quim = $dados['N3_QUIM'];
                    $n4_quim = $dados['N4_QUIM'];
                    $medi_quim = $dados['MEDI_QUIM'];
    
                    $n1_fisi = $dados['N1_FISI'];
                    $n2_fisi = $dados['N2_FISI'];
                    $n3_fisi = $dados['N3_FISI'];
                    $n4_fisi = $dados['N4_FISI'];
                    $medi_fisi = $dados['MEDI_FISI'];
    
                    $n1_gram = $dados['N1_GRAM'];
                    $n2_gram = $dados['N2_GRAM'];
                    $n3_gram = $dados['N3_GRAM'];
                    $n4_gram = $dados['N4_GRAM'];
                    $medi_gram = $dados['MEDI_GRAM'];
    
                    $n1_art = $dados['N1_ARTE'];
                    $n2_art = $dados['N2_ARTE'];
                    $n3_art = $dados['N3_ARTE'];
                    $n4_art = $dados['N4_ARTE'];
                    $medi_art = $dados['MEDI_ARTE'];
    
                    $n1_filo = $dados['N1_FILO'];
                    $n2_filo = $dados['N2_FILO'];
                    $n3_filo = $dados['N3_FILO'];
                    $n4_filo = $dados['N4_FILO'];
                    $medi_filo = $dados['MEDI_FILO'];
    
                    $n1_socio = $dados['N1_SOCIO'];
                    $n2_socio = $dados['N2_SOCIO'];
                    $n3_socio = $dados['N3_SOCIO'];
                    $n4_socio = $dados['N4_SOCIO'];
                    $medi_socio = $dados['MEDI_SOCIO'];
    
                    $n1_bio = $dados['N1_BIO'];
                    $n2_bio = $dados['N2_BIO'];
                    $n3_bio = $dados['N3_BIO'];
                    $n4_bio = $dados['N4_BIO'];
                    $medi_bio = $dados['MEDI_BIO'];
    
                    $n1_geo = $dados['N1_GEO'];
                    $n2_geo = $dados['N2_GEO'];
                    $n3_geo = $dados['N3_GEO'];
                    $n4_geo = $dados['N4_GEO'];
                    $medi_geo = $dados['MEDI_GEO'];
    
                    $contador = $cont - 1;
    
                    if($tipo_sala == 'medio'){
                        echo "
                        <div class='conteiner-listagem lista'>
                            <div class='icones-superiores'>
                                <a href='editar_nota_medio.php?id=$id_alun'>
                                    <span class='material-symbols-outlined'>
                                        edit
                                    </span>
                                </a>
        
                                <h2 onclick= 'mostrar($contador)'>$nome</h2>
        
                                <div class='conteiner-icone-listagem icone-delete'>
                                <a href='consultar_alunos.php?id=$id_alun&func=DELETAR'>
                                    <span class='material-symbols-outlined'>
                                        delete
                                    </span>
                                </a>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan='2'>ALUNO: $nome</th>
                                        <th colspan='2'>SALA: $nome_sala</th>
                                        <th colspan='2'>ID: $id_alun</th>
                                    </tr>
                                    <tr>
                                        <th colspan='6'>NOTAS</th>
                                    </tr>
                                    <tr>
                                        <th>MATERIA</th>
                                        <th>NOTA 1</th>
                                        <th>NOTA 2</th>
                                        <th>NOTA 3</th>
                                        <th>NOTA 4</th>
                                        <th>MEDIA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>MATEMATICA</td>
                                    <td>$n1_mat</td>
                                    <td>$n2_mat</td>
                                    <td>$n3_mat</td>
                                    <td>$n4_mat</td>
                                    <td>$medi_mat</td>
                                </tr>
        
                                <tr>
                                    <td>HISTORIA</td>
                                    <td>$n1_hist</td>
                                    <td>$n2_hist</td>
                                    <td>$n3_hist</td>
                                    <td>$n4_hist</td>
                                    <td>$medi_hist</td>
                                </tr>
        
                                <tr>
                                    <td>QUIMICA</td>
                                    <td>$n1_quim</td>
                                    <td>$n2_quim</td>
                                    <td>$n3_quim</td>
                                    <td>$n4_quim</td>
                                    <td>$medi_quim</td>
                                </tr>
        
                                <tr>
                                    <td>FISICA</td>
                                    <td>$n1_fisi</td>
                                    <td>$n2_fisi</td>
                                    <td>$n3_fisi</td>
                                    <td>$n4_fisi</td>
                                    <td>$medi_fisi</td>
                                </tr>
        
                                <tr>
                                    <td>GRAMATICA</td>
                                    <td>$n1_gram</td>
                                    <td>$n2_gram</td>
                                    <td>$n3_gram</td>
                                    <td>$n4_gram</td>
                                    <td>$medi_gram</td>
                                </tr>
        
                                <tr>
                                    <td>ARTES</td>
                                    <td>$n1_art</td>
                                    <td>$n2_art</td>
                                    <td>$n3_art</td>
                                    <td>$n4_art</td>
                                    <td>$medi_art</td>
                                </tr>
        
                                <tr>
                                    <td>FILOSOFIA</td>
                                    <td>$n1_filo</td>
                                    <td>$n2_filo</td>
                                    <td>$n3_filo</td>
                                    <td>$n4_filo</td>
                                    <td>$medi_filo</td>
                                </tr>
        
                                <tr>
                                    <td>SOCIOLOGIA</td>
                                    <td>$n1_socio</td>
                                    <td>$n2_socio</td>
                                    <td>$n3_socio</td>
                                    <td>$n4_socio</td>
                                    <td>$medi_socio</td>
                                </tr>
        
                                <tr>
                                    <td>BIOLGOIA</td>
                                    <td>$n1_bio</td>
                                    <td>$n2_bio</td>
                                    <td>$n3_bio</td>
                                    <td>$n4_bio</td>
                                    <td>$medi_bio</td>
                                </tr>
        
                                <tr>
                                    <td>GEOGRAFIA</td>
                                    <td>$n1_geo</td>
                                    <td>$n2_geo</td>
                                    <td>$n3_geo</td>
                                    <td>$n4_geo</td>
                                    <td>$medi_geo</td>
                                </tr>
        
                                </tbody>
                            </table>
                        </div>
                        ";
                    }else{
                        echo "
                        <div class='conteiner-listagem lista'>
                            <div class='icones-superiores'>
                                <a href='editar_nota_fundamen.php?id=$id_alun'>
                                    <span class='material-symbols-outlined'>
                                        edit
                                    </span>
                                </a>
    
                                <h2 onclick= 'mostrar($contador)'>$nome</h2>
    
                                <div class='conteiner-icone-listagem icone-delete'>
                                <a href='consultar_alunos.php?id=$id_alun&func=DELETAR'>
                                    <span class='material-symbols-outlined'>
                                        delete
                                    </span>
                                </a>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan='2'>ALUNO: $nome</th>
                                        <th colspan='2'>SALA: $nome_sala</th>
                                        <th colspan='2'>ID: $id_alun</th>
                                    </tr>
                                    <tr>
                                        <th colspan='6'>NOTAS</th>
                                    </tr>
                                    <tr>
                                        <th>MATERIA</th>
                                        <th>NOTA 1</th>
                                        <th>NOTA 2</th>
                                        <th>NOTA 3</th>
                                        <th>NOTA 4</th>
                                        <th>MEDIA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>MATEMATICA</td>
                                    <td>$n1_mat</td>
                                    <td>$n2_mat</td>
                                    <td>$n3_mat</td>
                                    <td>$n4_mat</td>
                                    <td>$medi_mat</td>
                                </tr>
        
                                <tr>
                                    <td>HISTORIA</td>
                                    <td>$n1_hist</td>
                                    <td>$n2_hist</td>
                                    <td>$n3_hist</td>
                                    <td>$n4_hist</td>
                                    <td>$medi_hist</td>
                                </tr>
        
                                <tr>
                                    <td>GRAMATICA</td>
                                    <td>$n1_gram</td>
                                    <td>$n2_gram</td>
                                    <td>$n3_gram</td>
                                    <td>$n4_gram</td>
                                    <td>$medi_gram</td>
                                </tr>
        
                                <tr>
                                    <td>ARTES</td>
                                    <td>$n1_art</td>
                                    <td>$n2_art</td>
                                    <td>$n3_art</td>
                                    <td>$n4_art</td>
                                    <td>$medi_art</td>
                                </tr>
        
                                <tr>
                                    <td>FILOSOFIA</td>
                                    <td>$n1_filo</td>
                                    <td>$n2_filo</td>
                                    <td>$n3_filo</td>
                                    <td>$n4_filo</td>
                                    <td>$medi_filo</td>
                                </tr>
        
                                <tr>
                                    <td>SOCIOLOGIA</td>
                                    <td>$n1_socio</td>
                                    <td>$n2_socio</td>
                                    <td>$n3_socio</td>
                                    <td>$n4_socio</td>
                                    <td>$medi_socio</td>
                                </tr>
        
                                <tr>
                                    <td>BIOLGOIA</td>
                                    <td>$n1_bio</td>
                                    <td>$n2_bio</td>
                                    <td>$n3_bio</td>
                                    <td>$n4_bio</td>
                                    <td>$medi_bio</td>
                                </tr>
        
                                <tr>
                                    <td>GEOGRAFIA</td>
                                    <td>$n1_geo</td>
                                    <td>$n2_geo</td>
                                    <td>$n3_geo</td>
                                    <td>$n4_geo</td>
                                    <td>$medi_geo</td>
                                </tr>
        
                                </tbody>
                            </table>
                        </div>
                        ";
                    }
                }
                echo
                "
                <script type='text/JavaScript'>
                    function mostrar(paran){
                        var lista = document.querySelectorAll('.lista')
                        lista[paran].classList.toggle('listagem-ativa')
                    }
                </script>
                ";
            }else{
                echo
                "
                <script type='text/JavaScript'>
                    window.alert('aluno não encontrado, tente outro nome ou outra sala.')
                </script>
                ";
            }
        }


/*EDITAR ALUNOS*/
    function edit_pegar_valores($id){
        include("conecta.php");

        $comando_encontra_alun = "select distinct
        alunos.nome, alunos.id_alun, alunos.id_notas, salas.NOME_SAL,
        mat.N1_MAT, mat.N2_MAT, mat.N3_MAT, mat.N4_MAT, mat.MEDI_MAT,
        hist.N1_HIST, hist.N2_HIST, hist.N3_HIST, hist.N4_HIST, hist.MEDI_HIST,
        quim.N1_QUIM, quim.N2_QUIM, quim.N3_QUIM, quim.N4_QUIM, quim.MEDI_QUIM,
        fisi.N1_FISI, fisi.N2_FISI, fisi.N3_FISI, fisi.N4_FISI, fisi.MEDI_FISI,
        gram.N1_GRAM, gram.N2_GRAM, gram.N3_GRAM, gram.N4_GRAM, gram.MEDI_GRAM,
        artes.N1_ARTE, artes.N2_ARTE, artes.N3_ARTE, artes.N4_ARTE, artes.MEDI_ARTE,
        filosofia.N1_FILO, filosofia.N2_FILO, filosofia.N3_FILO, filosofia.N4_FILO, filosofia.MEDI_FILO,
        socio.N1_SOCIO, socio.N2_SOCIO, socio.N3_SOCIO, socio.N4_SOCIO, socio.MEDI_SOCIO,
        bio.N1_BIO, bio.N2_BIO, bio.N3_BIO, bio.N4_BIO, bio.MEDI_BIO,
        geo.N1_GEO, geo.N2_GEO, geo.N3_GEO, geo.N4_GEO, geo.MEDI_GEO
        FROM alunos
        INNER JOIN
            salas ON salas.ID_SAL = alunos.ID_SAL
        INNER JOIN
            mat ON mat.ID_MAT = alunos.ID_NOTAS
        INNER JOIN
            hist ON hist.ID_HIST = alunos.ID_NOTAS
        INNER JOIN
            quim ON quim.ID_QUIM = alunos.ID_NOTAS
        INNER JOIN
            fisi ON fisi.ID_FISI = alunos.ID_NOTAS
        INNER JOIN
            gram ON gram.ID_GRAM = alunos.ID_NOTAS
        INNER JOIN
            artes ON artes.ID_ARTE = alunos.ID_NOTAS
        INNER JOIN
            filosofia ON filosofia.ID_FILO = alunos.ID_NOTAS
        INNER JOIN
            socio ON socio.ID_SOCIO = alunos.ID_NOTAS
        INNER JOIN
            bio ON bio.ID_BIO = alunos.ID_NOTAS
        INNER JOIN
            geo ON geo.ID_GEO = alunos.ID_NOTAS
        where alunos.id_alun = $id";
        $exec_encontra_alun = mysqli_query($con, $comando_encontra_alun);

        while($dados = $exec_encontra_alun ->fetch_assoc()){
            $nome = $dados['nome'];
            $id_notas = $dados['id_notas'];

            $n1_mat = $dados['N1_MAT'];
            $n2_mat = $dados['N2_MAT'];
            $n3_mat = $dados['N3_MAT'];
            $n4_mat = $dados['N4_MAT'];
            $medi_mat = $dados['MEDI_MAT'];

            $n1_hist = $dados['N1_HIST'];
            $n2_hist = $dados['N2_HIST'];
            $n3_hist = $dados['N3_HIST'];
            $n4_hist = $dados['N4_HIST'];
            $medi_hist = $dados['MEDI_HIST'];

            $n1_quim = $dados['N1_QUIM'];
            $n2_quim = $dados['N2_QUIM'];
            $n3_quim = $dados['N3_QUIM'];
            $n4_quim = $dados['N4_QUIM'];
            $medi_quim = $dados['MEDI_QUIM'];

            $n1_fisi = $dados['N1_FISI'];
            $n2_fisi = $dados['N2_FISI'];
            $n3_fisi = $dados['N3_FISI'];
            $n4_fisi = $dados['N4_FISI'];
            $medi_fisi = $dados['MEDI_FISI'];

            $n1_gram = $dados['N1_GRAM'];
            $n2_gram = $dados['N2_GRAM'];
            $n3_gram = $dados['N3_GRAM'];
            $n4_gram = $dados['N4_GRAM'];
            $medi_gram = $dados['MEDI_GRAM'];

            $n1_art = $dados['N1_ARTE'];
            $n2_art = $dados['N2_ARTE'];
            $n3_art = $dados['N3_ARTE'];
            $n4_art = $dados['N4_ARTE'];
            $medi_art = $dados['MEDI_ARTE'];

            $n1_filo = $dados['N1_FILO'];
            $n2_filo = $dados['N2_FILO'];
            $n3_filo = $dados['N3_FILO'];
            $n4_filo = $dados['N4_FILO'];
            $medi_filo = $dados['MEDI_FILO'];

            $n1_socio = $dados['N1_SOCIO'];
            $n2_socio = $dados['N2_SOCIO'];
            $n3_socio = $dados['N3_SOCIO'];
            $n4_socio = $dados['N4_SOCIO'];
            $medi_socio = $dados['MEDI_SOCIO'];

            $n1_bio = $dados['N1_BIO'];
            $n2_bio = $dados['N2_BIO'];
            $n3_bio = $dados['N3_BIO'];
            $n4_bio = $dados['N4_BIO'];
            $medi_bio = $dados['MEDI_BIO'];

            $n1_geo = $dados['N1_GEO'];
            $n2_geo = $dados['N2_GEO'];
            $n3_geo = $dados['N3_GEO'];
            $n4_geo = $dados['N4_GEO'];
            $medi_geo = $dados['MEDI_GEO'];
        }

        $lista = array("nomes" => $nome, "id_notas" => $id_notas,

            "n1_mat" => $n1_mat, "n2_mat" => $n2_mat, "n3_mat" => $n3_mat, "n4_mat" => $n4_mat, "medi_mat" => $medi_mat,

            "n1_hist" => $n1_hist, "n2_hist" => $n2_hist, "n3_hist" => $n3_hist, "n4_hist" => $n4_hist, "medi_hist" => $medi_hist,

            "n1_quim" => $n1_quim, "n2_quim" => $n2_quim, "n3_quim" => $n3_quim, "n4_quim" => $n4_quim, "medi_quim" => $medi_quim,

            "n1_fisi" => $n1_fisi, "n2_fisi" => $n2_fisi, "n3_fisi" => $n3_fisi, "n4_fisi" => $n4_fisi, "medi_fisi" => $medi_fisi,

            "n1_gram" => $n1_gram, "n2_gram" => $n2_gram, "n3_gram" => $n3_gram, "n4_gram" => $n4_gram, "medi_gram" => $medi_gram,

            "n1_art" => $n1_art, "n2_art" => $n2_art, "n3_art" => $n3_art, "n4_art" => $n4_art, "medi_art" => $medi_art,

            "n1_filo" => $n1_filo, "n2_filo" => $n2_filo, "n3_filo" => $n3_filo, "n4_filo" => $n4_filo, "medi_filo" => $medi_filo,

            "n1_socio" => $n1_socio, "n2_socio" => $n2_socio, "n3_socio" => $n3_socio, "n4_socio" => $n4_socio, "medi_socio" => $medi_socio,

            "n1_bio" => $n1_bio, "n2_bio" => $n2_bio, "n3_bio" => $n3_bio, "n4_bio" => $n4_bio, "medi_bio" => $medi_bio,

            "n1_geo" => $n1_geo, "n2_geo" => $n2_geo, "n3_geo" => $n3_geo, "n4_geo" => $n4_geo, "medi_geo" => $medi_geo,
        );

        return $lista;
    }

    function editar_valores($id_nota){
        include("conecta.php");

        /*DETERMINAÇÃO DE VARIAVEIS*/
        $n1_mat = $_GET['n1-mat'];
        $n2_mat = $_GET['n2-mat'];
        $n3_mat = $_GET['n3-mat'];
        $n4_mat = $_GET['n4-mat'];
        $medi_mat = ($n1_mat + $n2_mat + $n3_mat + $n4_mat) / 4;


        $n1_hist = $_GET['n1-hist'];
        $n2_hist = $_GET['n2-hist'];
        $n3_hist = $_GET['n3-hist'];
        $n4_hist = $_GET['n4-hist'];
        $medi_hist = ($n1_hist + $n2_hist + $n3_hist + $n4_hist) / 4;


        $n1_quim = $_GET['n1-quim'];
        $n2_quim = $_GET['n2-quim'];
        $n3_quim = $_GET['n3-quim'];
        $n4_quim = $_GET['n4-quim'];
        $medi_quim = ($n1_quim + $n2_quim + $n3_quim + $n4_quim) / 4;


        $n1_fisi = $_GET['n1-fisi'];
        $n2_fisi = $_GET['n2-fisi'];
        $n3_fisi = $_GET['n3-fisi'];
        $n4_fisi = $_GET['n4-fisi'];
        $medi_fisi = ($n1_fisi + $n2_fisi + $n3_fisi + $n4_fisi) / 4;


        $n1_gram = $_GET['n1-gram'];
        $n2_gram = $_GET['n2-gram'];
        $n3_gram = $_GET['n3-gram'];
        $n4_gram = $_GET['n4-gram'];
        $medi_gram = ($n1_gram + $n2_gram + $n3_gram + $n4_gram) / 4;


        $n1_arte = $_GET['n1-arte'];
        $n2_arte = $_GET['n2-arte'];
        $n3_arte = $_GET['n3-arte'];
        $n4_arte = $_GET['n4-arte'];
        $medi_arte = ($n1_arte + $n2_arte + $n3_arte + $n4_arte) / 4;


        $n1_filo = $_GET['n1-filo'];
        $n2_filo = $_GET['n2-filo'];
        $n3_filo = $_GET['n3-filo'];
        $n4_filo = $_GET['n4-filo'];
        $medi_filo = ($n1_filo + $n2_filo + $n3_filo + $n4_filo) / 4;


        $n1_socio = $_GET['n1-socio'];
        $n2_socio = $_GET['n2-socio'];
        $n3_socio = $_GET['n3-socio'];
        $n4_socio = $_GET['n4-socio'];
        $medi_socio = ($n1_socio + $n2_socio + $n3_socio + $n4_socio) / 4;


        $n1_bio = $_GET['n1-bio'];
        $n2_bio = $_GET['n2-bio'];
        $n3_bio = $_GET['n3-bio'];
        $n4_bio = $_GET['n4-bio'];
        $medi_bio = ($n1_bio + $n2_bio + $n3_bio + $n4_bio) / 4;


        $n1_geo = $_GET['n1-geo'];
        $n2_geo = $_GET['n2-geo'];
        $n3_geo = $_GET['n3-geo'];
        $n4_geo = $_GET['n4-geo'];
        $medi_geo = ($n1_geo + $n2_geo + $n3_geo + $n4_geo) / 4;


        /*COMANDO DE EDIÇÃO*/
        $coman_alter_mat= "
        update mat
        set
        N1_MAT = $n1_mat,
        N2_MAT = $n2_mat,
        N3_MAT = $n3_mat,
        N4_MAT = $n4_mat,
        MEDI_MAT = $medi_mat
        where ID_MAT = $id_nota
        ";
        mysqli_query($con, $coman_alter_mat);

        $coman_alter_hist = "
        update hist
        set
        N1_HIST = $n1_hist,
        N2_HIST = $n2_hist,
        N3_HIST = $n3_hist,
        N4_HIST = $n4_hist,
        MEDI_HIST = $medi_hist
        where ID_HIST = $id_nota;
        ";
        mysqli_query($con, $coman_alter_hist);

        $coman_alter_quim = "
        update quim
        set
        N1_QUIM = $n1_quim,
        N2_QUIM = $n2_quim,
        N3_QUIM = $n3_quim,
        N4_QUIM = $n4_quim,
        MEDI_QUIM = $medi_quim
        where ID_QUIM = $id_nota;
        ";
        mysqli_query($con, $coman_alter_quim);

        $coman_alter_fisi = "
        update fisi
        set
        N1_FISI = $n1_fisi,
        N2_FISI = $n2_fisi,
        N3_FISI = $n3_fisi,
        N4_FISI = $n4_fisi,
        MEDI_FISI = $medi_fisi
        where ID_FISI = $id_nota;
        ";
        mysqli_query($con, $coman_alter_fisi);

        $coman_alter_gram = "
        update gram
        set
        N1_GRAM = $n1_gram,
        N2_GRAM = $n2_gram,
        N3_GRAM = $n3_gram,
        N4_GRAM = $n4_gram,
        MEDI_GRAM = $medi_gram
        where ID_GRAM = $id_nota;
        ";
        mysqli_query($con, $coman_alter_gram);

        $coman_alter_artes = "
        update artes
        set
        N1_ARTE = $n1_arte,
        N2_ARTE = $n2_arte,
        N3_ARTE = $n3_arte,
        N4_ARTE = $n4_arte,
        MEDI_ARTE = $medi_arte
        where ID_ARTE = $id_nota;
        ";
        mysqli_query($con, $coman_alter_artes);

        $coman_alter_filo = "
        update filosofia
        set
        N1_FILO = $n1_filo,
        N2_FILO = $n2_filo,
        N3_FILO = $n3_filo,
        N4_FILO = $n4_filo,
        MEDI_FILO = $medi_filo
        where ID_FILO = $id_nota;
        ";
        mysqli_query($con, $coman_alter_filo);

        $coman_alter_socio = "
        update socio
        set
        N1_SOCIO = $n1_socio,
        N2_SOCIO = $n2_socio,
        N3_SOCIO = $n3_socio,
        N4_SOCIO = $n4_socio,
        MEDI_SOCIO = $medi_socio
        where ID_SOCIO = $id_nota;
        ";
        mysqli_query($con, $coman_alter_socio);

        $coman_alter_bio = "
        update bio
        set
        N1_BIO = $n1_bio,
        N2_BIO = $n2_bio,
        N3_BIO = $n3_bio,
        N4_BIO = $n4_bio,
        MEDI_BIO = $medi_bio
        where ID_BIO = $id_nota;
        ";
        mysqli_query($con, $coman_alter_bio);

        $coman_alter_geo = "
        update geo
        set
        N1_GEO = $n1_geo,
        N2_GEO = $n2_geo,
        N3_GEO = $n3_geo,
        N4_GEO = $n4_geo,
        MEDI_GEO = $medi_geo
        where ID_GEO = $id_nota;
        ";
        mysqli_query($con, $coman_alter_geo);



        echo
        "
        <script type='text/JavaScript'>
            window.alert('nota editada com sucesso!')
        </script>
        ";

        echo '
        <script type="text/JavaScript">
            window.location.replace("http://localhost/sistema_notas/consultar_alunos.php?mostra-aluno=PESQUISAR");
        </script>
        ';
    }

    function deletar($id){
        include("conecta.php");
        $comando_exclu = "update alunos set ativo = 'nao' where ID_ALUN = $id";
        mysqli_query($con, $comando_exclu);

        echo
        "
        <script type='text/JavaScript'>
            window.alert('aluno excluido com sucesso!')
        </script>
        ";
    }
?>