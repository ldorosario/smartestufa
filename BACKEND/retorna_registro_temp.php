<?php

include 'conexao.php'; //inclui as váriaveis do  scritp conexao.php nesse script

//seleciona a coluna registro_temp da tabela registro_estufa limitando para 1 tupla ordenando pelo coluna id decrescente
$sql = "SELECT registro_temp FROM registro_estufa LIMIT 1 ORDER BY id DESC";
$resultado = mysqli_query($conn, $sql);


if(mysqli_num_rows($resultado) > 0)//se o retorno da query for maior que 0
{
  while($row  = mysqli_fetch_assoc($resultado))
  {
    $registro_temp = $row['registro_temp'];
    echo $registro_temp."°C";
  }
}
else// se a query retornar 0
{
  echo "00.0°C"
}


