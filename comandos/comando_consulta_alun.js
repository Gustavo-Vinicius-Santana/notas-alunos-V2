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

    botao2[0].classList.toggle('dark6')
    botao2[1].classList.toggle('dark6')
    botao2[2].classList.toggle('dark6')

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