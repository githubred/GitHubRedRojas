function onload(){
    
    cadVariables = location.search.substring(1,location.search.length);
    arrVariables = cadVariables.split("&");
    for (i=0; i<arrVariables.length; i++) {
      arrVariableActual = arrVariables[i].split("=");
      if (isNaN(parseFloat(arrVariableActual[1])))
        eval(arrVariableActual[0]+"='"+unescape(arrVariableActual[1])+"';");
      else
        eval(arrVariableActual[0]+"="+arrVariableActual[1]+";");
    }
    
    var userName = document.getElementById('dropdownMenu1');
    userName.innerHTML = var1 + "<span class=\"caret\"></span>";

}
function responsiveMenu(){
    var ancho = (window.innerWidth);
    if(ancho < 768){
        //cambiano menu izquierdo Celular
        var ladoIzqMenu = document.getElementById('lado-izq-menu');
        ladoIzqMenu.style =   "width: 100%; height: auto; position:fixed;";
        var ladoDerTop = document.getElementById('lado-der-top');
        ladoDerTop.style =    "width: 100%; position: static; margin-top:60px;";
        /*var ladoDerDown = document.getElementById('lado-der-down');
        ladoDerDown.style =   "margin-top: 20px;";*/
        var ladoDer = document.getElementById('lado-der');
        ladoDer.style = "top: 0"
    }else{
        //cambiano menu izquierdo Pc
        var ladoIzqMenu = document.getElementById('lado-izq-menu');
        ladoIzqMenu.style =   "width: 250px; height: 100%; position:fixed;";
        var ladoDerTop = document.getElementById('lado-der-top');
        ladoDerTop.style =    "width: auto; position: fixed;";
        /*var ladoDerDown = document.getElementById('lado-der-down');
        ladoDerDown.style =   "margin-top: 120px;";*/
        var ladoDer = document.getElementById('lado-der');
        ladoDer.style = "top: 50px"
    }
}

function ocultarMenu(){
    var menuLista = document.getElementById('menu-lista');
    menuLista.setAttribute("aria-expanded", false);
    menuLista.classList.remove('in');
}

function main(){
    responsiveMenu();
    onload();
}

main();