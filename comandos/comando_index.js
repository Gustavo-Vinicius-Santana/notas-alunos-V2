/*---------------------------MENU BURGUER-------------------------*/
var conteiner = document.querySelector('.conteiner-menu')
var burguer = document.querySelector('.menu')
burguer.addEventListener('click', open_menu)
function open_menu(){
    /*FECHAR OS CONTEINERS DAS MATERIAS*/
    n1mat.classList.remove('aparecer-n1mat')
        n2mat.classList.remove('aparecer-n2mat')
        n3mat.classList.remove('aparecer-n3mat')
        n4mat.classList.remove('aparecer-n4mat')
        mediamat.classList.remove('aparecer-medimat')
        conteinermat.classList.remove('aparecer1')
        mat.classList.remove('ativo')


        n1hist.classList.remove('aparecer-n1hist')
        n2hist.classList.remove('aparecer-n2hist')
        n3hist.classList.remove('aparecer-n3hist')
        n4hist.classList.remove('aparecer-n4hist')
        mediahist.classList.remove('aparecer-medihist')
        conteinerhist.classList.remove('aparecer2')
        hist.classList.remove('ativo')


        n1quim.classList.remove('aparecer-n1quim')
        n2quim.classList.remove('aparecer-n2quim')
        n3quim.classList.remove('aparecer-n3quim')
        n4quim.classList.remove('aparecer-n4quim')
        mediaquim.classList.remove('aparecer-mediaquim')
        conteinerquim.classList.remove('aparecer3')
        quim.classList.remove('ativo')


        n1fisi.classList.remove('aparecer-n1fisi')
        n2fisi.classList.remove('aparecer-n2fisi')
        n3fisi.classList.remove('aparecer-n3fisi')
        n4fisi.classList.remove('aparecer-n4fisi')
        medifisi.classList.remove('aparecer-medifisi')
        conteinerfisi.classList.remove('aparecer4')
        fisi.classList.remove('ativo')


        n1grama.classList.remove('aparecer-n1grama')
        n2grama.classList.remove('aparecer-n2grama')
        n3grama.classList.remove('aparecer-n3grama')
        n4grama.classList.remove('aparecer-n4grama')
        medigrama.classList.remove('aparecer-medigrama')
        conteinergrama.classList.remove('aparecer5')
        grama.classList.remove('ativo')


        n1arte.classList.remove('aparecer-n1arte')
        n2arte.classList.remove('aparecer-n2arte')
        n3arte.classList.remove('aparecer-n3arte')
        n4arte.classList.remove('aparecer-n4arte')
        mediarte.classList.remove('aparecer-mediarte')
        conteinerarte.classList.remove('aparecer6')
        arte.classList.remove('ativo')


        n1filo.classList.remove('aparecer-n1filo')
        n2filo.classList.remove('aparecer-n2filo')
        n3filo.classList.remove('aparecer-n3filo')
        n4filo.classList.remove('aparecer-n4filo')
        medifilo.classList.remove('aparecer-medifilo')
        conteinerfilo.classList.remove('aparecer7')
        filo.classList.remove('ativo')


        n1socio.classList.remove('aparecer-n1socio')
        n2socio.classList.remove('aparecer-n2socio')
        n3socio.classList.remove('aparecer-n3socio')
        n4socio.classList.remove('aparecer-n4socio')
        medisocio.classList.remove('aparecer-medisocio')
        conteinersocio.classList.remove('aparecer8')
        socio.classList.remove('ativo')


        n1bio.classList.remove('aparecer-n1bio')
        n2bio.classList.remove('aparecer-n2bio')
        n3bio.classList.remove('aparecer-n3bio')
        n4bio.classList.remove('aparecer-n4bio')
        medibio.classList.remove('aparecer-medibio')
        conteinerbio.classList.remove('aparecer9')
        bio.classList.remove('ativo')


        n1geo.classList.remove('aparecer-n1geo')
        n2geo.classList.remove('aparecer-n2geo')
        n3geo.classList.remove('aparecer-n3geo')
        n4geo.classList.remove('aparecer-n4geo')
        medigeo.classList.remove('aparecer-medigeo')
        conteinergeo.classList.remove('aparecer10')
        geo.classList.remove('ativo')

    /*ABRIR E FECHAR O MENU*/
        conteiner.classList.toggle('active')

    /*CORPO FORA DO MENU*/
        var corpo = document.querySelector('.corpo-principal')

    /*MUDANÇA DE ICONE*/
    var teste = conteiner.classList.contains('active')
    if(teste == true){
        burguer.textContent = 'close'
        corpo.addEventListener('click', open_menu)
    }else{
        burguer.textContent = 'menu'
        corpo.removeEventListener('click', open_menu)
    }
}

