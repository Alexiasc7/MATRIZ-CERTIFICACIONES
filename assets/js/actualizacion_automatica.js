console.log(2);

/*// Función para actualizar la página
function actualizarPagina() {
    location.reload(); // Recargar la página
}

// Establecer el tiempo de actualización (en milisegundos)
var tiempoActualizacion = 5000; // 5 segundos

// Actualizar la página cada cierto tiempo
setInterval(actualizarPagina, tiempoActualizacion);*/

function actualizarPagina() {
    location.reload(); // Recargar la página
  }

  // Calcular el tiempo restante hasta el próximo día
  function calcularTiempoRestante() {
    var fechaActual = new Date(); // Fecha actual
    var fechaSiguiente = new Date(fechaActual.getFullYear(), fechaActual.getMonth(), fechaActual.getDate() + 1); // Próximo día

    var tiempoRestante = fechaSiguiente.getTime() - fechaActual.getTime(); // Diferencia de tiempo en milisegundos

    return tiempoRestante;
  }

  // Actualizar la página diariamente
  setTimeout(function() {
    actualizarPagina();
  }, calcularTiempoRestante());

  console.log(calcularTiempoRestante());

  // Crear un objeto Date con la fecha y hora actual
var fechaHoraActual = new Date();

// Obtener la fecha y hora en una zona horaria específica
var opcionesFechaHora = { timeZone: 'America/Chicago' }; // Zona horaria de Nueva York
var fechaHoraZonaEspecifica = fechaHoraActual.toLocaleString('es-ES', opcionesFechaHora);

console.log(fechaHoraZonaEspecifica); // Ejemplo de salida: "24/05/2023 10:30:00"

