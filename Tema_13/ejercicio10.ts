// Ejercicio 10 - Mini proyecto: gestión de alumnos

// Interfaz Alumno
interface Alumno {
    id: number;
    nombre: string;
    notas: number[];
}

// Clase que implementa la interfaz Alumno
class AlumnoApp implements Alumno {
    id: number;
    nombre: string;
    notas: number[];
    
    constructor(id: number, nombre: string, notas: number[]) {
        this.id = id;
        this.nombre = nombre;
        this.notas = notas;
    }
    
    // Método para calcular la nota media
    calcularNotaMedia(): number {
        if (this.notas.length === 0) {
            return 0;
        }
        const suma = this.notas.reduce((total, nota) => total + nota, 0);
        return suma / this.notas.length;
    }
    
    // Método que devuelve un resumen del alumno
    obtenerResumen(): string {
        const media = this.calcularNotaMedia();
        return `Alumno: ${this.nombre} (ID: ${this.id})
        Notas: [${this.notas.join(", ")}]
        Nota media: ${media.toFixed(2)}`;
    }
}

// Array global para almacenar alumnos
let listaAlumnos: AlumnoApp[] = [];
let contadorId = 1;

// Función para añadir un alumno
function añadirAlumno(): void {
    const nombreInput = document.getElementById("nombreAlumno") as HTMLInputElement;
    const notasInput = document.getElementById("notasAlumno") as HTMLInputElement;

    if (nombreInput && notasInput) {
        const nombre = nombreInput.value.trim();
        const notasTexto = notasInput.value.trim();

        if (nombre === "" || notasTexto === "") {
            alert("Por favor, completa todos los campos");
            return;
        }

        // Convertir las notas separadas por comas en un array de números
        const notasArray = notasTexto.split(",").map(nota => parseFloat(nota.trim()));

        // Validar que todas las notas sean números válidos
        if (notasArray.some(nota => isNaN(nota))) {
            alert("Por favor, introduce notas válidas separadas por comas");
            return;
        }

        // Crear nuevo alumno
        const nuevoAlumno = new AlumnoApp(contadorId++, nombre, notasArray);
        listaAlumnos.push(nuevoAlumno);

        // Limpiar los campos
        nombreInput.value = "";
        notasInput.value = "";

        alert(`Alumno ${nombre} añadido correctamente`);
    }
}

// Función que muestra los resúmenes de los alumnos
function ejercicio10(): void {
    const tablaDiv = document.getElementById("tablaAlumnos") as HTMLDivElement;

    if (listaAlumnos.length === 0) {
        console.log("No hay alumnos añadidos");
        if (tablaDiv) {
            tablaDiv.innerHTML = '<p class="text-danger">No hay alumnos añadidos. Añade alumnos primero.</p>';
        }
        return;
    }

    console.log("Ejercicio 10: Mini proyecto - Gestión de alumnos");
    console.log("Resúmenes de alumnos");

    // Crear tabla HTML
    let tablaHTML = `
        <table class="table table-striped table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Notas</th>
                    <th>Media</th>
                </tr>
            </thead>
            <tbody>
    `;

    let sumaTodasNotas = 0;
    let totalNotas = 0;

    listaAlumnos.forEach(alumno => {
        console.log(alumno.obtenerResumen());
        console.log("");

        const media = alumno.calcularNotaMedia();
        tablaHTML += `
            <tr>
                <td>${alumno.id}</td>
                <td>${alumno.nombre}</td>
                <td>${alumno.notas.join(", ")}</td>
                <td>${media.toFixed(2)}</td>
            </tr>
        `;

        alumno.notas.forEach(nota => {
            sumaTodasNotas += nota;
            totalNotas++;
        });
    });

    const mediaGlobal = sumaTodasNotas / totalNotas;

    tablaHTML += `
            </tbody>
        </table>
        <div class="alert alert-info">
            <strong>Media global de todos los alumnos:</strong> ${mediaGlobal.toFixed(2)}
        </div>
    `;

    if (tablaDiv) {
        tablaDiv.innerHTML = tablaHTML;
    }

    console.log(`Media global de todos los alumnos: ${mediaGlobal.toFixed(2)}`);
}

// Event listeners
document.getElementById("btnAñadir")?.addEventListener("click", añadirAlumno);
document.getElementById("btn10")?.addEventListener("click", ejercicio10);