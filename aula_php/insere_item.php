<!DOCTYPE html>
<html>
<?php
include 'cabeçalho.php';
?>
	<?php
	include 'conecta.php';
	echo "<br>";

	session_start();
	$nf = $_SESSION['nf'];
	echo "<br>Numero da NF: " . $nf . "</b><br>";
	$id_prod = $_POST['produto_opcao'];
	$qtde_prod = $_POST['qtde'];



	$consulta = "SELECT preco, nome FROM produtos WHERE id='$id_prod'";
	$consulta = $conexao->query($consulta);
	$linha = $consulta-> fetch_assoc();
	print_r($linha);
	$preco = $linha['preco'];
	$nome = $linha['nome'];

	


	$subtotal = $preco * $qtde_prod;



	?>

	<section>
		
		<div class="container">
			<div class="card">
				<div class="card-header">
					<div class="card-header">
						<h1>Confirmar Item</h1>
					</div>
					<form class="form-group" action="insere_item_nf.php" method="POST">
    <p>
        ID PRODUTO: <input type="text" name="produto_opcao" value="<?php echo $id_prod; ?>" readonly="readonly">
    </p>
    <p>
        PRODUTO: <input type="text" name="nome_prod" value="<?php echo $nome; ?>" readonly="readonly">
    </p>
    <p>
        VALOR UNIT: <input type="text" name="valor_unit" value="<?php echo $preco; ?>" readonly="readonly">
    </p>
    <p>
        QTDE: <input type="text" name="qtde" value="<?php echo $qtde_prod; ?>" readonly="readonly">
    </p>
    <p>
        SUBTOTAL: <input type="text" name="subtotal" value="<?php echo $subtotal; ?>" readonly="readonly">
    </p>

    <input type="submit" value="ADICIONAR PRODUTO">


</form>
</div>
</div>
</div>
</section>

		



</body>
</html>