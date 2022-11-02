function obtenerNombre(nombre) {
  //console.log("esta es una multiplicación");
  return nombre;
}

function imprimirPuesto(puesto, callback) {
  nombre = callback;
  return puesto = puesto + nombre;
}

function obtenerSueldo(sueldo, callback){
    puesto = callback;
    console.log(puesto+', tiene un sueldo de:'+sueldo);
}

puesto = imprimirPuesto("primer puesto ", obtenerNombre("Eduardo"));

obtenerSueldo('2000', puesto)
