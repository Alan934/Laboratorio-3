var estudiante = {nombre:"Alan", curso:"Segundo", dni:43749627, email:"sanjurjoalan77@gmail.com"};

function formObjectToArray(ob){
    console.log(ob);
}

function cambiarColorDeFondoDelBody(color){
    var _body = document.body;
    if(color == "green" || color == "#00ff00" || color == "#0f0"){
        console.log("No se realiza cambio de color");
        return false;
    }else{
        _body.style.backgroundColor = color;
        console.log("Correcto cambio de color");
        return true;
    }
}

var _p = document.getElementsByClassName("parrafo");

function cambiarParrafos(parrafos){
    var parrafosNoAfectados=0;
    for(var i=0; i<parrafos.length; i++){
        if(i % 2 !== 0){
            parrafos[i].style.color = "red";
            parrafos[i].style.fontWight = "bold";
            parrafos[i].style.textAlign = "center";
        }else{
            parrafosNoAfectados++;
        }
    }
    console.log("Parrafos que no se fueron afectados: "+parrafosNoAfectados);
}