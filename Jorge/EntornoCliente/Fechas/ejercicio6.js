var personas = new Array();
var numPersonas = 0;

do {
var persona = new Array();
var dia;
var mes;
var anio;
var bandera = false;
var nombre;

   //Sin testear
   do {
    bandera = false;
    nombre = prompt("Introduce el Nombre");    
    for (const persona in personas) {
        if (persona[0] == nombre) {
            bandera = true;
        }
    }
} while (bandera);
    //Hasta aqui 

   do {
    dia = parseInt(prompt("Introduce el dia de nacimiento"));
   } while (dia < 1 || dia > 31);
   
   do {
    mes = parseInt(prompt("Introduce el mes de nacimiento (numero)"));
   } while (mes < 1 || mes > 12);

   do {
    anio = parseInt(prompt("Introduce el año de nacimiento"));
    var anio_sist = new Date().getFullYear();
} while (anio >= anio_sist);

    persona[0] = nombre;
    persona[1] = new Date(anio, mes, dia);
   personas[numPersonas] = persona;
   numPersonas++;

} while (confirm("¿Quieres introducir más datos?"));


document.write(personas.join(" - "));

//Comprobado hasta aqui
mas_100 = new Array();
for (const persona of personas) {
    fechita = new Date();
    anio_ref = parseInt(fechita.getFullYear()) - 100;
    if (persona[1].getFullYear() < anio_ref){
        mas_100.push(persona);
    }
}
mas_100.sort(sortFunction);
mas_100.reverse();

console.log(mas_100.join(" - "));

for (const persona of personas) {
    console.log(persona[0]);
    var edad = new Date().getFullYear() - persona[1].getFullYear();
    console.log(edad);
}

for (const persona of personas) {
    
    var hoy = new Date();
    var hoy_day = hoy.getDate();
    var hoy_mes = hoy.getMonth()+1; 
  

        if (persona[1].getMonth() == hoy_mes) {
            if (persona[1].getDate() == hoy_day) {
                console.log("cumpleaños: " + persona[0]);  
            }
        }
}

var num_aleat = Math.random() * (personas.length - 0) + 0;

console.log("La persona premiada es: " + personas[parseInt(num_aleat)][0]);

//Funcion que coge el segundo elemento de un array
//y lo compara como numeros para ordenar
function sortFunction(a, b) {
    if (a[1] === b[1]) {
        return 0;
    }
    else {
        return (a[1] < b[1]) ? -1 : 1;
    }
}