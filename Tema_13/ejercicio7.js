// Ejercicio 7 - Clases e interfaces
var _a;
// Clase que implementa la interfaz Empleado
var EmpleadoEmpresa = /** @class */ (function () {
    // Constructor
    function EmpleadoEmpresa(id, nombre, sueldoMensual) {
        this.id = id;
        this.nombre = nombre;
        this.sueldoMensual = sueldoMensual;
    }
    // Método de calcular sueldo
    EmpleadoEmpresa.prototype.calcularSueldoAnual = function () {
        return this.sueldoMensual * 12;
    };
    return EmpleadoEmpresa;
}());
// LLamamos en esta función a la clase de Empleado dándole sus respectivos valores
function ejercicio7() {
    // Crear objeto de la clase EmpleadoEmpresa
    var empleado1 = new EmpleadoEmpresa(101, "Ana Martínez", 2500);
    // Mostrar las funciones del objeto de la clase EmpleadoEmpresa
    console.log("Empleado: ".concat(empleado1.nombre));
    console.log("ID: ".concat(empleado1.id));
    console.log("Sueldo mensual: ".concat(empleado1.sueldoMensual, "\u20AC"));
    console.log("Sueldo anual: ".concat(empleado1.calcularSueldoAnual(), "\u20AC"));
}
// Con el document.getElementById, tomamos el botón del ejercicio 7 y con el addEventListener indicamos que haciendo click sobre él, se ejecute la función
(_a = document.getElementById("btn7")) === null || _a === void 0 ? void 0 : _a.addEventListener("click", ejercicio7);
