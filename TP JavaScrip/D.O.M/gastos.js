function valida(){


    let radio = document.getElementsByName("radio");
    let ingresa="";
    for(let i=0; i<radio.length; i++){
        if(radio[i].checked){
            ingresa = radio[i].value;
        }
    }
    
    if(ingresa == "No"){
        alert("Gracias por haber venido");
        window.location.href = "https://netflix.com";
    }else{

    }
}

window.onload(valida());