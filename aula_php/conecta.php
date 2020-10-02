<?php 

$host = "localhost";
$usuário = "root";
$senha = "";
$banco = "aula_php";

$conexao = new MySQLi("$host","$usuário","$senha","$banco");

if ($conexao -> connect_error) {
	echo "Erro de Conexão!";
}
else {
	echo "CONECTADO AO BANCO DE DADOS: aula_php <br>";
}


 ?>