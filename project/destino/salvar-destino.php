<?php
	$nome = @$_REQUEST["nome_destino"];
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO destino (nome_destino) VALUES ('{$nome}')";
			
			$res = $conn->query($sql);
			

			

			
			if($res==true){
				print "<br><div class='alert alert-success'>Cadastro com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar!</div>";
			}
			
		break;
		case "editar":
			$sql = "UPDATE destino
					SET nome_destino='{$nome}'
					WHERE id_destino=".$_REQUEST["id_destino"];
					
			$res = $conn->query($sql);
			
			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='index.php?page=lis-destino';</script>";
			}else{
				print "<script>alert('Deu erro');</script>";
				print "<script>location.href='index.php?page=lis-destino';</script>";
			}
            break;
		case "excluir":
			$sql = "DELETE FROM destino WHERE id_destino=".$_REQUEST["id_destino"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='index.php?page=lis-destino';</script>";
			}else{
				print "<script>alert('Deu erro');</script>";
				print "<script>location.href='index.php?page=lis-destino';</script>";
			}
		break;
	
    }
?>
