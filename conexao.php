<?php
// Criando constantes de conexao para conectar com banco de dados 
define ('HOST', '127.0.0.1'); //IP_do_Host local onde esta o MySQL.
define ('USUARIO' , 'root'); // Usuário do Banco de dados.
define ('SENHA' , ''); // armazena a senha do Banco de Dados.
define ('DB', 'rpg'); //Data Base <nome da tabela no banco de dados>. Local onde armazena o Banco de Dados.


// criando variavel de conexao, na ordem das constantes (or die) "mensagem de erro caso nao tenha conexao".
$conexao = mysqli_connect (HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');
