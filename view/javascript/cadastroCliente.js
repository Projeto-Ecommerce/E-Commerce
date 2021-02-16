$(document).ready(function(){

  // FORMATAÇÃO DE CAMPOS
  $("#cpf").mask("000.000.000-00")
  $("#cnpj").mask("00.000.000/0000-00")
  $("#telefone").mask("(00) 0000-0000")
  $("#salario").mask("999.999.990,00", {reverse: true})
  $("#cep").mask("00.000-000")
  $("#dataNascimento").mask("00/00/0000")
  $("#rg").mask("999.999.999-W", {
    translation: {
      'W': {
        pattern: /[X0-9]/
      }
    },
    reverse: true
  })
  
  var options = {
    translation: {
      'A': {pattern: /[A-Z]/},
      'a': {pattern: /[a-zA-Z]/},
      'S': {pattern: /[a-zA-Z0-9]/},
      'L': {pattern: /[a-z]/},
    }
  }
  
  $("#placa").mask("AAA-0000", options)
  
  $("#codigo").mask("AA.LLL.0000", options)
  
  $("#celular").mask("(00) 0000-00009")
  
  $("#celular").blur(function(event){
    if ($(this).val().length == 15){
      $("#celular").mask("(00) 00000-0009")
    }else{
      $("#celular").mask("(00) 0000-00009")
    }
  })

  // >>> VALIDAÇÃO DO CAMPO NOME <<<
  function validaNome(x) {
    x = x.value.split(" ");
    if(x[1] != undefined){
      return true;
    } else {
      return false;
    }
  }
  
  // >>> VALIDAÇÃO DO CAMPO DE CPF <<<
  function validaCpf(x) {
    cpf['length'] = x.value.length;
    cpf['value'] = x.value;
    if(cpf['length'] != 14){
      return false;
    }

    cpf['clean'] = x.value.replace(/\.|\-/g, '');
    // console.log(cpf['length']);
    // console.log(cpf['value']);
    // console.log(cpf['clean']);
    var cpfArray = ['CPF'];
    var soma = 0;
    var mult = 0;
    var i = 0;
    var j = 10;
    while(i <= 8){
      mult = cpf['clean'].substring(i, i + 1) * j;     
      soma = soma + mult;
      i++;
      j--
    }

    var firstNum = (soma * 10) % 11
    if(firstNum >= 10){
      firstNum = 0;
    }

    soma = 0
    i = 0;
    j = 11
    while(i <= 9){
      mult = cpf['clean'].substring(i, i + 1) * j;  
      soma = soma + mult;
      i++;
      j--;
      
    }

    var secondNum = (soma * 10) % 11
    if(secondNum >= 10){
      secondNum = 0;
    }

    finalNum = firstNum.toString() + secondNum.toString();
     
    if(finalNum == cpf['clean'].substring(9)){
      return true;
    }
  }

  // >>> VALIDAÇÃO DE EMAIL <<<

  function validaEmail (x){
    email['value'] = x.value;
    email['length'] = x.value.length; 

    if(email['length'] == undefined){
      return false;
    }
    
    email = email['value'].split(" ")
    if(email['value'][1] != undefined){
      return false;
    }
    
  }
  

  // VALIDAÇÃO DOS CAMPOS
  var nome = document.getElementById('nome')

  var cpf = document.getElementById('cpf');

  var email = document.getElementById('email');

  email.addEventListener('keyup', function (){
    console.log(validaEmail(email))
  })

  nome.addEventListener('keyup', function (){
    console.log(validaNome(nome));
    if(validaNome(nome) == false){
      nome.style.background = 'rgb'
    }
  })
})