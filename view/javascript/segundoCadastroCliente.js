window.onload = function carregar(){

    function focar(i){ 
        document.getElementsByClassName('inputText')[i].style.background = 'rgb(236, 245, 255)'
    }

    function desfocar(i){ 
      document.getElementsByClassName('inputText')[i].style.background = 'rgb(241, 241, 241'
  }

    document.getElementById('rg').addEventListener('click', function (){
        document.getElementById('rg').addEventListener('keyup', function (){
            if(document.getElementById('rg').value.length != 0){
                focar(0);
            } else {
                desfocar(0)
            }
        })
    })

    document.getElementById('orgemissor').addEventListener('click', function (){
        if(document.getElementById('orgemissor').value != '---'){
            focar(1)
        } else {
            desfocar(1)
        }
    })

    document.getElementById('data').addEventListener('click', function (){
      document.getElementById('data').addEventListener('keyup', function (){
          if(document.getElementById('data').value.length != 0){
              focar(2);
          } else {
              desfocar(2)
          }
      })
  })

    document.getElementById('estEmissor').addEventListener('click', function (){
      if(document.getElementById('estEmissor').value != '---'){
          focar(3)
      } else {
          desfocar(3)
      }
    })
}

$(document).ready(function(){
    $("#cpf").mask("000.000.000-00")
    $("#cnpj").mask("00.000.000/0000-00")
    $("#telefone").mask("(00) 0000-0000")
    $("#salario").mask("999.999.990,00", {reverse: true})
    $("#cep").mask("00.000-000")
    $("#data").mask("00/00/0000")
    
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
  })
