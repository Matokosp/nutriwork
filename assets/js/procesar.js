function validateForm() {
  var nombre = $("input[name='nombre']");
  var apellido = $("input[name='apellido']");
  var area = $("input[name='area']");
  var empresa = $("input[name='empresa']");
  var mail = $("input[name='mail']");
  var telefono = $("input[name='telefono']");
  var error = false;
  if (nombre.val() == "") {
    nombre.css("background-color", "red");
    error = true;
  } else {
    nombre.css("background-color", "white");
  }
  if (apellido.val() == "") {
    apellido.css("background-color", "red");
    error = true;
  } else {
    apellido.css("background-color", "white");
  }
  if (area.val() == "") {
    area.css("background-color", "red");
    error = true;
  } else {
    area.css("background-color", "white");
  }
  if (empresa.val() == "") {
    empresa.css("background-color", "red");
    error = true;
  } else {
    empresa.css("background-color", "white");
  }
  if (mail.val() == "") {
    mail.css("background-color", "red");
    error = true;
  } else {
    mail.css("background-color", "white");
  }
  var nregex = /^\d+$/;
  if (!nregex.test(telefono.val())) {
    telefono.css("background-color", "red");
    alert("Telefono solo puede contener numeros");
    return false;
  } else {
    telefono.css("background-color", "white");
  }
  if (error) {
    return false;
  }
  var letters = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;
  if (
    !letters.test(nombre.val()) ||
    !letters.test(apellido.val()) ||
    !letters.test(area.val())
  ) {
    alert("Nombre, apellido, área y empresa solo pueden contener letras");
    return false;
  }
  if (
    !/^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(
      mail.val()
    )
  ) {
    alert("Debe ingresar un mail valido ejemplo@ejemplo.com");
    return false;
  }
  alert("Has sido inscrito con éxito");
  return true;
}
