<?php
	$sql = "SELECT * FROM destino WHERE id_destino = ".$_REQUEST["id_destino"];
	
	$res = $conn->query($sql);
	
	$row = $res->fetch_assoc();
?>

<h1 class="display-3 text-center mt-5"><i class="fas fa-plane-arrival text-info"></i>Cadastrar Destino</h1>
<form action="index.php?page=sal-destino&acao=cadastrar" method="POST">
<input type="hidden" name="acao" value="editar">
<input type="hidden" name="id_destino" value="<?php print $_REQUEST["id_destino"]; ?>">
	<div class="form-group mt-5">
		<label>Nome do Destino</label>
		<input type="text" name="nome_destino" class="form-control" value="<?php print $row["nome_destino"]; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-info col-12">Enviar</button>
	</div>
</form>