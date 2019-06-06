function escala() {
  var intervalo = document.dados.intervalo;
  var amplitude = document.dados.amplitude;

  var i = parseFloat(intervalo.value);
  var a = parseFloat(amplitude.value);

  if ( validar(amplitude, "alerta1", "labelv1") && validar(intervalo, "alerta2", "labelv2") ) {
    var m = Math.log10(a) + (3*Math.log10(8*i)) - 2.92;

    if (m < 3.5) {
      //document.getElementById("resultado").value = "Subnutrição";
      document.dados.resultado.value = m;
      document.getElementById('amp1').style.display='block';
    }
    else if (m >= 3.5 && m <5.5) {
      document.dados.resultado.value = m;
      document.getElementById('amp2').style.display='block';
    }
    else if (m >= 5.5 && m <6) {
      document.dados.resultado.value = m;
      document.getElementById('amp3').style.display='block';
    }
    else if (m >6 && m <7) {
      document.dados.resultado.value = m;
      document.getElementById('amp4').style.display='block';
      window.alert("Atenção");
    }
    else if (m >=7 && m <8) {
      document.dados.resultado.value = m;
      document.getElementById('amp5').style.display='block';
      window.alert("Alerta de Perigo");
    }
    else if (m >= 8) {
      document.dados.resultado.value = m;
      document.getElementById('amp6').style.display='block';
      window.alert("Alerta de Perigo");
    }

      document.getElementById('resultados_ric').style.display='block';
    //window.alert(m);
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
