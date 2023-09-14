function nuevo() {
  // Obtener los elementos del formulario
  var inputtipoDocumento = document.getElementById("tipoDocumento");
  var inputNoIdentificacion = document.getElementById("NoIdentificacion");
  var inputnombre1 = document.getElementById("nombre1");
  var inputnombre2 = document.getElementById("nombre2");
  var inputapellido1 = document.getElementById("apellido1");
  var inputapellido2 = document.getElementById("apellido2");
  var inputfechaNacimiento = document.getElementById("fechaNacimiento");
  var inputedad = document.getElementById("edad");
  var inputgenero = document.getElementById("genero");
  var inputeps = document.getElementById("eps");
  var inputtelefono = document.getElementById("telefono");
  var inputcorreo = document.getElementById("correo");
  var inputestado_civil = document.getElementById("estado_civil");
  var inputetnia = document.getElementById("etnia");
  var inputdireccion = document.getElementById("direccion");
  var inputtipo_afiliado = document.getElementById("tipo_afiliado");
 

  // Limpiar los campos del formulario
  inputtipoDocumento.value = "";
  inputNoIdentificacion.value = "";
  inputnombre1.value = "";
  inputnombre2.value = "";
  inputapellido1.value = "";
  inputapellido2.value = "";
  inputApellido.value = "";
  inputfechaNacimiento = "";
  inputedad.value = "";
  inputgenero.value = "";
  inputeps.value = "";
  inputtelefono.value = "";
  inputcorreo.value = "";
  inputestado_civil.value = "";
  inputetnia.value = "";
  inputdireccion.value = "";
  inputtipo_afiliado.value = "";

  // Enfocar el primer campo del formulario
  inputNombre.focus();
}