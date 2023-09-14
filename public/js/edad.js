function calcularEdad() {
    var fecha_nacimiento = document.getElementById("fecha_nacimiento").value;
    var hoy = new Date();
    var fecha_nac = new Date(fecha_nacimiento);
    var edad = hoy.getFullYear() - fecha_nac.getFullYear();
    var m = hoy.getMonth() - fecha_nac.getMonth();
    if (m < 0 || (m === 0 && hoy.getDate() < fecha_nac.getDate())) {
      edad--;
    }
    document.getElementById("edad").value = edad;
  }
  
  