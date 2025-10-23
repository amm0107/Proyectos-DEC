
// EJERCICIO 1 - Selectores y modificación
var btnEj1 = document.getElementById("btn-ej1");
var contEj1 = document.getElementById("contenido-ej1");

// Cuando se hace click sobre el botón se ejecuta la función
btnEj1.addEventListener("click", function () {

  // Cambiar el texto del primer párrafo
  contEj1.querySelector("p").textContent = "Texto modificado por JavaScript";

  // Aplicar el resaltado al segundo párrafo
  var segundo = contEj1.querySelectorAll("p")[1];
  segundo.classList.add("resaltado");

  // Cambiar color del tercer párrafo
  var tercero = contEj1.querySelectorAll("p")[2];
  tercero.style.color = "red";
});

//EJERCICIO 2 - Crear y eliminar párrafos
var btnAdd = document.getElementById("btn-add");
var btnRemove = document.getElementById("btn-remove");
var contEj2 = document.getElementById("contenido-ej2");

// Cuando se hace click sobre el botón se ejecuta la función
btnAdd.addEventListener("click", function () {

  // Creamos la variable nuevo con el "p" y con textContent añadimos texto
  var nuevo = document.createElement("p");
  nuevo.textContent = "Nuevo párrafo añadido";
  nuevo.classList.add("mb-2");
  // En el contenedor agregamos párrafos con appendChild
  contEj2.appendChild(nuevo);
  // Hacemos el Hover para los párrafos del ejercicio 2
  aplicarHover(nuevo);
});

// Cuando se hace click sobre el botón se ejecuta la función
btnRemove.addEventListener("click", function () {
  var parrafos = contEj2.querySelectorAll("p");
  // En el if/else eliminamos los párrafos con removeChild del contenedor y del tamaño del array restamos un contador
  if (parrafos.length > 0) {
    contEj2.removeChild(parrafos[parrafos.length - 1]);
  } else {
    alert("No hay párrafos para eliminar.");
  }
});

// EJERCICIO 3 - Eventos del ratón (hover)
// Función para cuando se pasa el ratón por encima
function aplicarHover(elemento) {

  // Con mouseenter hacemos que el elemento modifique el color de fondo
  elemento.addEventListener("mouseenter", function () {
    elemento.style.backgroundColor = "lightgray";
  });
  // Con mouseleave hacemos que el elemento vuelva al color original al salir con el ratón
  elemento.addEventListener("mouseleave", function () {
    elemento.style.backgroundColor = "";
  });
}

// Aplicar el efecto de Hover a los párrafos de tal manera que todos los párrafos tengan esta función
var parrafosEj3 = document.querySelectorAll("#contenido-ej3 p");
parrafosEj3.forEach(function (p) {
  aplicarHover(p);
});

// EJERCICIO 4 - Input y validación
var input = document.getElementById("nuevoTexto");
var btnCambiar = document.getElementById("btn-cambiar");
var msg = document.getElementById("msg-ej4");

// Función la cual se ejecuta al hacer click sobre el botón
btnCambiar.addEventListener("click", function () {
  // Con trim eliminamos los espacios en blanco del texto al principio y al final obteniendo el texto
  var valor = input.value.trim();
  var primerParrafo = document.querySelector("#contenido-ej1 p");

  // El if es por si el usuario no escribe nada mostramos el mensaje de error y modificamos el texto con el textContent
  if (valor === "") {
    msg.classList.remove("d-none");
    msg.textContent = "El campo está vacío";
  } else {
    // Con d-none ocultamos el mensaje de error y con textContent añadimos el valor del texto que hemos escrito
    msg.classList.add("d-none");
    primerParrafo.textContent = valor;
  }
});

// EJERCICIO 5 - Lista de tareas
var tareaInput = document.getElementById("tareaInput");
var btnTarea = document.getElementById("btn-tarea");
var btnBorrar = document.getElementById("btn-borrar-completadas");
var lista = document.getElementById("listaTareas");

// Función en la que al hacer click sobre el botón, ejecute lo que hay dentro de ella
btnTarea.addEventListener("click", function () {
  // Si el if está vacío salimos de la función
  var texto = tareaInput.value.trim();
  if (texto === "") return;

  // Creamos la variable li y para las listas y dentro de esta meteremos el texto introducido
  var li = document.createElement("li");
  li.textContent = texto;
  li.classList.add("mb-2");

  // Al hacer click sobre la tarea correspondiente, con toggle llamaremos al CSS de "completada" y esta se modificará
  li.addEventListener("click", function () {
    li.classList.toggle("completada");
  });

  // Añadimos la tarea al appendChild de li y con el Imput.value dejaremos vacío el campo para insertar nuevas tareas
  lista.appendChild(li);
  tareaInput.value = "";
});

// Función de borrar la cual se activa cuando se pulsa el botón
btnBorrar.addEventListener("click", function () {
  // Creamos una variable de completadas y la igualamos a las tareas a las cuales se le han aplicado el estilo de CSS
  var completadas = lista.querySelectorAll(".completada");
  // Con el forEach recorremos cada tarea que cumpla con el requisito de que esté afectado por el css y con remove lo eliminamos
  completadas.forEach(function (t) {
    t.remove();
  });
});