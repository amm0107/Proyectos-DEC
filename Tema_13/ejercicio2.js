// Ejercicio 2: Funciones tipadas
var _a;
// Creamos una función de tipo number para calcular las medias
function calculoMedia(num1, num2) {
    return (num1 + num2) / 2;
}
// Función que llama a la función de calculoMedia
function ejercicio2() {
    // Obtener los valores de los inputs
    var input1 = document.getElementById("num1");
    var input2 = document.getElementById("num2");
    var resultadoInput = document.getElementById("resultado");
    // Validar que los inputs existen y tienen valores
    if (input1 && input2 && resultadoInput) {
        var num1 = parseFloat(input1.value);
        var num2 = parseFloat(input2.value);
        // Validar que son números válidos
        if (!isNaN(num1) && !isNaN(num2)) {
            var media = calculoMedia(num1, num2);
            // Mostrar el resultado en el input y en consola
            resultadoInput.value = media.toString();
            console.log("Ejercicio 2: Funciones tipadas");
            console.log("El resultado de la media de los n\u00FAmeros ".concat(num1, " y ").concat(num2, " es: ").concat(media));
        }
        else {
            resultadoInput.value = "Por favor, introduce números válidos";
        }
    }
}
// Con el document.getElementById, tomamos el botón del ejercicio 2 y con el addEventListener indicamos que haciendo click sobre él, se ejecute la función
(_a = document.getElementById("btn2")) === null || _a === void 0 ? void 0 : _a.addEventListener("click", ejercicio2);
