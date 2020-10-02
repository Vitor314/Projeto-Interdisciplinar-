<?php
include 'conecta.php';
echo "<br><hr>";

$consulta = "SELECT MAX(nf) as ultima FROM nota_fiscal";
$consulta = $conexao->query($consulta);
$linha = $consulta->fetch_assoc();
$ultimo = $linha['ultima'];
echo "Nota Fiscal: ".$ultimo ."<br>"; 
echo "<hr>";

session_start();
$_SESSION['nf'] = $ultimo;
?>

<!DOCTYPE html>
<html>
<?php
include 'cabeçalho.php'
?>

<section>
	<div class="container">
	<div class="card">
	<div class="card-header">
	<div class="card-header">
	<h1>Insira um produto</h1>	
</div>
<form class="centro" action="insere_item.php?nf='<?php echo $ultimo; ?>'" method="post">
	<div class="form-group">
		<label for="codigo-nota">NF</label>
		<input class="form-control" type="text" name="nf" value="<?php echo $ultimo;?>">
			</div>
			<div class="form-group">
				<label for="rótulo-produto">PRODUTOS</label>
				<select class="form-control" name="produto_opcao" id="produto_opcao">
					<?php

					$consulta = "SELECT *FROM produtos";
					foreach ($conexao ->query($consulta) as $linha) {
						?>

						<option value="<?php echo $linha['id'];?>"><?php echo $linha['nome'];?></option>
						<?php 
					}
		?>
	</select>
</div>
<div class="form-group">
	<label for="qtd_produto">Qtde:</label>
	<input class="form-control"   type="text" name="qtde">


		<hr>
		<input type="submit" value="ADICIONAR">
	</form>

</body>
</html>