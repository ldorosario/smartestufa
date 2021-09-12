<?php

// include 'conexao.php'; //inclui as váriaveis do  scritp conexao.php nesse script

// //seleciona a coluna registro_umid da tabela registro_estufa limitando para 1 tupla ordenando pelo coluna id decrescente
// $sql = "SELECT registro_umid FROM registro_estufa  ORDER BY id DESC LIMIT 1";
// $resultado = mysqli_query($conn, $sql);


// if(mysqli_num_rows($resultado) > 0)//se o retorno da query for maior que 0
// {
//   while($row  = mysqli_fetch_assoc($resultado))
//   {
//     $registro_umid = $row['registro_umid'];
//     echo $registro_umid." %";
//   }
// }
// else// se a query retornar 0
// {
//   echo "0 %";
// }


// parte acima somente necessária se houver um servidor apache+mysql(XAMPP/LAMPP) disponivel.
//para melhor visualização da idéia, utilizo o gerador de numero aleatórios do php (mt_rand) para simular resultados



// gera numero aleatórios de 12 a 100, simulando o sensor de Umidade
echo (mt_rand(12,100)) . "% / <font size='5px'>70% max</font>";
