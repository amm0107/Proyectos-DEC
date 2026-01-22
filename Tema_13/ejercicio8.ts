// Ejercicio 8 - Manejo de errores

// Función que lanza un error si el número es negativo
function doblarPositivo(n: number): number {
    if (n < 0) {
        throw new Error("El número no puede ser negativo");
    }
    return n * 2;
}

// Función para comprobar los errores con el try/catch
function ejercicio8(): void {
    const numeroInput = document.getElementById("numeroEj8") as HTMLInputElement;
    const resultadoInput = document.getElementById("resultadoEj8") as HTMLInputElement;

    if (numeroInput && resultadoInput) {
        const numero = parseFloat(numeroInput.value);

        if (isNaN(numero)) {
            resultadoInput.value = "Por favor, introduce un número válido";
            return;
        }

        try {
            const resultado = doblarPositivo(numero);
            resultadoInput.value = `El doble de ${numero} es: ${resultado}`;
            console.log("Ejercicio 8: Manejo de errores");
            console.log(`El doble de ${numero} es: ${resultado}`);
        } catch (error) {
            if (error instanceof Error) {
                resultadoInput.value = `Error: ${error.message}`;
                console.error("Error capturado:", error.message);
            }
        }
    }
}

// Con el document.getElementById, tomamos el botón del ejercicio 8 y con el addEventListener indicamos que haciendo click sobre él, se ejecute la función
document.getElementById("btn8")?.addEventListener("click", ejercicio8);