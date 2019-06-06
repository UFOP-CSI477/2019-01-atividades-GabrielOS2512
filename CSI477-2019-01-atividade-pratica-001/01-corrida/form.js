function corrida(){
  var nome1 = document.dados.nome1;var nome2 = document.dados.nome2;var nome3 = document.dados.nome3;var nome4 = document.dados.nome4;var nome5 = document.dados.nome5;var nome6 = document.dados.nome6;
  var tempo1 = document.dados.tempo1;var tempo2 = document.dados.tempo2;var tempo3 = document.dados.tempo3;var tempo4 = document.dados.tempo4;var tempo5 = document.dados.tempo5;var tempo6 = document.dados.tempo6;

  var corredor = new Array();

  //if ( validar(nome1, "n1", "labelv1") && validar(tempo2, "t2", "labelt2") && validar(tempo3, "t3", "labelt3") && validar(tempo4, "t4", "labelt4") && validar(tempo5, "t5", "labelt5") && validar(tempo6, "t6", "labelt6") && validar(nome2, "n2", "labelv2") && validar(nome3, "n3", "labelv3") && validar(nome4, "n4", "labelv4") && validar(nome5, "n5", "labelv5") && validar(nome6, "n6", "labelv6")) {

    corredor.push({largada:'1',nome: document.getElementById('n1').value,tempo: document.getElementById('t1').value});
    document.getElementById('t1').value='';
    corredor.push({largada:'2',nome: document.getElementById('n2').value,tempo: document.getElementById('t2').value});
    document.getElementById('t2').value='';
    corredor.push({largada:'3',nome: document.getElementById('n3').value,tempo: document.getElementById('t3').value});
    document.getElementById('t3').value='';
    corredor.push({largada:'4',nome: document.getElementById('n4').value,tempo: document.getElementById('t4').value});
    document.getElementById('t4').value='';
    corredor.push({largada:'5',nome: document.getElementById('n5').value,tempo: document.getElementById('t5').value});
    document.getElementById('t5').value='';
    corredor.push({largada:'6',nome: document.getElementById('n6').value,tempo: document.getElementById('t6').value});
    document.getElementById('t6').value='';

    console.log(corredor);

    corredor.sort((a, b) => a.tempo.localeCompare(b.tempo));

    console.log(corredor);


  //document.getElementById('tabela').style.display='block';

  document.getElementById('l1').value = corredor[0].largada;
  document.getElementById('c1').value = corredor[0].nome;
  document.getElementById('tp1').value = corredor[0].tempo;
  document.getElementById('l2').value = corredor[1].largada;
  document.getElementById('c2').value = corredor[1].nome;
  document.getElementById('tp2').value = corredor[1].tempo;
  document.getElementById('l3').value = corredor[2].largada;
  document.getElementById('c3').value = corredor[2].nome;
  document.getElementById('tp3').value = corredor[2].tempo;
  document.getElementById('l4').value = corredor[3].largada;
  document.getElementById('c4').value = corredor[3].nome;
  document.getElementById('tp4').value = corredor[3].tempo;
  document.getElementById('l5').value = corredor[4].largada;
  document.getElementById('c5').value = corredor[4].nome;
  document.getElementById('tp5').value = corredor[4].tempo;
  document.getElementById('l6').value = corredor[5].largada;
  document.getElementById('c6').value = corredor[5].nome;
  document.getElementById('tp6').value = corredor[5].tempo;

//  }
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
