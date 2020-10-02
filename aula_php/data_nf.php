<?php
include 'conecta.php';
?>

<!DOCTYPE html>
<html>
<?php
include 'cabeçalho.php';
?>
<section>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<div class="card-header">
					<h1>Data da Venda</h1>
				</div>
				<form class="centro" action="gera_nf.php" method="post">
				<div class="form-group">
				<label for="exemplo-data">Data</label>
				<input class="form-control"  type="date" name="data">
				</div>
				<div class="form-group">
				<input class="btn btn-primary btn-lg" type="submit" value="CONTINUAR">
				</div>
				</form>
				</div>
				</div>
				</div>
				</section>	

				


</body>
</html>