// Ejercicio 4: Interfaces como tipo
var _a;
// LLamamos en esta función a la interfaz producto dándole sus respectivos valores
function ejercicio4() {
    var producto1 = {
        id: 1,
        nombre: "Silla Medac",
        precio: 348
    };
    console.log("Producto 1: ", producto1);
}
// Con el document.getElementById, tomamos el botón del ejercicio 4 y con el addEventListener indicamos que haciendo click sobre él, se ejecute la función
(_a = document.getElementById("btn4")) === null || _a === void 0 ? void 0 : _a.addEventListener("click", ejercicio4);
// Si falta un valor a la hora de crear el producto, da error
/*const producto2: Producto = {

    id: 1,
    nombre: "Silla Medac"

};*/ 
