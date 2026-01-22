// Ejercicio 3: Parámetros opcionales
var _a;
// Función de saludar con parámetro opcional nombre
function saludarFunc(nombre) {
    if (nombre && nombre.trim() !== "") {
        return "Hola, ".concat(nombre);
    }
    else {
        return "Hola, invitado";
    }
}
// LLamamos en esta función a la función saludar
function ejercicio3() {
    var nombreInput = document.getElementById("nombre");
    var saludoInput = document.getElementById("saludo");
    if (nombreInput && saludoInput) {
        var nombre = nombreInput.value;
        var mensaje = saludarFunc(nombre);
        // Mostrar el resultado en el input
        saludoInput.value = mensaje;
        // También mostrar en consola
        console.log("Ejercicio 3: Parámetros opcionales");
        console.log(mensaje);
    }
}
// Con el document.getElementById, tomamos el botón del ejercicio 3 y con el addEventListener indicamos que haciendo click sobre él, se ejecute la función
(_a = document.getElementById("btn3")) === null || _a === void 0 ? void 0 : _a.addEventListener("click", ejercicio3);
