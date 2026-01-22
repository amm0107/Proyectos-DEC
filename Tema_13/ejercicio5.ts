// Ejercicio 5 - Arrays de interfaces

// Interfaz Producto
interface Producto {

    id: number;
    nombre: string;
    precio: number;

}

// LLamamos en esta función a la interfaz producto dándole sus respectivos valores
function ejercicio5(): void {
    
    // Array de productos
    const productos: Producto[] = [

        { id: 1, nombre: "Laptop", precio: 899.99 },
        { id: 2, nombre: "Mouse", precio: 25.50 },
        { id: 3, nombre: "Teclado", precio: 65.00 }

    ];
    
    // Recorrer el array y mostrar información
    console.log("Lista de productos:");
    productos.forEach((producto: Producto) => {
        console.log(`- ${producto.nombre}: ${producto.precio}€`);
    });
    
    // Calcular precio total
    const precioTotal: number = productos.reduce((total: number, producto: Producto) => {
        return total + producto.precio;
    }, 0);
    
    console.log("Precio total de todos los productos: ${precioTotal.toFixed(2)}€");

}

// Con el document.getElementById, tomamos el botón del ejercicio 5 y con el addEventListener indicamos que haciendo click sobre él, se ejecute la función
document.getElementById("btn5")?.addEventListener("click", ejercicio5);