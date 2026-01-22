// Ejercicio 1: Tipos básicos

function ejercicio1(): void {

    // Declaramos las variables con let y les asignamos un valor
    let nombreAlumno: string = "Angel Marin";
    let edad: number = 21;
    let matricula: boolean = true;
    let notas: number[] = [9, 7, 8, 5, 10];
    // Se solicita que el nombre del instituto sea una constante
    const nombreInstituto: string = "Davante Medac Nevada";

    // Con console.log mostramos los datos por la consola de comandos llamando a las diferentes variables creadas
    console.log("Ejercicio 1: Tipos básicos");
    console.log("El nombre del alumno es: ", nombreAlumno);
    console.log("La edad del alumno es: ", edad);
    console.log("¿El alumno está matriculado en el centro?: ", matricula);
    console.log("Estas son las notas del alumno: ", notas);
    console.log("El centro en el que el alumno está matriculado es: ", nombreInstituto);

}

// Con el document.getElementById, tomamos el botón del ejercicio 1 y con el addEventListener indicamos que haciendo click sobre él, se ejecute la función
document.getElementById("btn1")?.addEventListener("click", ejercicio1);