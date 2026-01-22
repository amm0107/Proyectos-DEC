// Ejercicio 10 - Mini proyecto: gestión de alumnos
var _a, _b;
// Clase que implementa la interfaz Alumno
var AlumnoApp = /** @class */ (function () {
    function AlumnoApp(id, nombre, notas) {
        this.id = id;
        this.nombre = nombre;
        this.notas = notas;
    }
    // Método para calcular la nota media
    AlumnoApp.prototype.calcularNotaMedia = function () {
        if (this.notas.length === 0) {
            return 0;
        }
        var suma = this.notas.reduce(function (total, nota) { return total + nota; }, 0);
        return suma / this.notas.length;
    };
    // Método que devuelve un resumen del alumno
    AlumnoApp.prototype.obtenerResumen = function () {
        var media = this.calcularNotaMedia();
        return "Alumno: ".concat(this.nombre, " (ID: ").concat(this.id, ")\n        Notas: [").concat(this.notas.join(", "), "]\n        Nota media: ").concat(media.toFixed(2));
    };
    return AlumnoApp;
}());
// Array global para almacenar alumnos
var listaAlumnos = [];
var contadorId = 1;
// Función para añadir un alumno
function añadirAlumno() {
    var nombreInput = document.getElementById("nombreAlumno");
    var notasInput = document.getElementById("notasAlumno");
    if (nombreInput && notasInput) {
        var nombre = nombreInput.value.trim();
        var notasTexto = notasInput.value.trim();
        if (nombre === "" || notasTexto === "") {
            alert("Por favor, completa todos los campos");
            return;
        }
        // Convertir las notas separadas por comas en un array de números
        var notasArray = notasTexto.split(",").map(function (nota) { return parseFloat(nota.trim()); });
        // Validar que todas las notas sean números válidos
        if (notasArray.some(function (nota) { return isNaN(nota); })) {
            alert("Por favor, introduce notas válidas separadas por comas");
            return;
        }
        // Crear nuevo alumno
        var nuevoAlumno = new AlumnoApp(contadorId++, nombre, notasArray);
        listaAlumnos.push(nuevoAlumno);
        // Limpiar los campos
        nombreInput.value = "";
        notasInput.value = "";
        alert("Alumno ".concat(nombre, " a\u00F1adido correctamente"));
    }
}
// Función que muestra los resúmenes de los alumnos
function ejercicio10() {
    var tablaDiv = document.getElementById("tablaAlumnos");
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
    var tablaHTML = "\n        <table class=\"table table-striped table-bordered mt-3\">\n            <thead class=\"table-dark\">\n                <tr>\n                    <th>ID</th>\n                    <th>Nombre</th>\n                    <th>Notas</th>\n                    <th>Media</th>\n                </tr>\n            </thead>\n            <tbody>\n    ";
    var sumaTodasNotas = 0;
    var totalNotas = 0;
    listaAlumnos.forEach(function (alumno) {
        console.log(alumno.obtenerResumen());
        console.log("");
        var media = alumno.calcularNotaMedia();
        tablaHTML += "\n            <tr>\n                <td>".concat(alumno.id, "</td>\n                <td>").concat(alumno.nombre, "</td>\n                <td>").concat(alumno.notas.join(", "), "</td>\n                <td>").concat(media.toFixed(2), "</td>\n            </tr>\n        ");
        alumno.notas.forEach(function (nota) {
            sumaTodasNotas += nota;
            totalNotas++;
        });
    });
    var mediaGlobal = sumaTodasNotas / totalNotas;
    tablaHTML += "\n            </tbody>\n        </table>\n        <div class=\"alert alert-info\">\n            <strong>Media global de todos los alumnos:</strong> ".concat(mediaGlobal.toFixed(2), "\n        </div>\n    ");
    if (tablaDiv) {
        tablaDiv.innerHTML = tablaHTML;
    }
    console.log("Media global de todos los alumnos: ".concat(mediaGlobal.toFixed(2)));
}
// Event listeners
(_a = document.getElementById("btnAñadir")) === null || _a === void 0 ? void 0 : _a.addEventListener("click", añadirAlumno);
(_b = document.getElementById("btn10")) === null || _b === void 0 ? void 0 : _b.addEventListener("click", ejercicio10);
