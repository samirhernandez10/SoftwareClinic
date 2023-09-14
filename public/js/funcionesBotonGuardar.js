function guardar() {
  var tipoDocumento = document.getElementById("tipoDocumento").value;
  var NoIdentificacion = document.getElementById("NoIdentificacion").value;
  var nombre1 = document.getElementById("nombre1").value;
  var nombre2 = document.getElementById("nombre2").value;
  var apellido1 = document.getElementById("apellido1").value;
  var apellido2 = document.getElementById("apellido2").value;
  var fechaNacimiento = document.getElementById("fecha_nacimiento").value;
  var edad = document.getElementById("edad").value;
  var genero = document.getElementById("genero").value;
  var eps = document.getElementById("eps").value;
  var telefono = document.getElementById("telefono").value;
  var correo = document.getElementById("correo").value;
  var estado_civil = document.getElementById("estado_civil").value;
  var etnia = document.getElementById("etnia").value;
  var direccion = document.getElementById("direccion").value;
  var tipo_afiliado = document.getElementById("tipo_afiliado").value;

  if (!NoIdentificacion || !telefono||!tipo_afiliado) {
    alert("Por favor, termine de contestar el Formulrio");
    return false;
  
  }

  var anios = parseInt(edad);
  var meses = 0;
  var dias = 0;

  var persona = {
    tipoDocumento: tipoDocumento,
    NoIdentificacion: NoIdentificacion,
    nombre1: nombre1,
    nombre2: nombre2,
    apellido1: apellido1,
    apellido2: apellido2,
    fechaNacimiento: fechaNacimiento,
    edad: edad,
    genero: genero,
    eps: eps,
    telefono: telefono,
    correo: correo,
    estado_civil: estado_civil,
    etnia: etnia,
    direccion: direccion,
    tipo_afiliado: tipo_afiliado,
  };

  let registros = JSON.parse(localStorage.getItem("registros")) || [];

  registros.push(persona);
  localStorage.setItem("registros", JSON.stringify(registros));
  alert("¡Registro guardado con éxito!");
  
  document.getElementById("formulario").reset();

  document.getElementById("imprimirBtn").disabled = false;
  return false;
}
