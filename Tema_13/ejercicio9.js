// Ejercicio 9 - Uso de unknown
var _a;
// Función que recibe un parámetro de tipo unknown
function toUpperSeguro(valor) {
    if (typeof valor === "string") {
        return valor.toUpperCase();
    }
    else {
        throw new Error("El valor proporcionado no es un string");
    }
}
// Función que cuenta con casos de prueba de uso del Unknown
function ejercicio9() {
    var inputTexto = document.getElementById("comprobarEj9");
    if (inputTexto) {
        var valor = inputTexto.value;
        console.log("Ejercicio 9: Uso de unknown");
        // Caso 1: Valor de tipo string
        try {
            var resultado1 = toUpperSeguro(valor);
            console.log("Resultado con texto ingresado:", resultado1);
        }
        catch (error) {
            if (error instanceof Error) {
                console.error("Error:", error.message);
            }
        }
        // Caso 2: Valor de tipo número (ejemplo)
        try {
            var resultado2 = toUpperSeguro(12345);
            console.log("Resultado 2:", resultado2);
        }
        catch (error) {
            if (error instanceof Error) {
                console.error("Error capturado con número:", error.message);
            }
        }
        // Caso 3: Valor de tipo booleano (ejemplo)
        try {
            var resultado3 = toUpperSeguro(true);
            console.log("Resultado 3:", resultado3);
        }
        catch (error) {
            if (error instanceof Error) {
                console.error("Error capturado con booleano:", error.message);
            }
        }
    }
}
// Con el document.getElementById, tomamos el botón del ejercicio 9 y con el addEventListener indicamos que haciendo click sobre él, se ejecute la función
(_a = document.getElementById("btn9")) === null || _a === void 0 ? void 0 : _a.addEventListener("click", ejercicio9);
