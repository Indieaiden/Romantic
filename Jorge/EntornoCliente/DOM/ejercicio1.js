function addEvent(elemento, tipo, fn) {
    if (elemento.addEventListener){
        elemento.addEventListener(tipo, fn, false);
    }
    else {
        elemento.attachEvent("on" + tipo, fn)
    }
}

var body = document.getElementsByTagName('body');

addEvent(body, 'onload', )

function ejercicio1(){
    var input = document.createElement("input");
    input.type = "text";
}

const crearElemento = function (etiqueta, contenido){
    const nodo = document.createElement(etiqueta);

    if (typeof contenido === 'string'){
      const nodoTxt = document.createTextNode(contenido);
      nodo.appendChild(nodoTxt);
    } else if (typeof contenido === 'object'){
      nodo.appendChild(contenido);
    }
    return nodo;
  }