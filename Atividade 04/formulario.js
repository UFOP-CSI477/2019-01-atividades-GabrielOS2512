// cadastrar_prod
function validar(){
  var n1 = parseFloat(document.formulario1.peso.value);
  var n2 = parseFloat(document.formulario1.valor.value);


  if(document.formulario1.nome1.value.length == 0 || document.formulario1.nome1.value.length == 0 || document.formulario1.peso.value.length == 0 || isNaN(n1) || isNaN(n2) || document.formulario1.medida.value.length == 0 || document.formulario1.valor.value.length == 0 || document.formulario1.estoque.value.length == 0 || document.formulario1.forne.value == 0){
    window.alert("Um ou mais campos está vazio ou foi preenchido incorretamente!");
  }

  if (document.formulario1.nome1.value.length == 0) {
    document.getElementById('prod1').style.display='block'
  }
  if (document.formulario1.peso.value.length == 0) {
    document.getElementById('prod2').style.display='block'
  }
  if(document.formulario1.peso.value.length != 0 && isNaN(n1)){
    document.getElementById('prod2').style.display='none'
    document.getElementById('prod2a').style.display='block'
  }
  if (document.formulario1.medida.value.length == 0) {
    document.getElementById('prod3').style.display='block'
  }
  if (document.formulario1.valor.value.length == 0) {
    document.getElementById('prod4').style.display='block'
  }
  if(document.formulario1.valor.value.length != 0 && isNaN(n2)){
    document.getElementById('prod4').style.display='none'
    document.getElementById('prod4a').style.display='block'
  }
  if (document.formulario1.estoque.value.length == 0) {
    document.getElementById('prod5').style.display='block'
  }
  if (document.formulario1.forne.value == 0) {
    document.getElementById('prod6').style.display='block'
  }

}
// vender
function vender(){
  var n1 = parseFloat(document.formulario.fone2.value);

  if(document.formulario.nome2.value.length == 0 || document.formulario.endereco2.value.length == 0 || document.formulario.fone2.value.length == 0 || isNaN(n1) || document.formulario.prod.value == 0){
    window.alert("Um ou mais campos está vazio ou foi preenchido incorretamente!")
  }

  if(document.formulario.nome2.value.length == 0){
    document.getElementById('venda1').style.display='block'
  }
  if(document.formulario.endereco2.value.length == 0){
    document.getElementById('venda2').style.display='block'
  }
  if(document.formulario.fone2.value.length == 0){
    document.getElementById('venda3').style.display='block'
  }
  if(document.formulario.fone2.value.length != 0 && isNaN(n1)){
    document.getElementById('venda3').style.display='none'
    document.getElementById('venda3a').style.display='block'
  }
  if(document.formulario.prod.value == 0)
  {
    document.getElementById('venda4').style.display='block'
  }
}
