// Ejercicio 8 - Manejo de errores
var _a;
// Función que lanza un error si el número es negativo
function doblarPositivo(n) {
    if (n < 0) {
        throw new Error("El número no puede ser negativo");
    }
    return n * 2;
}
// Función para comprobar los errores con el try/catch
function ejercicio8() {
    var numeroInput = document.getElementById("numeroEj8");
    var resultadoInput = document.getElementById("resultadoEj8");
    if (numeroInput && resultadoInput) {
        var numero = parseFloat(numeroInput.value);
        if (isNaN(numero)) {
            resultadoInput.value = "Por favor, introduce un número válido";
            return;
        }
        try {
            var resultado = doblarPositivo(numero);
            resultadoInput.value = "El doble de ".concat(numero, " es: ").concat(resultado);
            console.log("Ejercicio 8: Manejo de errores");
            console.log("El doble de ".concat(numero, " es: ").concat(resultado));
        }
        catch (error) {
            if (error instanceof Error) {
                resultadoInput.value = "Error: ".concat(error.message);
                console.error("Error capturado:", error.message);
            }
        }
    }
}
// Con el document.getElementById, tomamos el botón del ejercicio 8 y con el addEventListener indicamos que haciendo click sobre él, se ejecute la función
(_a = document.getElementById("btn8")) === null || _a === void 0 ? void 0 : _a.addEventListener("click", ejercicio8);
