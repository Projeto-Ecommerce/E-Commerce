$(document).ready(function(){

    function focar(id){ 
        document.getElementById(id).style.background = 'rgb(236, 245, 255)'
    }

    function desfocar(id){ 
      document.getElementById(id).style.background = 'rgb(241, 241, 241)'
    }
    
    function focarError(id){
      document.getElementById(id).style.background = 'rgb(255, 190, 190)'
    }

    // FOCAR RG
    document.getElementById('rg').addEventListener('click', function (){
        document.getElementById('rg').addEventListener('keyup', function (){
            if(document.getElementById('rg').value.length != 0){
                focar('rg');
            } else {
                desfocar('rg');
            }
        })
    })

    // FOCAR ORGÃO EMISSOR
    document.getElementById('orgemissor').addEventListener('click', function (){
        if(document.getElementById('orgemissor').value != '---'){
            focar('orgemissor');
        } else {
            desfocar('orgemissor');
        }
    })

    // FOCAR DATA DE IMPRESSÃO
    document.getElementById('data').addEventListener('click', function (){
      document.getElementById('data').addEventListener('keyup', function (){
          if(document.getElementById('data').value.length != 0){
              focar('data');
          } else {
              desfocar('data');
          }
      })
    })

    // FOCAR ESTADO EMISSOR
    document.getElementById('estEmissor').addEventListener('click', function (){
      if(document.getElementById('estEmissor').value != '---'){
          focar('estEmissor');
      } else {
          desfocar('estEmissor');
      }
    })

    // DESFOCAR CIDADE
    document.getElementById('cidade').addEventListener('click', function (){
      document.getElementById('cidade').addEventListener('keyup', function (){
        if(document.getElementById('cidade').value.length != 0){
            focar('cidade');
        } else {
            desfocar('cidade');
        }
      })
    })

    // DESFOCAR ESTADO
    document.getElementById('uf').addEventListener('click', function (){
      document.getElementById('uf').addEventListener('keyup', function (){
          if(document.getElementById('uf').value.length != 0){
              focar('uf');
          } else {
              desfocar('uf');
          }
      })
    })

    document.getElementById('bairro').addEventListener('click', function (){
      document.getElementById('bairro').addEventListener('keyup', function (){
          if(document.getElementById('bairro').value.length != 0){
              focar('bairro');
          } else {
              desfocar('bairro');
          }
      })
    })

    document.getElementById('numero').addEventListener('click', function (){
      document.getElementById('numero').addEventListener('keyup', function (){
          if(document.getElementById('numero').value.length != 0){
              focar('numero');
          } else {
              desfocar('numero');
          }
      })
    })

    document.getElementById('endereco').addEventListener('click', function (){
      document.getElementById('endereco').addEventListener('keyup', function (){
          if(document.getElementById('endereco').value.length != 0){
              focar('endereco');
          } else {
              desfocar('endereco');
          }
      })
    })

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

    $("#cep").focusout(function(){

      var cep = $("#cep").val();
      cep = cep.replace("-", "");
      cep = cep.replace(".", "");
      var url = "https://viacep.com.br/ws/" + cep + "/json/";

      $.ajax(
        {
          url : url,
          type : "get",
          dataType : "json",
          success : function(data){
            if(data.localidade == undefined){
              focarError('cep')
              $('#cidade').val('');
              desfocar('cidade');
              $('#uf').val('');
              desfocar('uf');
              $('#endereco').val('');
              desfocar('endereco');
              $('#bairro').val('');
              desfocar('bairro');
            } else {
              focar('cep');
              $('#cidade').val(data.localidade);
              focar('cidade');
              $('#uf').val(data.uf);
              focar('uf');
              $('#endereco').val(data.logradouro);
              focar('endereco');
              $('#bairro').val(data.bairro);
              focar('bairro');
            }
          },
          error : function(erro){
            focarError('cep');
            $('#cidade').val('');
            desfocar('cidade');
            $('#uf').val('');
            desfocar('uf');
            $('#endereco').val('');
            desfocar('endereco');
            $('#bairro').val('');
            desfocar('bairro');
          },
        }
      )
    })
  })