/*--------------------------MODO NOTURNO--------------------------*/
var icone = document.querySelector('.icone-modo')
var controle = document.querySelector('.control')
controle.addEventListener('change', mudar)
function mudar(){
    var corpo1 = document.querySelector('.corpo-principal')
    var texto1 = document.querySelectorAll('.text1')
    var icone1 = document.querySelectorAll('.icone1')
    var botao = document.querySelectorAll('.btn')
    var botao2 = document.querySelectorAll('.btn-2')
    var escolhas = document.querySelectorAll('.escolha')


    /*NO CORPO*/
    document.body.classList.toggle('dark0')
    corpo1.classList.toggle('dark1')

    /*NOS ICONES*/
    icone1[0].classList.toggle('md-light')
    icone1[1].classList.toggle('md-light')

    /*ESCOLHA*/
    escolhas[0].classList.toggle('dark7')
    escolhas[1].classList.toggle('dark7')

    /*NOS TEXTOS*/
    texto1[0].classList.toggle('dark4')
    texto1[1].classList.toggle('dark4')
    texto1[2].classList.toggle('dark4')
    texto1[3].classList.toggle('dark4')
    texto1[4].classList.toggle('dark4')
    texto1[5].classList.toggle('dark4')
    texto1[6].classList.toggle('dark4')
    texto1[7].classList.toggle('dark4')
    texto1[8].classList.toggle('dark4')
    texto1[9].classList.toggle('dark4')
    texto1[10].classList.toggle('dark4')
    texto1[11].classList.toggle('dark4')

    /*TEXTO NOTA MATEMATICA*/
    texto1[12].classList.toggle('dark4')
    texto1[13].classList.toggle('dark4')
    texto1[14].classList.toggle('dark4')
    texto1[15].classList.toggle('dark4')
    texto1[16].classList.toggle('dark4')

    /*TEXTO NOTA HISTORIA*/
    texto1[17].classList.toggle('dark4')
    texto1[18].classList.toggle('dark4')
    texto1[19].classList.toggle('dark4')
    texto1[20].classList.toggle('dark4')
    texto1[21].classList.toggle('dark4')

    /*TEXTO NOTA QUIMICA*/
    texto1[22].classList.toggle('dark4')
    texto1[23].classList.toggle('dark4')
    texto1[24].classList.toggle('dark4')
    texto1[25].classList.toggle('dark4')
    texto1[26].classList.toggle('dark4')

    /*TEXTO NOTA FISICA*/
    texto1[27].classList.toggle('dark4')
    texto1[28].classList.toggle('dark4')
    texto1[29].classList.toggle('dark4')
    texto1[30].classList.toggle('dark4')
    texto1[31].classList.toggle('dark4')

    /*TEXTO NOTA GRAMATICA*/
    texto1[32].classList.toggle('dark4')
    texto1[33].classList.toggle('dark4')
    texto1[34].classList.toggle('dark4')
    texto1[35].classList.toggle('dark4')
    texto1[36].classList.toggle('dark4')

    /*TEXTO NOTA ARTES*/
    texto1[37].classList.toggle('dark4')
    texto1[38].classList.toggle('dark4')
    texto1[39].classList.toggle('dark4')
    texto1[40].classList.toggle('dark4')
    texto1[41].classList.toggle('dark4')

    /*TEXTO NOTA FILOSOFIA*/
    texto1[42].classList.toggle('dark4')
    texto1[43].classList.toggle('dark4')
    texto1[44].classList.toggle('dark4')
    texto1[45].classList.toggle('dark4')
    texto1[46].classList.toggle('dark4')

    /*TEXTO NOTA SOCIOLOGIA*/
    texto1[47].classList.toggle('dark4')
    texto1[48].classList.toggle('dark4')
    texto1[49].classList.toggle('dark4')
    texto1[50].classList.toggle('dark4')
    texto1[51].classList.toggle('dark4')

    /*TEXTO NOTA BIOLOGIA*/
    texto1[52].classList.toggle('dark4')
    texto1[53].classList.toggle('dark4')
    texto1[54].classList.toggle('dark4')
    texto1[55].classList.toggle('dark4')
    texto1[56].classList.toggle('dark4')

    /*TEXTO NOTA GEOGRAFIA*/
    texto1[57].classList.toggle('dark4')
    texto1[58].classList.toggle('dark4')
    texto1[59].classList.toggle('dark4')
    texto1[60].classList.toggle('dark4')
    texto1[61].classList.toggle('dark4')

    /*BTN FORMULARIO MEDIO*/
    botao[0].classList.toggle('dark5')

    /*BTN FORMULARIO FUNDAMENTAL*/
    botao[1].classList.toggle('dark5')

    /*BTN FORMULARIO ENVIO-NOTAS*/
    botao2[0].classList.toggle('dark6')




    /*ICONE E ARMAZENAMENTO NO LOCALSTORAGE*/
    if(controle.checked){
        icone.textContent = 'nightlight_round'
        localStorage.setItem('theme', 'dark')
    }else{
        icone.textContent = 'light_mode'
        localStorage.setItem('theme', 'luz')
    }
}
/*MODO NOTURNO PÓS REFRESH*/
window.onload = testadora()
function testadora(){
    if (localStorage.getItem('theme') == 'luz'){
        controle.removeAttribute('checked', 'cheked')
    }else{
        controle.setAttribute('checked', 'checked')
        mudar()
    }
}

