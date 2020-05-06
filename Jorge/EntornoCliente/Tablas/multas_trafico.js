var multas = new Array();
var nummultas = 0;

do {
    var multa = new Array();
   
      multa[0] = prompt("La matrícula");
      multa[1] = parseInt(prompt("El importe")); 
   
      multas[nummultas] = multa;
      nummultas++;
   
   } while (confirm("¿Quieres introducir más multas?"));

   console.log(multas.join(" - "));
   
   for (let i = 0; i < multas.length; i++) {
       var multa = multas[i];
       for (let j = i+1; j < multas.length-1; j++) {
       var compare = [...multas[j]];     
        if (multa[0] === compare[0]) {
                multa[1] += compare[1];
                multas.splice(j,1);
            }
       }       
   }

multas.sort(sortFunction);
console.log(multas.join(" - "));

function sortFunction(a, b) {
    if (a[1] === b[1]) {
        return 0;
    }
    else {
        return (a[1] < b[1]) ? -1 : 1;
    }
}

// document.write(multas.join(" - "));