// Plantilla para alumnos - Tema07 Ejercicio 1
// Completa las funciones marcadas con TODO y ejecuta desde el navegador.

// Ejercicio 1 - raizCuadrada (plantilla)
document.getElementById('run-e1').addEventListener('click', function () {
  const v = parseFloat(document.getElementById('a-e1').value);
  const out = document.getElementById('out-e1');
  // TODO: implementar raizCuadrada(numero) 
  function raizCuadrada(numero) {
    return Math.sqrt(numero);
  }

  const res = raizCuadrada(v);

  out.textContent = `Resultado: ${res}`;

});

// Ejercicio 2 - alerta (plantilla)
document.getElementById('run-e2').addEventListener('click', function () {
  const msg = document.getElementById('a-e2').value || 'Mensaje de ejemplo';
  alert(msg);
  

  document.getElementById('out-e2').textContent = 'Implementa la función alerta(mensaje) para mostrar un alert en el navegador.';
});

// Ejercicio 3 - new Function (plantilla)
document.getElementById('run-e3').addEventListener('click', function () {

  // TODO: usa new Function para construir y ejecutar una función que sume a y b
  const suma = new Function('a', 'b', 'return a + b;');
  const a = parseFloat(document.getElementById('a-e3a').value);
  const b = parseFloat(document.getElementById('a-e3b').value);
  const resultado = suma(a, b);
  document.getElementById('out-e3').textContent = `Resultado: ${resultado}`;

});

// Ejercicio 4 - Hoisting con var (plantilla)
document.getElementById('run-e4').addEventListener('click', function () {
  // TODO: reproduce el ejemplo en el código editando esta función.
  var mensaje = 'Si ves esto es que ha funcionado el hoisting';
  function mostrarMensaje(texto) {
    document.getElementById('out-e4').textContent = texto;
  }
  mostrarMensaje(mensaje);
});

// Ejercicio 5 - IIFE (plantilla)
document.getElementById('run-e5').addEventListener('click', function () {

  // TODO: crea una IIFE que haga console.log y devuelva un valor. Luego muestra el resultado aquí.
  (function () {
    console.log('Esta es una IIFE que se ejecuta inmediatamente');
    document.getElementById('out-e5').textContent = 'IIFE ejecutada. Revisa la consola para ver el mensaje.';
    return 42;
  })();

});

// Ejercicio 6 - Función anónima dividir (plantilla)
document.getElementById('run-e6').addEventListener('click', function () {

  // TODO: define y usa esa función para devolver el resultado
  const a = parseFloat(document.getElementById('a-e6a').value);
  const b = parseFloat(document.getElementById('a-e6b').value);
  const out = document.getElementById('out-e6');
  const dividir = function (x, y) {
    if (y === 0) return 'Error, no se puede dividir por cero';
    return x / y;
  };
  const resultado = dividir(a, b);
  out.textContent = `Resultado: ${resultado}`;

});

// Ejercicio 7 - Función flecha multiplicar (plantilla)
document.getElementById('run-e7').addEventListener('click', function () {

  // TODO: implementa una función flecha multiplicar = 
  const a = parseFloat(document.getElementById('a-e7a').value);
  const b = parseFloat(document.getElementById('a-e7b').value);
  const out = document.getElementById('out-e7');
  const multiplicar = (x, y) => x * y;
  const resultado = multiplicar(a, b);
  out.textContent = `Resultado: ${resultado}`;

});

// Ejercicio 8 - Parámetros por defecto (plantilla)
document.getElementById('run-e8').addEventListener('click', function () {

  // TODO: implementar function saludar
  const nombre = document.getElementById('a-e8').value;
  const out = document.getElementById('out-e8');
  function saludar(nombre = 'Invitado') {
    return `Hola ${nombre}!`;
  }
  const resultado = saludar(nombre);
  out.textContent = resultado;

});

// Ejercicio 9 - Funciones anidadas (plantilla)
document.getElementById('run-e9').addEventListener('click', function () {

  // TODO: implementar función externa e interna
  function externa() {
    function interna() {
      return 'Mensaje mostrado desde la función interna';
    }
    return 'La función externa ha llamado a la función interna: ' + interna();
  }
  const resultado = externa();
  document.getElementById('out-e9').textContent = resultado;

});

// Ejercicio 10 - Métodos nativos (plantilla)
document.getElementById('run-e10').addEventListener('click', function () {

  // TODO: usa los métodos nativos vistos (length, toUpperCase, trim, indexOf, Math.random, Date.now)
  const texto = document.getElementById('a-e10').value;
  const out = document.getElementById('out-e10');

  const longitud = texto.length;
  const mayusculas = texto.toUpperCase();
  const recortado = texto.trim();
  const indiceA = texto.indexOf('a');
  const numeroAleatorio = Math.random();
  const tiempoActual = Date.now();
  
  out.innerHTML = `
    Longitud: ${longitud} <br>
    Mayúsculas: ${mayusculas} <br>
    Recortado: "${recortado}" <br>
    Índice de 'a': ${indiceA} <br>
    Número aleatorio: ${numeroAleatorio} <br>
    Tiempo actual (ms desde 1970): ${tiempoActual}
  `;

});