/*-----------------FORMULARIO DE CRIAR SALA-----------------------*/

var cortina = document.querySelector('.cortina-2')
var textfundamen = document.querySelector('.texto-fundamental')
var formu1 = document.querySelector('.esc-fundamen')
var fundamental = document.querySelector('.esc-2')
/*MOSTRAR CRIAR SALA MEDIO*/
fundamental.addEventListener('click', mostrafundamen)
function mostrafundamen(){
    formu1.classList.toggle('mostrar1')
    textfundamen.classList.toggle('subir2')
    fundamental.classList.toggle('sele-2')

    medio.classList.remove('sele-1')
    textmedi.classList.remove('subir1')
    formu2.classList.remove('mostrar2')

    var contem2 = fundamental.classList.contains('dark7')
    if(contem2 == true){
        fundamental.classList.toggle('sele-d1')
        medio.classList.remove('sele-d1')
    }

    cortina.classList.toggle('mostrar3-1')
    var contem = cortina.classList.contains('mostrar3-2')
    if(contem == true){
        cortina.classList.remove('mostrar3-2')
    }
}
var textmedi = document.querySelector('.texto-medio')
var formu2 = document.querySelector('.esc-medi')
var medio = document.querySelector('.esc-1')
/*MOSTRAR CRIAR SALA FUNDAMENTAL*/
medio.addEventListener('click', mostramedio)
function mostramedio(){
    formu2.classList.toggle('mostrar2')
    textmedi.classList.toggle('subir1')
    medio.classList.toggle('sele-1')
    fundamental.classList.remove('sele-2')
    textfundamen.classList.remove('subir2')
    formu1.classList.remove('mostrar1')


    var contem2 = fundamental.classList.contains('dark7')
    if(contem2 == true){
        medio.classList.toggle('sele-d1')
        fundamental.classList.remove('sele-d1')
    }

    cortina.classList.toggle('mostrar3-2')
    var contem = cortina.classList.contains('mostrar3-1')
    if(contem == true){
        cortina.classList.remove('mostrar3-1')
    }
}

/*TRATIVA DE INPUT NOME SALA*/
function trativa_input_nome_sal(id){
    var input_nome = document.querySelector(id)
    input_nome.value = input_nome.value.replace(/\s+/g, '_')
}
function ativar_input_fundamen(){
    var id_fundamen = '#input_fundamen'

    trativa_input_nome_sal(id_fundamen)
}
function ativar_input_med(){
    var id_medi = '#input_med'

    trativa_input_nome_sal(id_medi)
}

document.querySelector("#input_fundamen").oninput = ativar_input_fundamen
document.querySelector("#input_med").oninput = ativar_input_med


/*-------------------------FORMULARIO NOTAS-----------------------*/

/*CONTEINER*/
var caixamenu = document.querySelector('.conteiner-menu')

