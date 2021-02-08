    addEventListener('load', function carregarMask(){
      document.getElementById('celular').addEventListener('click', function clickCell(){
        addEventListener('keydown', function maskDown(){
          if(document.getElementById('celular').value.length == 0){
            document.getElementById('celular').value += "(";
          }
        })
      })
      
      document.getElementById('cpf').addEventListener('paste', function limpaCola(){
          setTimeout(function limpaCampo() {
            document.getElementById('cpf').value = "";
          }, 100);
          
      })

      document.getElementById('celular').addEventListener('paste', function limpaCola(){
          setTimeout(function limpaCampo() {
            document.getElementById('celular').value = "";
          }, 100);
          
        })
        
      addEventListener('keyup', function mask(){

        if(document.getElementById('cpf').value.length == 3 || document.getElementById('cpf').value.length == 7){
          document.getElementById('cpf').value += '.';
        }
        if(document.getElementById('cpf').value.length == 11){
          document.getElementById('cpf').value += '-';
        }
  
        if(document.getElementById('celular').value.length == 3){
          document.getElementById('celular').value += ") ";
        }

        if(document.getElementById('celular').value.length == 10){
          document.getElementById('celular').value += '-';
        }
      })
    })