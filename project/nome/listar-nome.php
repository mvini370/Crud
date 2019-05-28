<h1 class="text-info">Consultar Empresa</h1>
<?php
	$sql = "SELECT * FROM empresa";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	
	
	if($qtd > 0){
		print "Econtrou <b>$qtd</b> Resultados(s)";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome da Empresa</th>";
		print "<th>Açãoes</th>";
		print "</tr>";
		$count = 1;
	while($row = $res->fetch_assoc()){
		$id_empresa = $row['id_empresa'];
		$nome_empresa = $row['nome_empresa'];
		
		print "<tr>";	
		print "<td>". $count++ ."</td>";
		print "<td>". $nome_empresa ."</td>";
		print "<td>
                
					<button onclick=\"location.href='index.php?page=edi-nome&id_empresa=".$row["id_empresa"]."';\"class='btn btn-light'><i class=\"far fa-edit text-success mb-2\"></i></button>
					
					
					<a onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='index.php?page=sal-nome&acao=excluir&id_empresa=".$row["id_empresa"]."';}else{false;}\"class='btn btn-light'><i class='far fa-trash-alt text-danger' ></i></a>
				</td>";
			print '</tr>';
		}
		print '</table>';
	}else{
		print "Não Econtrou <b>$qtd</b> Resultados";
	}
	
    

?>

<form action="index.php?page=cad-origem" method="POST">
<input type="hidden"  value="Next">
<div class="form-group">
		<button href="index.php?page=cad-origem" type="submit" class="btn btn-info mt-1">Next</button>
	</div>
</form>