/*FUNÇÕES*/
function aprov(calc, mostra){
    if(calc >= 6){
        var contem1 = mostra.classList.contains('reprovado')
        if(contem1 == true){
            mostra.classList.remove('reprovado')
        }
        mostra.classList.add('aprovado')
    }else{
        var contem2 = mostra.classList.contains('aprovado')
        if(contem2 == true){
            mostra.classList.remove('aprovado')
        }
        mostra.classList.add('reprovado')
    }
}
function tratativa_caracter(id){
    var input_num = document.querySelector(id)
    input_num.value = input_num.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');

    var input_val = input_num.value
    var numero = Number(input_val)

    return numero
}
function verificar(val, ident){
    var id = ident
    var valor = document.querySelector(id)


    if(val > 10){
        val = 10
        valor.value = 10
    }else if(val < 0){
        val = 0
        valor.value = 0
    }

    return val
}
function calcular(idn1, idn2, idn3, idn4, result){
    /*INPUTS*/
    var n1 = tratativa_caracter(idn1)
    var n2 = tratativa_caracter(idn2)
    var n3 = tratativa_caracter(idn3)
    var n4 = tratativa_caracter(idn4)

    /*VERIFICAÇÃO*/
    var id1 = idn1
    var v1 = verificar(n1, id1)

    var id2 = idn2
    var v2 = verificar(n2, id2)

    var id3 = idn3
    var v3 = verificar(n3, id3)

    var id4 = idn4
    var v4 = verificar(n4, id4)

    if(v1 <= 10 && v2 <= 10 && v3 <= 10 && v4 <= 10){
        var media = (v1 + v2 + v3 + v4) / 4
        var mostragem = document.querySelector(result)
        mostragem.innerHTML = media
        aprov(media, mostragem)
    }
}


/*-------------------------INPUTS---------------------------------*/


/*------------------------INPUTS MAT------------------------------*/
var mat = document.querySelector('.mat')
var conteinermat = document.querySelector('.conteiner-input1')
mat.addEventListener('click', mostrarmat)

var n1mat = document.querySelector('.conteiner-n1mat')
var n2mat = document.querySelector('.conteiner-n2mat')
var n3mat = document.querySelector('.conteiner-n3mat')
var n4mat = document.querySelector('.conteiner-n4mat')
var mediamat = document.querySelector('.conteiner-medimat')
function mostrarmat(){
    n1mat.classList.toggle('aparecer-n1mat')
    n2mat.classList.toggle('aparecer-n2mat')
    n3mat.classList.toggle('aparecer-n3mat')
    n4mat.classList.toggle('aparecer-n4mat')
    mediamat.classList.toggle('aparecer-medimat')

    conteinermat.classList.toggle('aparecer1')
    mat.classList.toggle('ativo')
}
/*RESULTADO MEDIA*/
function ativar1(){
    calcular(n1_mat, n2_mat, n3_mat, n4_mat, result_mat)
}
var n1_mat = "#campo-1-mat"
var n2_mat = "#campo-2-mat"
var n3_mat = "#campo-3-mat"
var n4_mat = "#campo-4-mat"
var result_mat = ".media-1"
document.querySelector("#campo-1-mat").oninput = ativar1
document.querySelector("#campo-2-mat").oninput = ativar1
document.querySelector("#campo-3-mat").oninput = ativar1
document.querySelector("#campo-4-mat").oninput = ativar1



/*-------------------INPUTS HISTORIA------------------------*/

var hist = document.querySelector('.histo')
var conteinerhist = document.querySelector('.conteiner-input2')
hist.addEventListener('click', mostrahist)

var n1hist = document.querySelector('.conteiner-n1hist')
var n2hist = document.querySelector('.conteiner-n2hist')
var n3hist = document.querySelector('.conteiner-n3hist')
var n4hist = document.querySelector('.conteiner-n4hist')
var mediahist = document.querySelector('.conteiner-medihist')
function mostrahist(){
    n1hist.classList.toggle('aparecer-n1hist')
    n2hist.classList.toggle('aparecer-n2hist')
    n3hist.classList.toggle('aparecer-n3hist')
    n4hist.classList.toggle('aparecer-n4hist')
    mediahist.classList.toggle('aparecer-medihist')

    conteinerhist.classList.toggle('aparecer2')
    hist.classList.toggle('ativo')
}
/*RESULTADO HISTORIA*/
function ativar2(){
    calcular(n1_hist, n2_hist, n3_hist, n4_hist, result_hist)
}
var n1_hist = "#campo-1-hist"
var n2_hist = "#campo-2-hist"
var n3_hist = "#campo-3-hist"
var n4_hist = "#campo-4-hist"
var result_hist = ".media-2"
document.querySelector("#campo-1-hist").oninput = ativar2
document.querySelector("#campo-2-hist").oninput = ativar2
document.querySelector("#campo-3-hist").oninput = ativar2
document.querySelector("#campo-4-hist").oninput = ativar2



/*-----------------------INPUTS QUIMICA-----------------------*/

var quim = document.querySelector('.quimi')
var conteinerquim = document.querySelector('.conteiner-input3')
quim.addEventListener('click', mostrarquim)

