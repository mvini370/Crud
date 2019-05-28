<?php
	$nome = @$_REQUEST["nome_origem"];
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO origem (nome_origem) VALUES ('{$nome}')";
			
			$res = $conn->query($sql);
			

			

			
			if($res==true){
				print "<br><div class='alert alert-success'>Cadastro com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar!</div>";
			}
			
		break;
		case "editar":
			$sql = "UPDATE origem
					SET nome_origem='{$nome}'
					WHERE id_origem=".$_REQUEST["id_origem"];
					
			$res = $conn->query($sql);
			
			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='index.php?page=lis-origem';</script>";
			}else{
				print "<script>alert('Deu erro');</script>";
				print "<script>location.href='index.php?page=lis-origem';</script>";
			}
            break;
		case "excluir":
			$sql = "DELETE FROM origem WHERE id_origem=".$_REQUEST["id_origem"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='index.php?page=lis-origem';</script>";
			}else{
				print "<script>alert('Deu erro');</script>";
				print "<script>location.href='index.php?page=lis-origem';</script>";
			}
		break;
	
    }
?>
