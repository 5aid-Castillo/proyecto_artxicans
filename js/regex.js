const namex = document.getElementById("name");
const email = document.getElementById("email-r");
const pass = document.getElementById("password-r");
const form = document.getElementById("form-signup");
const warnx = document.getElementById("warnings");

form.addEventListener("submit", e =>{
    e.preventDefault()
    let warnings = "";
    let getin = false;
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    warnx.innerHTML = ""
    
    if(namex.value.length < 3){
        warnings += `El nombre no es valido <br>`
        getin = true
    }
    if(!regexEmail.test(email.value)){
        warnings += `El email no es valido <br>`
        getin = true
    }
    if(pass.value.length < 6){
        warnings += `La contraseña no es valida<br>`
        getin = true
    } 
    if(getin){
        warnx.innerHTML = warnings
    }else{
        /* Aqui nahuilla debes poner <?php ?> y dentro jalarte la conexion de la db y ya la inyeccion del nuevo usuario a la tabla
        de usuarios, y borras esto que puse de warnx.innerHTML = "Registrado", cuando se inicie sesion lo redireccionas al index y su respectivo SESSION*/
        warnx.innerHTML = "Registrado"
    }
})