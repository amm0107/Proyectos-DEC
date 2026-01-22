// Ejercicio 5 - Arrays de interfaces
var _a;
// LLamamos en esta función a la interfaz producto dándole sus respectivos valores
function ejercicio5() {
    // Array de productos
    var productos = [
        { id: 1, nombre: "Laptop", precio: 899.99 },
        { id: 2, nombre: "Mouse", precio: 25.50 },
        { id: 3, nombre: "Teclado", precio: 65.00 }
    ];
    // Recorrer el array y mostrar información
    console.log("Lista de productos:");
    productos.forEach(function (producto) {
        console.log("- ".concat(producto.nombre, ": ").concat(producto.precio, "\u20AC"));
    });
    // Calcular precio total
    var precioTotal = productos.reduce(function (total, producto) {
        return total + producto.precio;
    }, 0);
    console.log("Precio total de todos los productos: ${precioTotal.toFixed(2)}€");
}
// Con el document.getElementById, tomamos el botón del ejercicio 5 y con el addEventListener indicamos que haciendo click sobre él, se ejecute la función
(_a = document.getElementById("btn5")) === null || _a === void 0 ? void 0 : _a.addEventListener("click", ejercicio5);
