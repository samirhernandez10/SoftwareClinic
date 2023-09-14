function imprimirRegistros() {
  let registros = JSON.parse(localStorage.getItem("registros")) || [];

  if (registros.length === 0) {
    alert("No hay registros guardados para imprimir");
    return;
  }

  let tabla = "<table><thead><tr><th>Tipo Documento</th><th>No. Identificación</th><th>Nombre</th><th>Fecha Nacimiento</th><th>Edad</th><th>Género</th><th>EPS</th><th>Teléfono</th><th>Correo</th><th>Estado Civil</th><th>Etnia</th><th>Dirección</th><th>Tipo Afiliado</th></tr></thead><tbody>";
  for (let i = 0; i < registros.length; i++) {
    let persona = registros[i];
    tabla += "<tr>";
    tabla += "<td>" + persona.tipoDocumento + "</td>";
    tabla += "<td>" + persona.NoIdentificacion + "</td>";
    tabla += "<td>" + persona.nombre1 + " " + persona.nombre2 + " " + persona.apellido1 + " " + persona.apellido2 + "</td>";
    tabla += "<td>" + persona.fechaNacimiento + "</td>";
    tabla += "<td>" + persona.edad + "</td>";
    tabla += "<td>" + persona.genero + "</td>";
    tabla += "<td>" + persona.eps + "</td>";
    tabla += "<td>" + persona.telefono + "</td>";
    tabla += "<td>" + persona.correo + "</td>";
    tabla += "<td>" + persona.estado_civil + "</td>";
    tabla += "<td>" + persona.etnia + "</td>";
    tabla += "<td>" + persona.direccion + "</td>";
    tabla += "<td>" + persona.tipo_afiliado + "</td>";
    tabla += "</tr>";
  }
  tabla += "</tbody></table>";

  let win = window.open("", "Imprimir Registros");
  win.document.write("<html><head><title>Registros</title>");
  win.document.write("<style>table{border-collapse: collapse; width: 100%;}th, td{padding: 8px; text-align: left; border-bottom: 1px solid #ddd;}</style>");
  win.document.write("</head><body>");
  win.document.write("<h1>Registros</h1>");
  win.document.write(tabla);
  win.document.write("</body></html>");
  win.document.close();
  win.print();
}
