

//inicial a variavel local com valor = 0
localStorage.setItem("conexao", 0);



//verifica variavel local 'conexao' a cada 3,5 segundos
setInterval(function() {
  if(localStorage.conexao == 0) // se for 0 simula conexão completa
{ 
  Sinc_temp();
  Sinc_umid();
  document.getElementById("snackbar").innerHTML = "Monitorando ...<div class='spinner-grow text-success spinner-grow-sm'></div>"

//chama 1 vez o toast depois de 1,5 segundos.
setTimeout(function() {
  Chama_snackbar();
  
}, 1500);
}
if(localStorage.conexao == 1) //se for 1 simula perda de conexão
{
  document.getElementById("snackbar").innerHTML = "Perda de conexão ...<div class='spinner-grow text-danger spinner-grow-sm'></div>"

  document.getElementById("umidade").innerHTML = "Perda de conexão ...<div class='spinner-grow text-danger spinner-grow'></div>"
  document.getElementById("temperatura").innerHTML = "Perda de conexão ...<div class='spinner-grow text-danger spinner-grow'></div>"
}
}, 3500);



//carrega o script retorna_registro_temp.php utilzando ajax e retorna o valor para a DIV identificada(id) como temperatura
  function Sinc_temp()
  {
    $.ajax({
      url:"/BACKEND/retorna_registro_temp.php",
      type:"POST",
      data:{},
      success: function(retorno_temp) {
        document.getElementById("temperatura").innerHTML = retorno_temp;
      }
    })
  }
//mesmo processo que Sinc_temp()
  function Sinc_umid()
  {
    $.ajax({
      url:"/BACKEND/retorna_registro_umid.php",
      type:"POST",
      data:{},
      success: function(retorno_umid) {
        document.getElementById("umidade").innerHTML = retorno_umid;
      }
    })
  }
//torna a id chamada snackbar visivel
  function Chama_snackbar() {
    
    var x = document.getElementById("snackbar");
    x.className = "show";
  

  } 

 
  //define o valor da variável local para 0
  function Conexao(){
    localStorage.conexao = 0;
  }
    //define o valor da variável local para 1
  function Perda_Conexao(){
    localStorage.conexao = 1;
  }