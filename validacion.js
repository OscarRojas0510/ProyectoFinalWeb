const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    password: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@$!%*?&])[A-Za-z\d$@$!%*?&]{4,16}/,
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    telefono: /^\d{7,14}$/, // 7 a 14 numeros.
    fecha: /^\d{2,4}\-\d{1,2}\-\d{1,2}$/,
    dir: /^[a-zA-ZÀ-ÿ0-9\s]{1,40}$/, // Letras, numeros, guion y guion_bajo
    num: /^[0-9]{1,6}$/ // Letras, numeros, guion y guion_bajo
};

// Condiciones para contraseña
// Minimo 8 caracteres
// Maximo 15
// Al menos una letra mayúscula
// Al menos una letra minucula
// Al menos un dígito
// No espacios en blanco
// Al menos 1 caracter especial formdir

const form = document.getElementById("form-Login");
const inputs = document.querySelectorAll("#form-Login input");

const validarF = (e) => {

    switch (e.target.name) {

        case "nombre":
            if (expresiones.nombre.test(e.target.value)) {
                document.getElementById("nombre").classList.add("is-valid");
                document.getElementById("nombre").classList.remove("is-invalid");
            } else {
                document.getElementById("nombre").classList.remove("is-valid");
                document.getElementById("nombre").classList.add("is-invalid");
            }
            break;

        case "apat":
            if (expresiones.nombre.test(e.target.value)) {
                document.getElementById("apat").classList.add("is-valid");
                document.getElementById("apat").classList.remove("is-invalid");
            } else {
                document.getElementById("apat").classList.remove("is-valid");
                document.getElementById("apat").classList.add("is-invalid");
            }
            break;

        case "amat":
            if (expresiones.nombre.test(e.target.value)) {
                document.getElementById("amat").classList.add("is-valid");
                document.getElementById("amat").classList.remove("is-invalid");
            } else {
                document.getElementById("amat").classList.remove("is-valid");
                document.getElementById("amat").classList.add("is-invalid");
            }
            break;

        case "fecha":
            if (expresiones.fecha.test(e.target.value)) {
                document.getElementById("fecha").classList.add("is-valid");
                document.getElementById("fecha").classList.remove("is-invalid");
            } else {
                document.getElementById("fecha").classList.remove("is-valid");
                document.getElementById("fecha").classList.add("is-invalid");
            }
            break;

        case "tel":
            if (expresiones.telefono.test(e.target.value)) {
                document.getElementById("tel").classList.add("is-valid");
                document.getElementById("tel").classList.remove("is-invalid");
            } else {
                document.getElementById("tel").classList.remove("is-valid");
                document.getElementById("tel").classList.add("is-invalid");
            }
            break;
        case "email":
            if (expresiones.correo.test(e.target.value)) {
                document.getElementById("email").classList.add("is-valid");
                document.getElementById("email").classList.remove("is-invalid");
            } else {
                document.getElementById("email").classList.remove("is-valid");
                document.getElementById("email").classList.add("is-invalid");
            }
            break;
        case "password":
            if (expresiones.password.test(e.target.value)) {
                document.getElementById("password").classList.add("is-valid");
                document.getElementById("password").classList.remove("is-invalid");
            } else {
                document.getElementById("password").classList.remove("is-valid");
                document.getElementById("password").classList.add("is-invalid");
            }
            break;

        case "validpass":

            if (expresiones.password.test(e.target.value)) {
                pass1 = document.getElementById('password');
                pass2 = document.getElementById('validpass');

                if (pass1.value != pass2.value) {

                    document.getElementById("validpass").classList.add("is-valid");
                    document.getElementById("validpass").classList.remove("is-invalid");
                }

            } else {
                document.getElementById("validpass").classList.remove("is-valid");
                document.getElementById("validpass").classList.add("is-invalid");
            }
            break;
        case "colonia":
            if (expresiones.dir.test(e.target.value)) {
                document.getElementById("colonia").classList.add("is-valid");
                document.getElementById("colonia").classList.remove("is-invalid");
            } else {
                document.getElementById("colonia").classList.remove("is-valid");
                document.getElementById("colonia").classList.add("is-invalid");
            }
            break;
        case "calle":
            if (expresiones.dir.test(e.target.value)) {
                document.getElementById("calle").classList.add("is-valid");
                document.getElementById("calle").classList.remove("is-invalid");
            } else {
                document.getElementById("calle").classList.remove("is-valid");
                document.getElementById("calle").classList.add("is-invalid");
            }
            break;

        case "numi":
            if (expresiones.num.test(e.target.value)) {
                document.getElementById("numi").classList.add("is-valid");
                document.getElementById("numi").classList.remove("is-invalid");
            } else {
                document.getElementById("numi").classList.remove("is-valid");
                document.getElementById("numi").classList.add("is-invalid");
            }
            break;
        case "nume":
            if (expresiones.num.test(e.target.value)) {
                document.getElementById("nume").classList.add("is-valid");
                document.getElementById("nume").classList.remove("is-invalid");
            } else {
                document.getElementById("nume").classList.remove("is-valid");
                document.getElementById("nume").classList.add("is-invalid");
            }
            break;
        case "cp":
            if (expresiones.num.test(e.target.value)) {
                document.getElementById("cp").classList.add("is-valid");
                document.getElementById("cp").classList.remove("is-invalid");
            } else {
                document.getElementById("cp").classList.remove("is-valid");
                document.getElementById("cp").classList.add("is-invalid");
            }
            break;
        case "ref":
            if (expresiones.dir.test(e.target.value)) {
                document.getElementById("ref").classList.add("is-valid");
                document.getElementById("ref").classList.remove("is-invalid");
            } else {
                document.getElementById("ref").classList.remove("is-valid");
                document.getElementById("ref").classList.add("is-invalid");
            }
            break;

    }
};

inputs.forEach((input) => {
    input.addEventListener("keyup", validarF);
});