var n1quim = document.querySelector('.conteiner-n1quim')
var n2quim = document.querySelector('.conteiner-n2quim')
var n3quim = document.querySelector('.conteiner-n3quim')
var n4quim = document.querySelector('.conteiner-n4quim')
var mediaquim = document.querySelector('.conteiner-mediaquim')
function mostrarquim(){
    n1quim.classList.toggle('aparecer-n1quim')
    n2quim.classList.toggle('aparecer-n2quim')
    n3quim.classList.toggle('aparecer-n3quim')
    n4quim.classList.toggle('aparecer-n4quim')
    mediaquim.classList.toggle('aparecer-mediaquim')

    conteinerquim.classList.toggle('aparecer3')
    quim.classList.toggle('ativo')
}
/*RESULTADO QUIMICA*/
function ativar3(){
    calcular(n1_quim, n2_quim, n3_quim, n4_quim, result_quim)
}
var n1_quim = "#campo-1-quim"
var n2_quim = "#campo-2-quim"
var n3_quim = "#campo-3-quim"
var n4_quim = "#campo-4-quim"
var result_quim = ".media-3"
document.querySelector("#campo-1-quim").oninput = ativar3
document.querySelector("#campo-2-quim").oninput = ativar3
document.querySelector("#campo-3-quim").oninput = ativar3
document.querySelector("#campo-4-quim").oninput = ativar3


/*------------------------INPUTS FISICA--------------------------*/

var fisi = document.querySelector('.fisi')
var conteinerfisi = document.querySelector('.conteiner-input4')
fisi.addEventListener('click', mostrarfisi)

var n1fisi = document.querySelector('.conteiner-n1fisi')
var n2fisi = document.querySelector('.conteiner-n2fisi')
var n3fisi = document.querySelector('.conteiner-n3fisi')
var n4fisi = document.querySelector('.conteiner-n4fisi')
var medifisi = document.querySelector('.conteiner-medifisi')
function mostrarfisi(){
    n1fisi.classList.toggle('aparecer-n1fisi')
    n2fisi.classList.toggle('aparecer-n2fisi')
    n3fisi.classList.toggle('aparecer-n3fisi')
    n4fisi.classList.toggle('aparecer-n4fisi')
    medifisi.classList.toggle('aparecer-medifisi')

    conteinerfisi.classList.toggle('aparecer4')
    fisi.classList.toggle('ativo')
}
/*RESULTADO FISICA*/
function ativar4(){
    calcular(n1_fisi, n2_fisi, n3_fisi, n4_fisi, result_fisi)
}
var n1_fisi = "#campo-1-fisi"
var n2_fisi = "#campo-2-fisi"
var n3_fisi = "#campo-3-fisi"
var n4_fisi = "#campo-4-fisi"
var result_fisi = ".media-4"
document.querySelector("#campo-1-fisi").oninput = ativar4
document.querySelector("#campo-2-fisi").oninput = ativar4
document.querySelector("#campo-3-fisi").oninput = ativar4
document.querySelector("#campo-4-fisi").oninput = ativar4


/*------------------------INPUTS GRAMATICA-------------------------*/

var grama = document.querySelector('.grama')
var conteinergrama = document.querySelector('.conteiner-input5')
grama.addEventListener('click', mostrargrama)

var n1grama = document.querySelector('.conteiner-n1grama')
var n2grama = document.querySelector('.conteiner-n2grama')
var n3grama = document.querySelector('.conteiner-n3grama')
var n4grama = document.querySelector('.conteiner-n4grama')
var medigrama = document.querySelector('.conteiner-medigrama')
function mostrargrama(){
    n1grama.classList.toggle('aparecer-n1grama')
    n2grama.classList.toggle('aparecer-n2grama')
    n3grama.classList.toggle('aparecer-n3grama')
    n4grama.classList.toggle('aparecer-n4grama')
    medigrama.classList.toggle('aparecer-medigrama')

    conteinergrama.classList.toggle('aparecer5')
    grama.classList.toggle('ativo')
}
/*RESULTADO GRAMATICA*/
function ativar5(){
    calcular(n1_grama, n2_grama, n3_grama, n4_grama, result_grama)
}
var n1_grama = "#campo-1-gram"
var n2_grama = "#campo-2-gram"
var n3_grama = "#campo-3-gram"
var n4_grama = "#campo-4-gram"
var result_grama = ".media-5"
document.querySelector("#campo-1-gram").oninput = ativar5
document.querySelector("#campo-2-gram").oninput = ativar5
document.querySelector("#campo-3-gram").oninput = ativar5
document.querySelector("#campo-4-gram").oninput = ativar5


