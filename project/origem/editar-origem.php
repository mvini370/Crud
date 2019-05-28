<?php
	$sql = "SELECT * FROM origem WHERE id_origem = ".$_REQUEST["id_origem"];
	
	$res = $conn->query($sql);
	
	$row = $res->fetch_assoc();
?>
<h1 class="display-3 text-center mt-5"><i class="fas fa-plane-departure text-info"></i>Cadastrar Origem</h1>
<form action="index.php?page=sal-origem&acao=cadastrar" method="POST">
<input type="hidden" name="acao" value="editar">
 <input type="hidden" name="id_origem" value="<?php print $_REQUEST["id_origem"]; ?>">
	<div class="form-group mt-5">
		<label>Nome da Origem</label>
		<input type="text" name="nome_origem" class="form-control" value="<?php print $_REQUEST["id_origem"]; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-info col-12">Enviar</button>
	</div>
</form>