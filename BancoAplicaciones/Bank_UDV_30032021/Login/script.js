document.getElementById("Iniciar_sesión").addEventListener("click", IniciarSesion);
document.getElementById("Registro").addEventListener("click", registro);
window.addEventListener("resize", anchoPagina);

//Declarar variables
var Contenedor_login = document.querySelector(".Contenedor_login");
var Formulario = document.querySelector(".Formulario"); 
var Formulario_Registro = document.querySelector(".Formulario_Registro");
var caja_login = document.querySelector(".caja_login"); 
var caja_registro = document.querySelector(".caja_registro");

function anchoPagina (){
    if (window.innerWidth > 850){
        caja_login.style.display = "block";
        caja_registro.style.display = "block";
    }
    else{
        caja_registro.style.display = "block";
        caja_registro.style.opacity = "1";      
        caja_login.style.display = "none";  
        Formulario.style.display = "block";
        Formulario_Registro.style.display = "none";
        Contenedor_login.style.left = "0px";
    }
}

function IniciarSesion(){
    if (window.innerWidth > 850)
 {  Formulario_Registro.style.display = "none";
    Contenedor_login.style.left = "10px";
    Formulario.style.display = "block";
    caja_registro.style.opacity = "1";
    caja_login.style.opacity ="0";
    }
    else{
            Formulario_Registro.style.display ="none";
            Contenedor_login.style.left = "0px";
            Formulario.style.display = "block";
            caja_registro.style.display = "block";
            caja_login.style.display ="none";
        }
    }
    function registro(){
        if (window.innerWidth > 850){
            Formulario_Registro.style.display ="block";
        Contenedor_login.style.left = "410px";
        Formulario.style.display = "none";
        caja_registro.style.opacity = "0";
        caja_login.style.opacity ="1";
        }
        else{
            Formulario_Registro.style.display ="block";
        Contenedor_login.style.left = "0px";
        Formulario.style.display = "none";
        caja_registro.style.display = "none";
        caja_login.style.display ="block";
        caja_login.style.opacity = "1";
        }
        
    }
    

