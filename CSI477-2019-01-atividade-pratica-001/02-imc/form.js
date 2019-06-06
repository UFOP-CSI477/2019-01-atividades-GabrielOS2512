function calcularimc() {
  var peso = document.dados.peso;
  var altura = document.dados.altura;

  var p = parseFloat(peso.value);
  var a = parseFloat(altura.value);

  if ( validar(peso, "alerta1", "labelv1") && validar(altura, "alerta2", "labelv2") ) {

    var imc = p/(a*a);

    document.dados.resultado.value = imc;

    if (imc < 18.5) {
      document.getElementById("imc_r").value = "Subnutrição";
    }
    else if (imc >= 18.5 && imc <=24.9) {
      document.getElementById("imc_r").value = "Peso Normal";
    }
    else if (imc > 24.9 && imc <=29.9) {
      document.getElementById("imc_r").value = "Acima do Peso";
    }
    else if (imc > 29.9 && imc <=34.9) {
      document.getElementById("imc_r").value = "Obesidade 1";
    }
    else if (imc > 34.9 && imc <=39.9) {
      document.getElementById("imc_r").value = "Obesidade 2";
    }
    else if (imc > 39.9) {
      document.getElementById("imc_r").value = "Obesidade 3";
    }

    var ideal2 = 24.9*(a*a);
    var ideal1 = 18.5*(a*a);

    document.dados.ideal1.value = ideal1;
    document.dados.ideal2.value = ideal2;
    document.getElementById('resultados_imc').style.display='block';
  }
}

function validar(campo, alerta, label) {

  var n = parseFloat(campo.value);

  if (campo.value.length == 0 || isNaN(n)) {

    // Erro
    document.getElementById(alerta).style.display = "block";

    document.getElementById(label).classList.add("text-danger");

    campo.classList.add("is-invalid");

    campo.value = "";
    campo.focus();
    return false;

  }

  // Tudo correto
  document.getElementById(alerta).style.display = "none";
  campo.classList.remove("is-invalid");
  campo.classList.add("is-valid");

  document.getElementById(label).classList.remove("text-danger");

  return true;

}
