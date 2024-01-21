/*---------------------------MENU BURGUER-------------------------*/
var conteiner = document.querySelector('.conteiner-menu')
var burguer = document.querySelector('.menu')
burguer.addEventListener('click', open_menu)
function open_menu(){
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

    /*NO TEXTO */
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

    texto1[12].classList.toggle('dark4')
    texto1[13].classList.toggle('dark4')
    texto1[14].classList.toggle('dark4')
    texto1[15].classList.toggle('dark4')
    texto1[16].classList.toggle('dark4')

    texto1[17].classList.toggle('dark4')
    texto1[18].classList.toggle('dark4')
    texto1[19].classList.toggle('dark4')
    texto1[20].classList.toggle('dark4')
    texto1[21].classList.toggle('dark4')

    texto1[22].classList.toggle('dark4')
    texto1[23].classList.toggle('dark4')
    texto1[24].classList.toggle('dark4')
    texto1[25].classList.toggle('dark4')
    texto1[26].classList.toggle('dark4')

    texto1[27].classList.toggle('dark4')
    texto1[28].classList.toggle('dark4')
    texto1[29].classList.toggle('dark4')
    texto1[30].classList.toggle('dark4')
    texto1[31].classList.toggle('dark4')

    texto1[32].classList.toggle('dark4')
    texto1[33].classList.toggle('dark4')
    texto1[34].classList.toggle('dark4')
    texto1[35].classList.toggle('dark4')
    texto1[36].classList.toggle('dark4')

    texto1[37].classList.toggle('dark4')
    texto1[38].classList.toggle('dark4')
    texto1[39].classList.toggle('dark4')
    texto1[40].classList.toggle('dark4')
    texto1[41].classList.toggle('dark4')

    texto1[42].classList.toggle('dark4')
    texto1[43].classList.toggle('dark4')
    texto1[44].classList.toggle('dark4')
    texto1[45].classList.toggle('dark4')
    texto1[46].classList.toggle('dark4')

    texto1[47].classList.toggle('dark4')
    texto1[48].classList.toggle('dark4')
    texto1[49].classList.toggle('dark4')
    texto1[50].classList.toggle('dark4')
    texto1[51].classList.toggle('dark4')

    texto1[52].classList.toggle('dark4')
    texto1[53].classList.toggle('dark4')
    texto1[54].classList.toggle('dark4')
    texto1[55].classList.toggle('dark4')
    texto1[56].classList.toggle('dark4')

    texto1[57].classList.toggle('dark4')
    texto1[58].classList.toggle('dark4')
    texto1[59].classList.toggle('dark4')
    texto1[60].classList.toggle('dark4')
    texto1[61].classList.toggle('dark4')

    texto1[62].classList.toggle('dark4')
    texto1[63].classList.toggle('dark4')
    texto1[64].classList.toggle('dark4')
    texto1[65].classList.toggle('dark4')
    texto1[66].classList.toggle('dark4')
    texto1[67].classList.toggle('dark4')
    texto1[68].classList.toggle('dark4')
    texto1[69].classList.toggle('dark4')
    texto1[70].classList.toggle('dark4')

    texto1[71].classList.toggle('dark4')
    texto1[72].classList.toggle('dark4')
    texto1[73].classList.toggle('dark4')
    texto1[74].classList.toggle('dark4')
    texto1[75].classList.toggle('dark4')
    texto1[76].classList.toggle('dark4')
    texto1[77].classList.toggle('dark4')
    texto1[78].classList.toggle('dark4')
    texto1[79].classList.toggle('dark4')

    texto1[80].classList.toggle('dark4')
    texto1[81].classList.toggle('dark4')
    texto1[82].classList.toggle('dark4')
    texto1[83].classList.toggle('dark4')
    texto1[84].classList.toggle('dark4')
    texto1[85].classList.toggle('dark4')
    texto1[86].classList.toggle('dark4')
    texto1[87].classList.toggle('dark4')
    texto1[88].classList.toggle('dark4')

    texto1[89].classList.toggle('dark4')
    texto1[90].classList.toggle('dark4')
    texto1[91].classList.toggle('dark4')
    texto1[92].classList.toggle('dark4')
    texto1[93].classList.toggle('dark4')
    texto1[94].classList.toggle('dark4')
    texto1[95].classList.toggle('dark4')
    texto1[96].classList.toggle('dark4')
    texto1[97].classList.toggle('dark4')

    texto1[98].classList.toggle('dark4')
    texto1[99].classList.toggle('dark4')
    texto1[100].classList.toggle('dark4')
    texto1[101].classList.toggle('dark4')
    texto1[102].classList.toggle('dark4')
    texto1[103].classList.toggle('dark4')
    texto1[104].classList.toggle('dark4')
    texto1[105].classList.toggle('dark4')
    texto1[106].classList.toggle('dark4')

    texto1[107].classList.toggle('dark4')
    texto1[108].classList.toggle('dark4')
    texto1[109].classList.toggle('dark4')
    texto1[110].classList.toggle('dark4')
    texto1[111].classList.toggle('dark4')
    texto1[112].classList.toggle('dark4')
    texto1[113].classList.toggle('dark4')
    texto1[114].classList.toggle('dark4')
    texto1[115].classList.toggle('dark4')

    texto1[116].classList.toggle('dark4')
    texto1[117].classList.toggle('dark4')
    texto1[118].classList.toggle('dark4')
    texto1[119].classList.toggle('dark4')
    texto1[120].classList.toggle('dark4')
    texto1[121].classList.toggle('dark4')
    texto1[122].classList.toggle('dark4')
    texto1[123].classList.toggle('dark4')
    texto1[124].classList.toggle('dark4')

    texto1[125].classList.toggle('dark4')
    texto1[126].classList.toggle('dark4')
    texto1[127].classList.toggle('dark4')
    texto1[128].classList.toggle('dark4')
    texto1[129].classList.toggle('dark4')
    texto1[130].classList.toggle('dark4')
    texto1[131].classList.toggle('dark4')
    texto1[132].classList.toggle('dark4')
    texto1[133].classList.toggle('dark4')

    texto1[134].classList.toggle('dark4')
    texto1[135].classList.toggle('dark4')
    texto1[136].classList.toggle('dark4')
    texto1[137].classList.toggle('dark4')
    texto1[138].classList.toggle('dark4')
    texto1[139].classList.toggle('dark4')
    texto1[140].classList.toggle('dark4')
    texto1[141].classList.toggle('dark4')
    texto1[142].classList.toggle('dark4')

    texto1[143].classList.toggle('dark4')
    texto1[144].classList.toggle('dark4')
    texto1[145].classList.toggle('dark4')
    texto1[146].classList.toggle('dark4')
    texto1[147].classList.toggle('dark4')
    texto1[148].classList.toggle('dark4')
    texto1[149].classList.toggle('dark4')
    texto1[150].classList.toggle('dark4')
    texto1[151].classList.toggle('dark4')


    botao[1].classList.toggle('dark5')

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
function calcular_todas_medias(){
    ativar1()
    ativar2()
    ativar3()
    ativar4()
    ativar5()
    ativar6()
    ativar7()
    ativar8()
    ativar9()
    ativar10()
}


/*-------------------------INPUTS---------------------------------*/


/*------------------------INPUTS MAT------------------------------*/

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

/*CALCULAR MEDIA DOS INPUTS COM VALORES DO BANCO DE DADOS*/
window.onload = calcular_todas_medias()