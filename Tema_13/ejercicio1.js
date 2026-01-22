// Ejercicio 1: Tipos básicos
var _a;
function ejercicio1() {
    // Declaramos las variables con let y les asignamos un valor
    var nombreAlumno = "Angel Marin";
    var edad = 21;
    var matricula = true;
    var notas = [9, 7, 8, 5, 10];
    // Se solicita que el nombre del instituto sea una constante
    var nombreInstituto = "Davante Medac Nevada";
    // Con console.log mostramos los datos por la consola de comandos llamando a las diferentes variables creadas
    console.log("Ejercicio 1: Tipos básicos");
    console.log("El nombre del alumno es: ", nombreAlumno);
    console.log("La edad del alumno es: ", edad);
    console.log("¿El alumno está matriculado en el centro?: ", matricula);
    console.log("Estas son las notas del alumno: ", notas);
    console.log("El centro en el que el alumno está matriculado es: ", nombreInstituto);
}
// Con el document.getElementById, tomamos el botón del ejercicio 1 y con el addEventListener indicamos que haciendo click sobre él, se ejecute la función
(_a = document.getElementById("btn1")) === null || _a === void 0 ? void 0 : _a.addEventListener("click", ejercicio1);
