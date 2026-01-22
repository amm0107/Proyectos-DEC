// Ejercicio 7 - Clases e interfaces

// Interfaz Empleado
interface Empleado {

    id: number;
    nombre: string;
    sueldoMensual: number;

}

// Clase que implementa la interfaz Empleado
class EmpleadoEmpresa implements Empleado {

    id: number;
    nombre: string;
    sueldoMensual: number;
    
    // Constructor
    constructor(id: number, nombre: string, sueldoMensual: number) {

        this.id = id;
        this.nombre = nombre;
        this.sueldoMensual = sueldoMensual;

    }
    
    // Método de calcular sueldo
    calcularSueldoAnual(): number {
        return this.sueldoMensual * 12;
    }

}

// LLamamos en esta función a la clase de Empleado dándole sus respectivos valores
function ejercicio7(): void {

    // Crear objeto de la clase EmpleadoEmpresa
    const empleado1 = new EmpleadoEmpresa(101, "Ana Martínez", 2500);
    
    // Mostrar las funciones del objeto de la clase EmpleadoEmpresa
    console.log(`Empleado: ${empleado1.nombre}`);
    console.log(`ID: ${empleado1.id}`);
    console.log(`Sueldo mensual: ${empleado1.sueldoMensual}€`);
    console.log(`Sueldo anual: ${empleado1.calcularSueldoAnual()}€`);

}

// Con el document.getElementById, tomamos el botón del ejercicio 7 y con el addEventListener indicamos que haciendo click sobre él, se ejecute la función
document.getElementById("btn7")?.addEventListener("click", ejercicio7);