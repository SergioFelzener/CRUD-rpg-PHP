<?php

include 'conexao.php';
$sql = "SELECT * FROM `armas`";
$busca = mysqli_query($conexao, $sql);

$cont = 0;

while ($array = mysqli_fetch_array($busca)) {
  $tabela[$cont]['id_armas']    = $array["id_armas"];
  $tabela[$cont]['nome_arma']    = $array["nome_arma"];

  $cont = $cont + 1;
}

echo json_encode($tabela);
?>