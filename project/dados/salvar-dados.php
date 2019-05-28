<?php

		
		@$empresa           = $_REQUEST['empresa_voo'];
		@$origem            = $_REQUEST['origem_voo'];
		@$destino           = $_REQUEST['destino_voo'];
		@$ida               = $_REQUEST['ida_voo'];
		@$volta             = $_REQUEST['volta_voo'];
		@$duracao           = $_REQUEST['duracao_voo'];
		@$preco             = $_REQUEST['preco_voo'];

    
	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO dados (empresa_id_empresa, origem_id_origem, destino_id_destino, data_ida, data_volta, duracao_voo, preco_voo) VALUES ('$empresa', '$origem', '$destino', '$ida', '$volta', '$duracao', '$preco')";
			$res = $conn->query($sql);
			if ($res==true) {
				print "<br> <div class='alert alert-success'>Cadastro com sucesso!</div>";
			} else{
				print "<br> <div class='alert alert-danger'>Não foi possível cadastrar!</div>";
			}
			break;
		
		break;
            case "editar":
			$sql = "UPDATE dados
					SET empresa_id_empresa, origem_id_origem, destino_id_destino, data_ida, data_volta, duracao_voo, preco_voo) VALUES ('$empresa', '$origem', '$destino', '$ida', '$volta', '$duracao', '$preco')
					WHERE id_dados =" .$_REQUEST["id_dados"];
					
					
		
					$res = $conn->query($sql);
			
			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='index.php?page=lis-dados';</script>";
			}else{
				print "<script>alert('Deu erro');</script>";
				print "<script>location.href='index.php?page=lis-dados';</script>";
			}
            break;
		case "excluir":
			$sql = "DELETE FROM dados WHERE id_dados=".$_REQUEST["id_dados"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='index.php?page=lis-dados';</script>";
			}else{
				print "<script>alert('Deu erro');</script>";
				print "<script>location.href='index.php?page=lis-dados';</script>";
			}
		break;
	
    
	}
?>