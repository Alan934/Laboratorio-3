var enigma = ["l", 1, "a", 2, 2, 5, "p", 5, 7, 5, 3, "e", 
6, "r", 7, 6, 5, 3, 2, 1, "s", 9, 9, 9, 6, "e", 2, "v", 5, "e", 
3, "r", 2, "a", 1, 6, 4, 1, 2, "n", 2, "c", 3, 5, 5, 5, 7, "i", 
4, "a", 5, 2, 1, 3, "e", 6, "s", 7, "l", 4, "a", 3, "c", 2, 3, 
1, 5, 3, 2, "l", 3, "a", 4, "v", 5, "e", 6];

const numerosFiltrados = enigma.filter(x => x <= 9);

function sumarNumeros(numeros){
    var resultado=0;
    for(var i in numeros){
        resultado += numeros[i];
    }
    return resultado;
}

const letrasFiltradas = enigma.filter(x => x.length <= 1);

function nombre(elemento){
    var resultado="";
    for( var i in elemento){
        resultado += elemento[i];
    }
    return resultado;
}

console.log("Nombre: " + nombre(letrasFiltradas));
console.log("Altura Calle: "+sumarNumeros(numerosFiltrados));