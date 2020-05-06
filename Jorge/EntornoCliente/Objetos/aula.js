//Definicion objeto
function Alumnno (dni, nombre, fechanac){
    //definicion propiedades
    this.dni = dni;
    this.nombre = nombre;
    this.fechanac = fechanac;

    // metodos
    this.edad = edad;
}

function edad() {
    return 0;
}

function Aula (denomin, local, capac, alumn){
    this.denominacion = denomin;
    this.localizacion = local;
    this.capacidad = capac;
    this.alumnos = alumn;

    this.plazaslibres = plazaslibres;
    this.alumnoMenor = alumnoMenor;
    this.sacarLista = sacarLista;
}

function plazaslibres(){}
function alumnoMenor(){}
function sacarLista() {}