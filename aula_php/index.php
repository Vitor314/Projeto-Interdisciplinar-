<!DOCTYPE html>
<html>
<?php
include 'cabeçalho.php';
?>
<head>
	<title></title>
</head>
<body>
	<h1>INICIAR NOVA VENDA</h1>
	<form action="data_nf.php" method="post">

		<p>Ao clicar em INICIAR VENDA, os sistema irá gerar uma nova nota fiscal na tabela nota_fiscal sem o valor total.</p>
		<p>Na próxima tela será solicitada a data da NF</p>
		<p>O valor total será atualizado após a inserção dos itens de nota fiscal</p>
		<hr>
		<input type="submit" value="INICIAR VENDA">
	</form>
	<h1>OUTRAS OPÇÕES</h1>
	<p><a href="ver_nf.php">VER NOTAS EMITIDAS</a></p>
	<p><a href="">VER PRODUTOS</a></p>
	<p><a href="cadastra_produtoform.php">CADASTRAR PRODUTOS</a></p>
</body>
</html>
