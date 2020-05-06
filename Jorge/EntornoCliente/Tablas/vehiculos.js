var mes_text = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
var provincias = ['Álava','Albacete','Alicante','Almería','Asturias','Ávila','Badajoz','Barcelona','Burgos','Cáceres','Cádiz','Cantabria','Castellón','Ciudad Real','Córdoba','La Coruña','Cuenca','Gerona','Granada','Guadalajara','Guipúzcoa','Huelva','Huesca','Islas Baleares','Jaén','León','Lérida','Lugo','Madrid','Málaga','Murcia','Navarra','Orense','Palencia','Las Palmas','Pontevedra','La Rioja','Salamanca','Segovia','Sevilla','Soria','Tarragona','Santa Cruz de Tenerife','Teruel','Toledo','Valencia','Valladolid','Vizcaya','Zamora','Zaragoza'];

var prov_reduc = ['Álava','Albacete'];
var mes_reduc = ["Enero", "Febrero", "Marzo"];

var mes_prov = new Array();

for (let i = 0; i < prov_reduc.length; i++) {
    
    for (let j = 0; j < mes_reduc.length; j++) {
        var string;
        var guardar;
        var altas;
        var bajas;

        string = prov_reduc[i] + "-" + mes_reduc[j];
        altas = prompt("Introduzca las altas para " + string);
        bajas = prompt("Introduzca las bajas para " + string);

        guardar = string + "=" + altas + "," + bajas;
        mes_prov[string] = guardar;
    }       
}

//Hasta aquí lo hace bien

document.write(mes_prov.join("-"));

// var prov_orden = Array();
// for (let k = 0; k < mes_prov.length; k+12) {
//     var neto;
//     for (let i = 0; i < 12; i++) {
//     var altas;
//     var bajas;
//     var provincia;

//     var string = mes_prov[k];
//     provincia = string.substring(string.indexOf("-"),0);
//     altas = parseInt(string.substring(string.indexOf("="),1));
//     alert(altas);
//     bajas = parseInt(string.substring(string.indexOf("=")+2,1));
//     neto += altas-bajas;
//     }
//     prov_orden[provincia] = neto/12;
// }

// prov_orden.sort();
// prov_orden.reverse();

// var iterator = prov_orden.keys();

// for(let key of iterator) {
//     document.write(key + '-' + prov_orden[key]);
//     document.write("</br>");   
// }