/*------------------------INPUTS ARTE-----------------------------*/

var arte = document.querySelector('.arte')
var conteinerarte = document.querySelector('.conteiner-input6')
arte.addEventListener('click', mostrararte)

var n1arte = document.querySelector('.conteiner-n1arte')
var n2arte = document.querySelector('.conteiner-n2arte')
var n3arte = document.querySelector('.conteiner-n3arte')
var n4arte = document.querySelector('.conteiner-n4arte')
var mediarte = document.querySelector('.conteiner-mediarte')
function mostrararte(){
    n1arte.classList.toggle('aparecer-n1arte')
    n2arte.classList.toggle('aparecer-n2arte')
    n3arte.classList.toggle('aparecer-n3arte')
    n4arte.classList.toggle('aparecer-n4arte')
    mediarte.classList.toggle('aparecer-mediarte')

    conteinerarte.classList.toggle('aparecer6')
    arte.classList.toggle('ativo')
}
/*RESULTADO ARTE*/
function ativar6(){
    calcular(n1_arte, n2_arte, n3_arte, n4_arte, result_arte)
}
var n1_arte = "#campo-1-arte"
var n2_arte = "#campo-2-arte"
var n3_arte = "#campo-3-arte"
var n4_arte = "#campo-4-arte"
var result_arte = ".media-6"
document.querySelector("#campo-1-arte").oninput = ativar6
document.querySelector("#campo-2-arte").oninput = ativar6
document.querySelector("#campo-3-arte").oninput = ativar6
document.querySelector("#campo-4-arte").oninput = ativar6


/*----------------------INPUTS FILOSOFIA-------------------------*/

var filo = document.querySelector('.filoso')
var conteinerfilo = document.querySelector('.conteiner-input7')
filo.addEventListener('click', mostrarfilo)

var n1filo = document.querySelector('.conteiner-n1filo')
var n2filo = document.querySelector('.conteiner-n2filo')
var n3filo = document.querySelector('.conteiner-n3filo')
var n4filo = document.querySelector('.conteiner-n4filo')
var medifilo = document.querySelector('.conteiner-medifilo')
function mostrarfilo(){
    n1filo.classList.toggle('aparecer-n1filo')
    n2filo.classList.toggle('aparecer-n2filo')
    n3filo.classList.toggle('aparecer-n3filo')
    n4filo.classList.toggle('aparecer-n4filo')
    medifilo.classList.toggle('aparecer-medifilo')

    conteinerfilo.classList.toggle('aparecer7')
    filo.classList.toggle('ativo')
}
/*RESULTADO FILOSOFIA*/
function ativar7(){
    calcular(n1_filo, n2_filo, n3_filo, n4_filo, result_filo)
}
var n1_filo = "#campo-1-filo"
var n2_filo = "#campo-2-filo"
var n3_filo = "#campo-3-filo"
var n4_filo = "#campo-4-filo"
var result_filo = ".media-7"
document.querySelector("#campo-1-filo").oninput = ativar7
document.querySelector("#campo-2-filo").oninput = ativar7
document.querySelector("#campo-3-filo").oninput = ativar7
document.querySelector("#campo-4-filo").oninput = ativar7


/*------------------------INPUTS SOCIOLOGIA----------------------*/

var socio = document.querySelector('.sociolo')
var conteinersocio = document.querySelector('.conteiner-input8')
socio.addEventListener('click', mostrarsocio)

var n1socio = document.querySelector('.conteiner-n1socio')
var n2socio = document.querySelector('.conteiner-n2socio')
var n3socio = document.querySelector('.conteiner-n3socio')
var n4socio = document.querySelector('.conteiner-n4socio')
var medisocio = document.querySelector('.conteiner-medisocio')
function mostrarsocio(){
    n1socio.classList.toggle('aparecer-n1socio')
    n2socio.classList.toggle('aparecer-n2socio')
    n3socio.classList.toggle('aparecer-n3socio')
    n4socio.classList.toggle('aparecer-n4socio')
    medisocio.classList.toggle('aparecer-medisocio')

    conteinersocio.classList.toggle('aparecer8')
    socio.classList.toggle('ativo')
}
/*RESULTADO SOCIOLOGIA*/
function ativar8(){
    calcular(n1_socio, n2_socio, n3_socio, n4_socio, result_socio)
}
var n1_socio = "#campo-1-socio"
var n2_socio = "#campo-2-socio"
var n3_socio = "#campo-3-socio"
var n4_socio = "#campo-4-socio"
var result_socio = ".media-8"
document.querySelector("#campo-1-socio").oninput = ativar8
document.querySelector("#campo-2-socio").oninput = ativar8
document.querySelector("#campo-3-socio").oninput = ativar8
document.querySelector("#campo-4-socio").oninput = ativar8


