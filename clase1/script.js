//alert("hello word");
document.querySelector(".btncomer1").addEventListener("click",mensaje);
document.querySelector(".btncomer").addEventListener("click",mensaje);


function mensaje(){
    //variablr
    phone = document.getElementById("tel");
    ketchup = document.getElementById("ketchup");
    chedar = document.getElementById("chedar");

    confirm("Usted ha elegido comer sus papas con "+ this.value+" lo contactaremos a este numero: "+phone.value);    
}