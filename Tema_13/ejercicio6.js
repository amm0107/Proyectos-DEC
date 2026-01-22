// Ejercicio 6 - Clases y encapsulación
var _a;
// Definimos la clase Persona
var Persona = /** @class */ (function () {
    // Constructor
    function Persona(nombre, edad) {
        this.nombre = nombre;
        this.edad = edad;
    }
    // Método de la Persona
    Persona.prototype.presentarse = function () {
        return "Hola, me llamo ".concat(this.nombre, " y tengo ").concat(this.edad, " a\u00F1os.");
    };
    return Persona;
}());
// LLamamos en esta función a la clase de Persona dándole sus respectivos valores
function ejercicio6() {
    // Crear objeto de la clase Persona
    var persona1 = new Persona("Ángel Marín", 21);
    // Obtener el resultado del método presentarse
    var mensaje = persona1.presentarse();
    // Mostrar en el input
    var presentarseInput = document.getElementById("presentarse");
    if (presentarseInput) {
        presentarseInput.value = mensaje;
    }
    // Mostrar en consola
    console.log("Ejercicio 6: Clases y encapsulación");
    console.log(mensaje);
    console.log("Nombre (propiedad pública):", persona1.nombre);
}
// Con el document.getElementById, tomamos el botón del ejercicio 6 y con el addEventListener indicamos que haciendo click sobre él, se ejecute la función
(_a = document.getElementById("btn6")) === null || _a === void 0 ? void 0 : _a.addEventListener("click", ejercicio6);
