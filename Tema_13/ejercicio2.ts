// Ejercicio 2: Funciones tipadas

// Creamos una función de tipo number para calcular las medias
function calculoMedia(num1: number, num2: number): number{
    return (num1 + num2) / 2;
}

// Función que llama a la función de calculoMedia
function ejercicio2(): void{
    
    // Obtener los valores de los inputs
    const input1 = document.getElementById("num1") as HTMLInputElement;
    const input2 = document.getElementById("num2") as HTMLInputElement;
    const resultadoInput = document.getElementById("resultado") as HTMLInputElement;

    // Validar que los inputs existen y tienen valores
    if (input1 && input2 && resultadoInput) {
        const num1 = parseFloat(input1.value);
        const num2 = parseFloat(input2.value);

        // Validar que son números válidos
        if (!isNaN(num1) && !isNaN(num2)) {
            const media = calculoMedia(num1, num2);
            
            // Mostrar el resultado en el input y en consola
            resultadoInput.value = media.toString();
            console.log("Ejercicio 2: Funciones tipadas");
            console.log(`El resultado de la media de los números ${num1} y ${num2} es: ${media}`);
        } else {
            resultadoInput.value = "Por favor, introduce números válidos";
        }
    }
}

// Con el document.getElementById, tomamos el botón del ejercicio 2 y con el addEventListener indicamos que haciendo click sobre él, se ejecute la función
document.getElementById("btn2")?.addEventListener("click", ejercicio2);