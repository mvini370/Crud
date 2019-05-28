<?php
	$sql = "SELECT * FROM empresa WHERE id_empresa = ".$_REQUEST["id_empresa"];
	
	$res = $conn->query($sql);
	
	$row = $res->fetch_assoc();
?>
<h1><h1 class="display-3 text-center mt-5"><i class="fab fa-avianex text-info"></i>Editar Autor</h1>
<form action="index.php?page=sal-nome&acao=cadastrar" method="POST">
<input type="hidden" name="acao" value="editar">
 <input type="hidden" name="id_empresa" value="<?php print $_REQUEST["id_empresa"]; ?>">
	<div class="form-group mt-5">
		<label>Nome da Empresa</label>
		<input type="text" name="nome_empresa" class="form-control"  value="<?php print $row["nome_empresa"]; ?>">
	</div>
	<div class="form-group text-center">
		<button type="submit" class="btn btn-info col-12">Enviar</button>
	</div>
</form>