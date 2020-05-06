
var libros = new Array();
var numlibros = 0;
do {
 var libro = new Array();

   libro[0] = prompt("Introduce el titulo");
   libro[1] = prompt("Introduce el autor"); 
   libro[2] = prompt("Introduce el numero de paginas");

   libros[numlibros] = libro;
   numlibros++;

} while (confirm("¿Quieres introducir más libros?"));

libros.sort();
libros.reverse();

for (let i = 0; i < libros.length; i++) {
    document.write("<br>");
  document.write (libros[i].join(" - "));
}