// Ejercicio 6 - Clases y encapsulación

// Definimos la clase Persona
class Persona {
    public nombre: string;
    private edad: number;
    
    // Constructor
    constructor(nombre: string, edad: number) {
        this.nombre = nombre;
        this.edad = edad;
    }
    
    // Método de la Persona
    presentarse(): string {
        return `Hola, me llamo ${this.nombre} y tengo ${this.edad} años.`;
    }
}

// LLamamos en esta función a la clase de Persona dándole sus respectivos valores
function ejercicio6(): void {
    // Crear objeto de la clase Persona
    const persona1 = new Persona("Ángel Marín", 21);
    
    // Obtener el resultado del método presentarse
    const mensaje = persona1.presentarse();
    
    // Mostrar en el input
    const presentarseInput = document.getElementById("presentarse") as HTMLInputElement;
    if (presentarseInput) {
        presentarseInput.value = mensaje;
    }
    
    // Mostrar en consola
    console.log("Ejercicio 6: Clases y encapsulación");
    console.log(mensaje);
    console.log("Nombre (propiedad pública):", persona1.nombre);
}

// Con el document.getElementById, tomamos el botón del ejercicio 6 y con el addEventListener indicamos que haciendo click sobre él, se ejecute la función
document.getElementById("btn6")?.addEventListener("click", ejercicio6);