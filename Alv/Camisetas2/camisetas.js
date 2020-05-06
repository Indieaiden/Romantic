

      const NUEVA_LINEA = '\n',
            SEPARADOR = ';';

      const convertirCSV = function(datos, sepReg = NUEVA_LINEA, sepCampos = SEPARADOR) {
        const registros = datos
                          .split(sepReg)
                          .map(v => v.split(sepCampos))
                          .filter(reg => { return reg.every(c => c.length)});

        return registros;
      }

      const aObjetos = function(datos) {
        const claves = datos.shift(datos);

        const objetos =  datos
                        .map(v => {
                          return v.reduce((acc, reg, pos) => {
                            acc[claves[pos]] = reg;
                            return acc;
                          }, {} )
                        });

        return objetos;
      }

      const crearTabla = function(objetos, elementosFila=4) {
        const tabla = hacerNodo('table');
        const caption = hacerNodo('caption', 'Camisetas');

        tabla.appendChild(caption);

        const tbody = hacerNodo('tbody');

        let tr;
        objetos.forEach((obj, pos) =>{
          if((pos % elementosFila) === 0) {
            tr = hacerNodo('tr');
            tbody.appendChild(tr);
          }
          const img = hacerNodo('img');
          //img.src = "img/" + obj.color + ".png";
          img.setAttribute('src', "img/" + obj.color + ".png");
          img.setAttribute('alt', obj.color);
          const div1 = hacerNodo('div', img);

          const span = hacerNodo('span', obj.desc)
          span.classList.add('desaparece');

          const p1 = hacerNodo('p', obj.nombre);
          p1.addEventListener('mouseover', function(evt){
            this.lastElementChild.classList.remove('desaparece');
          });

          p1.addEventListener('mouseout', function(evt){
            this.lastElementChild.classList.add('desaparece');
          });

          p1.appendChild(span);
          const p2 = hacerNodo('p', obj.precio);
          const div2 = hacerNodo('div', p1);
          div2.appendChild(p2);

          const td = hacerNodo('td', div1);
          td.appendChild(div2);
          tr.appendChild(td);
        });
        tabla.appendChild(tbody);

        return tabla;
      }

    const hacerNodo = function(etiqueta, contenido) {
      const nodo = document.createElement(etiqueta);
      if(typeof contenido === 'string') {
        const nodoTxt = document.createTextNode(contenido);
        nodo.appendChild(nodoTxt);
      } else if(typeof contenido === 'object') {
        nodo.appendChild(contenido);
      }

      return nodo;
    }

    const ordenarAscendiente = function(evt) {
      objetos.sort((a,b) => (parseFloat(b.precio) - parseFloat(a.precio)));
      mostrarTabla(crearTabla(objetos), 'main');
    }

    const ordenarDescendiente = function(evt) {
      objetos.sort((a,b) => (parseFloat(a.precio) - parseFloat(b.precio)));
      mostrarTabla(crearTabla(objetos), 'main');
    }

    const mostrarTabla = function(tabla, etiquetaPadre) {

      const tablaAnterior = document.querySelector(etiquetaPadre + ' > table');
      if(tablaAnterior) {
        tablaAnterior.parentNode.replaceChild(tabla, tablaAnterior)
      } else {
        document.querySelector(etiquetaPadre).appendChild(tabla);
      }
    }


    const crearBotonesOrden = function() {
      const boton1 = hacerNodo('button');
      boton1.innerHTML = '&uarr;';
      boton1.addEventListener('click', ordenarAscendiente);

      const boton2 = hacerNodo('button');
      boton2.innerHTML = '&darr;';
      boton2.addEventListener('click', ordenarDescendiente);

      const div = hacerNodo('div', boton1);
      div.appendChild(boton2);

      document.querySelector('main').appendChild(div);
    }

    let objetos = null;

    const run = function(datos) {
      objetos = aObjetos(convertirCSV(datos));
      const tabla = crearTabla(objetos);
      mostrarTabla(tabla, 'main');
      crearBotonesOrden();
    }
