<?php
	//conexão com o banco de dados
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "fon";
	
	@$conn = new mysqli($host,$user,$pass,$db);
	
	//includes das páginas
	switch(@$_REQUEST["page"]){
		//nomev
		case "cad-nome":
			include("nome/cadastrar-nome.php");
		break;
		case "lis-nome":
			include("nome/listar-nome.php");
		break;
		case "edi-nome":
			include("nome/editar-nome.php");
		break;
		case "sal-nome":
			include("nome/salvar-nome.php");
		break;
            
		//origem
		case "cad-origem":
			include("origem/cadastrar-origem.php");
		break;
		case "lis-origem":
			include("origem/listar-origem.php");
		break;
		case "edi-origem":
			include("origem/editar-origem.php");
		break;
		case "sal-origem":
			include("origem/salvar-origem.php");
		break;
            
            //destino
		case "cad-destino":
			include("destino/cadastrar-destino.php");
		break;
		case "lis-destino":
			include("destino/listar-destino.php");
		break;
		case "edi-destino":
			include("destino/editar-destino.php");
		break;
		case "sal-destino":
			include("destino/salvar-destino.php");
		break;
            
		//dados
		case "cad-dados":
			include("dados/cadastrar-dados.php");
		break;
		case "lis-dados":
			include("dados/listar-dados.php");
		break;
		case "edi-dados":
			include("dados/editar-dados.php");
		break;
		case "sal-dados":
			include("dados/salvar-dados.php");
		break;
		default:
			include("dashboard.php");
	}

?>










