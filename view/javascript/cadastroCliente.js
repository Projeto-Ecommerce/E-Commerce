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
    }
  }
  
  // >>> VALIDAÇÃO DO CAMPO DE CPF <<<
  function validaCpf(x) {
    cpf['length'] = x.value.length;
    cpf['value'] = x.value;

    if(cpf['value'] == ""){
      return false;
    }

    if(cpf['length'] != 14){
      return false;
    }

    cpf['clean'] = x.value.replace(/\.|\-/g, '');
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

    var xSplit = x.value.split(" ");
    var xEmail = x.value.split("@");
    if(x.value.toLowerCase() != x.value || x.value == "" || xSplit[1] != undefined){
      return false;
    }
    return true;
  }

  // >>> VALIDAÇÃO DE DATA DE NASCIMENTO <<<
  
  function validaNascimento (x){

    var dataNascimento = x.value.split("/");
    var dataAtual = new Date;

    var dia = dataNascimento[0];
    var mes = dataNascimento[1];
    var ano = dataNascimento[2];

    if(ano.length != 4){
      return false;
    }

    if((dataAtual.getFullYear() - ano) >= 16){
      
      switch(mes){
        case '01':

          if(dia <= '31'){
            return true;
          }
          break;
  
        case '02':
        
          if(dia <= '29'){
            return true;
          }
          break;
  
        case '03':
        
          if(dia <= '31'){
            return true;
          }
          break;
  
        case '04':
  
          if(dia <= '30'){
            return true;
          }
          break;
  
        case '05':
        
          if(dia <= '31'){
            return true;
          }
          break;
  
        case '06':
        
          if(dia <= '30'){
            return true;
          }
          break;
  
        case '07':
        
          if(dia <= '31'){
            return true;
          }
          break;
  
        case '08':
        
          if(dia <= '31'){
            return true;
          }
          break;
  
        case '09':
        
          if(dia <= '30'){
            return true;
          }
          break;
  
        case '10':
        
          if(dia <= '31'){
            return true;
          }
          break;
  
        case '11':
        
          if(dia <= '30'){
            return true;
          }
          break;
  
        case '12':
        
          if(dia <= '31'){
            return true;
          }
          break;
      }// ESTRUTURA DO SWITCH
    }// ESTRUTURA DO IF
  }

  // >>> VALIDAÇÃO DE CELULAR <<<
  function validaCelular (x){

    ddd = x.value.substring(1,3);

    if(x.value.length < 15){
      return false;
    }

    switch(ddd){
        case '11':
        case '12':
        case '13':
        case '14':
        case '15':
        case '16':
        case '17':
        case '18':
        case '19':
        case '21':
        case '22':
        case '24':
        case '27':
        case '28':
        case '31':
        case '32':
        case '33':
        case '34':
        case '35':
        case '37':
        case '38':
        case '41':
        case '42':
        case '43':
        case '44':
        case '45':
        case '46':
        case '47':
        case '48':
        case '49':
        case '51':
        case '53':
        case '54':
        case '55':
        case '61':
        case '62':
        case '63':
        case '64':
        case '65':
        case '66':
        case '67':
        case '68':
        case '69':
        case '71':
        case '73':
        case '74':
        case '75':
        case '77':
        case '79':
        case '81':
        case '82':
        case '83':
        case '84':
        case '85':
        case '86':
        case '87':
        case '88':
        case '89':
        case '91':
        case '92':
        case '93':
        case '94':
        case '95':
        case '96':
        case '97':
        case '98':
        case '99':
          return true;

          break;
        default:
          return false;
    }
  }

  // VALIDAÇÃO DOS CAMPOS
  document.addEventListener('click', function (){

    var nome = document.getElementById('nome');

    var cpf = document.getElementById('cpf');
  
    var email = document.getElementById('email');
  
    var nascimento = document.getElementById('dataNascimento');
  
    var celular = document.getElementById('celular');
    
    var botao = document.getElementById('btn-cadastrar');

    email.addEventListener('blur', function (){

      if(validaEmail(email) != true){
        email.style.background = 'rgba(255, 205, 205, 0.479)';
      } else {
        email.style.background = 'transparent';
      }
    })
  
    nome.addEventListener('blur', function (){
      
      if(validaNome(nome) != true){
        nome.style.background = 'rgba(255, 205, 205, 0.479)';
      } else {
        nome.style.background = 'transparent';
      }
    })
  
    cpf.addEventListener('blur', function (){
  
      if(validaCpf(cpf) != true){
        cpf.style.background = 'rgba(255, 205, 205, 0.479)';
      } else {
        cpf.style.background = 'transparent';
      }
    })
  
    nascimento.addEventListener('blur', function (){
  
      if(validaNascimento(nascimento) != true){
        nascimento.style.background = 'rgba(255, 205, 205, 0.479)';
      } else {
        nascimento.style.background = 'transparent';
      }
    })
  
    celular.addEventListener('blur', function (){
  
      if(validaCelular(celular) != true){
        celular.style.background = 'rgba(255, 205, 205, 0.479)';
      } else {
        celular.style.background = 'transparent';
      }
    })

    if((validaNome(nome) == true) & (validaEmail(email) == true) && (validaCpf(cpf) == true) && (validaNascimento(nascimento) == true) && (validaCelular(celular) == true)){
      botao.removeAttribute('disabled');
    } else {
      botao.setAttribute('disabled', 'disabled');
    }
  })

})