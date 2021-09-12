<?php

// include 'conexao.php'; //inclui as váriaveis do  scritp conexao.php nesse script

// //seleciona a coluna registro_temp da tabela registro_estufa limitando para 1 tupla ordenando pelo coluna id decrescente
// $sql = "SELECT registro_temp FROM registro_estufa  ORDER BY id DESC LIMIT 1";
// $resultado = mysqli_query($conn, $sql);


// if(mysqli_num_rows($resultado) > 0)//se o retorno da query for maior que 0
// {
//   while($row  = mysqli_fetch_assoc($resultado))
//   {
//     $registro_temp = $row['registro_temp'];
//     echo $registro_temp." °C";
//   }
// }
// else// se a query retornar 0
// {
//   echo "0 °C";
// }



// parte acima somente necessária se houver um servidor apache+mysql(XAMPP/LAMPP) disponivel.
//para melhor visualização da idéia, utilizo o gerador de numero aleatórios do php (mt_rand) para simular resultados


// gera numero aleatórios de 12 a 55, simulando o sensor de temperatura
echo (mt_rand(0,55)) . "°C / <font size='5px'>15°C min</font>";
