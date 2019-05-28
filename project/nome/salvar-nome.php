<?php
	$nome = @$_REQUEST["nome_empresa"];
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			@$sql = "INSERT INTO empresa (nome_empresa) VALUES ('{$nome}')";
			
			$res = $conn->query($sql);
			
			
			if($res==true){
				print "<br><div class='alert alert-success'>Cadastro com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar!</div>";
			}
			
		break;
		case "editar":
			$sql = "UPDATE empresa
					SET nome_empresa='{$nome}'
					WHERE id_empresa=".$_REQUEST["id_empresa"];
					
			$res = $conn->query($sql);
			
			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='index.php?page=lis-nome';</script>";
			}else{
				print "<script>alert('Deu erro');</script>";
				print "<script>location.href='index.php?page=lis-nome';</script>";
			}
            break;
		case "excluir":
			$sql = "DELETE FROM empresa WHERE id_empresa=".$_REQUEST["id_empresa"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='index.php?page=lis-nome';</script>";
			}else{
				print "<script>alert('Deu erro');</script>";
				print "<script>location.href='index.php?page=lis-nome';</script>";
			}
		break;
	
    }
	
?>
