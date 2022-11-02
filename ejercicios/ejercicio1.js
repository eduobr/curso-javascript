/*
1) Programa una función que cuente el número de caracteres de una cadena de texto, pe. 
    miFuncion("Hola Mundo") devolverá 10.*/

let contador = (palabra) => {
    numeroCaracteres = palabra.length;
    console.log(`${palabra} tiene: ${numeroCaracteres} caracteres`);
}

contador("Hola Mundo");

/*
2) Programa una función que te devuelva el texto recortado según el número de caracteres indicados,
    pe. miFuncion("Hola Mundo", 4) devolverá "Hola".
*/

let cortarCaracteres = (palabra, cantidadCaracteres) => {
    palabra_cortada = palabra.slice(0, cantidadCaracteres);
    console.log(palabra_cortada);
}

cortarCaracteres("Hola Mundo", 4);

/*
3) Programa una función que dada una String te devuelva un Array de textos separados por cierto caracter, 
    pe. miFuncion('hola que tal', ' ') devolverá ['hola', 'que', 'tal'].
*/

let generarArray = (palabra, caracter) => {
    array = palabra.split(caracter);
    console.log(array);
}

generarArray("hola que tal"," ");

/*
4) Programa una función que repita un texto X veces, pe. miFuncion('Hola Mundo', 3) 
    devolverá Hola Mundo Hola Mundo Hola Mundo.
*/

let repitePalabra = (texto, repeticiones) => {
    let palabras = "";

    for (let i = 0; i < repeticiones; i++) {
        palabras += texto+" ";
    }

    console.log(palabras);
}

repitePalabra("Hola Mundo", 3);

