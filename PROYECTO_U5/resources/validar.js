const correo=document.getElementById("#correo");
const password=document.getElementById("#contraseña");
const form=document.getElementById("form");
const parrafo=document.getElementById("warnings");

form.addEventListener("submit",e=>{
    e.preventDefault()
    let warnings=""
    let regexEmail=/^(([^<>()\[\]\.,;:\s@\”]+(\.[^<>()\[\]\.,;:\s@\”]+)*)|(\”.+\”))@(([^<>()[\]\.,;:\s@\”]+\.)+[^<>()[\]\.,;:\s@\”]{2,})$/;
    console.log(regexEmail.test(email.value))
    if (!regexEmail.test(correo.value)) {
        warnings += 'El email no es válido <br>'
    }
})