$(document).ready(function() {
  $('#tabla-pacientes').DataTable({
    // Define los criterios de ordenamiento disponibles
    "order": [
      [0, "asc"], // Ordena por la primera columna en orden ascendente
      [1, "desc"] // Luego por la segunda columna en orden descendente
    ]
  });
});
