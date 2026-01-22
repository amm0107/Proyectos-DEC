// Ejercicio 3: Parámetros opcionales

// Función de saludar con parámetro opcional nombre
function saludarFunc(nombre?: string): string {
    if(nombre && nombre.trim() !== "") {
        return `Hola, ${nombre}`;
    } else {
        return "Hola, invitado";
    }
}

// LLamamos en esta función a la función saludar
function ejercicio3(): void {
    const nombreInput = document.getElementById("nombre") as HTMLInputElement;
    const saludoInput = document.getElementById("saludo") as HTMLInputElement;

    if (nombreInput && saludoInput) {
        const nombre = nombreInput.value;
        const mensaje = saludarFunc(nombre);
        
        // Mostrar el resultado en el input
        saludoInput.value = mensaje;
        
        // También mostrar en consola
        console.log("Ejercicio 3: Parámetros opcionales");
        console.log(mensaje);
    }
}

// Con el document.getElementById, tomamos el botón del ejercicio 3 y con el addEventListener indicamos que haciendo click sobre él, se ejecute la función
document.getElementById("btn3")?.addEventListener("click", ejercicio3);