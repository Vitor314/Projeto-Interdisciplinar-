<?php
verificaUsuário();
$produtos = listaProdutos($conexao);
?>
<table class="table table-striped table bordered">
	<?php
	foreach ($produtos as $produto) :
		?>
		<tr>
			<td><?= $produto['nome']?></td>
			<td><?= $produto['preço']?></td>
			<td><?= substr($produto['descrição'], 0, 40)?></td>
			<td><?= $produto['categoria_id'] ?></td>
			<td><a class="btn btn-primary"  href="produto_altera_formulário.php?id=<?=$produto['id']?>">alterar</a>
				<td>
					<form action="remove_produto.php" method="post">
						<input type="hidden" name="id" value="<?=$produto['id']?>">

				</td>

		</tr>