/**
 * Al estar declarada con var el scope de i es de toda la función
 * por lo que para cuando se ejecute el timeout el valor de i será 10
 * y este se imprimirá 10 veces
 */

const anotherFunction = () => {
    for (var i = 0; i < 10; i++) {
        setTimeout(() => {
            console.log(i);
        }, 1000);        
    }
}

/**
 * al declararlar con let, la variable i sólo existe en el scope del bloque del for, 
 * entonces, al iterarse, sí o sí, toma el valor actual de i 
 */

const anotherFunction = () => {
    for (let i = 0; i < 10; i++) {
        setTimeout(() => {
            console.log(i);
        }, 1000);        
    }
}