/*-----------------------INPUTS BILOGIA--------------------------*/

var bio = document.querySelector('.biolo')
var conteinerbio = document.querySelector('.conteiner-input9')
bio.addEventListener('click', mostrarbio)

var n1bio = document.querySelector('.conteiner-n1bio')
var n2bio = document.querySelector('.conteiner-n2bio')
var n3bio = document.querySelector('.conteiner-n3bio')
var n4bio = document.querySelector('.conteiner-n4bio')
var medibio = document.querySelector('.conteiner-medibio')
function mostrarbio(){
    n1bio.classList.toggle('aparecer-n1bio')
    n2bio.classList.toggle('aparecer-n2bio')
    n3bio.classList.toggle('aparecer-n3bio')
    n4bio.classList.toggle('aparecer-n4bio')
    medibio.classList.toggle('aparecer-medibio')

    conteinerbio.classList.toggle('aparecer9')
    bio.classList.toggle('ativo')
}
/*RESULTADO BIOLOGIA*/
function ativar9(){
    calcular(n1_bio, n2_bio, n3_bio, n4_bio, result_bio)
}
var n1_bio = "#campo-1-bio"
var n2_bio = "#campo-2-bio"
var n3_bio = "#campo-3-bio"
var n4_bio = "#campo-4-bio"
var result_bio = ".media-9"
document.querySelector("#campo-1-bio").oninput = ativar9
document.querySelector("#campo-2-bio").oninput = ativar9
document.querySelector("#campo-3-bio").oninput = ativar9
document.querySelector("#campo-4-bio").oninput = ativar9


/*---------------------INPUTS GEOGRAFIA--------------------------*/

var geo = document.querySelector('.geo')
var conteinergeo = document.querySelector('.conteiner-input10')
geo.addEventListener('click', mostrargeo)

var n1geo = document.querySelector('.conteiner-n1geo')
var n2geo = document.querySelector('.conteiner-n2geo')
var n3geo = document.querySelector('.conteiner-n3geo')
var n4geo = document.querySelector('.conteiner-n4geo')
var medigeo = document.querySelector('.conteiner-medigeo')
function mostrargeo(){
    n1geo.classList.toggle('aparecer-n1geo')
    n2geo.classList.toggle('aparecer-n2geo')
    n3geo.classList.toggle('aparecer-n3geo')
    n4geo.classList.toggle('aparecer-n4geo')
    medigeo.classList.toggle('aparecer-medigeo')

    conteinergeo.classList.toggle('aparecer10')
    geo.classList.toggle('ativo')
}
/*RESULTADO GEOGRAFIA*/
function ativar10(){
    calcular(n1_geo, n2_geo, n3_geo, n4_geo, result_geo)
}
var n1_geo = "#campo-1-geo"
var n2_geo = "#campo-2-geo"
var n3_geo = "#campo-3-geo"
var n4_geo = "#campo-4-geo"
var result_geo = ".media-10"
document.querySelector("#campo-1-geo").oninput = ativar10
document.querySelector("#campo-2-geo").oninput = ativar10
document.querySelector("#campo-3-geo").oninput = ativar10
document.querySelector("#campo-4-geo").oninput = ativar10



/*MUDANÇA DE FORMULARIO DE ATRIBUIÇÃO DE NOTAS SE FOR ALUNO DO FUNDAMENTAL OU MEDIO*/
/*FUNÇÃO DE SELECIONADO*/
function tipo_selecionado(tipo1){
    /*VARIVAVEIS LOCAIS*/
        /*TIPO DO FORMULARIO*/
            var tipo_formulario = document.querySelector('.tipo-formulario-notas')
        /*CONTEINERS*/
            var select_medio = document.querySelector('.conteiner-select-medio')
            var select_fundamen = document.querySelector('.conteiner-select-fundamen')


            var conteiner_ocultador1 = document.querySelector('.ocultador-de-materia1')
            var conteiner_ocultador2 = document.querySelector('.ocultador-de-materia2')
            var conteiner_fisica = document.querySelector('.conteiner-fisica')
            var conteiner_quimica = document.querySelector('.conteiner-quimica')
        /*INPUTS*/
            var input_n1_quim = document.querySelector('.n1-quim')
            var input_n2_quim = document.querySelector('.n2-quim')
            var input_n3_quim = document.querySelector('.n3-quim')
            var input_n4_quim = document.querySelector('.n4-quim')

            var input_n1_fisi = document.querySelector('.n1-fisi')
            var input_n2_fisi = document.querySelector('.n2-fisi')
            var input_n3_fisi = document.querySelector('.n3-fisi')
            var input_n4_fisi = document.querySelector('.n4-fisi')
        /*SELECTS*/
            var input_select_medio = document.querySelector('.salas-medio')
            var input_select_fundamen = document.querySelector('.salas-fundamen')

    /*FUNÇÕES*/
        /*OCULTAR SELECT*/
            function oculta_select(){
                select_fundamen.classList.add('esconde-select')
                select_medio.classList.add('mostra-select')

                input_select_medio.setAttribute('disabled', 'true')
                input_select_fundamen.removeAttribute('disabled')
            }
        /*MOSTRA SELECT*/
            function mostra_select(){
                select_fundamen.classList.remove('esconde-select')
                select_medio.classList.remove('mostra-select')

                input_select_medio.removeAttribute('disabled')
                input_select_fundamen.setAttribute('disabled', 'true')
            }
        /*PARA OCULTAR INPUTS*/
            function remove_quim(){
                n1quim.classList.remove('aparecer-n1quim')
                n2quim.classList.remove('aparecer-n2quim')
                n3quim.classList.remove('aparecer-n3quim')
                n4quim.classList.remove('aparecer-n4quim')
                mediaquim.classList.remove('aparecer-mediaquim')

                conteinerquim.classList.remove('aparecer3')
                quim.classList.remove('ativo')

                input_n1_quim.setAttribute('disabled', 'true')
                input_n2_quim.setAttribute('disabled', 'true')
                input_n3_quim.setAttribute('disabled', 'true')
                input_n4_quim.setAttribute('disabled', 'true')
            }
            function remove_fisi(){
                n1fisi.classList.remove('aparecer-n1fisi')
                n2fisi.classList.remove('aparecer-n2fisi')
                n3fisi.classList.remove('aparecer-n3fisi')
                n4fisi.classList.remove('aparecer-n4fisi')
                medifisi.classList.remove('aparecer-medifisi')

                conteinerfisi.classList.remove('aparecer4')
                fisi.classList.remove('ativo')

                input_n1_fisi.setAttribute('disabled', 'true')
                input_n2_fisi.setAttribute('disabled', 'true')
                input_n3_fisi.setAttribute('disabled', 'true')
                input_n4_fisi.setAttribute('disabled', 'true')
            }
        /*PARA MOSTRAR INPUTS*/
            function retorna_quim_e_fisi(){
                conteiner_ocultador1.classList.remove('diminuir')
                conteiner_ocultador2.classList.remove('diminuir')
                conteiner_fisica.classList.remove('oculto2')
                conteiner_quimica.classList.remove('oculto1')

                input_n1_quim.removeAttribute('disabled')
                input_n2_quim.removeAttribute('disabled')
                input_n3_quim.removeAttribute('disabled')
                input_n4_quim.removeAttribute('disabled')

                input_n1_fisi.removeAttribute('disabled')
                input_n2_fisi.removeAttribute('disabled')
                input_n3_fisi.removeAttribute('disabled')
                input_n4_fisi.removeAttribute('disabled')
            }

    /*adicionando e removendo classes*/
    tipo1.classList.toggle('selecionado')

    if(tipo1.classList.contains('selecionado') == true){
        conteiner_fisica.classList.add('oculto2')
        conteiner_quimica.classList.add('oculto1')
        function add_tempo(){
            conteiner_ocultador1.classList.add('diminuir')
            conteiner_ocultador2.classList.add('diminuir')
        }
        setTimeout(add_tempo, 1000)
        remove_fisi()
        remove_quim()
        oculta_select()

        tipo_formulario.value = "fundamental"
    }else{
        retorna_quim_e_fisi()
        mostra_select()

        tipo_formulario.value = "medio"
    }
}
/*FUNÇÃO ATIVADO POR CLICK*/
function ativar_tipo_fundamen(){
    tipo_selecionado(tipoFundamen)
}
/*FORMULARIO DE NOTAS TIPO FUNDAMENTAL*/
var tipoFundamen = document.querySelector('.tipo-fundamental')
tipoFundamen.addEventListener('click', ativar_tipo_fundamen)
