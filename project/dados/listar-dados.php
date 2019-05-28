<h1 class="text-info">Consultar Viagens</h1>

<?php 
	    $sql = "SELECT a.*, l.*, c.*, b.* FROM dados as l
			INNER JOIN origem AS a
			ON l.origem_id_origem = a.id_origem
            INNER JOIN destino AS c 
			ON l.destino_id_destino = c.id_destino    
            INNER JOIN empresa AS b 
			ON l.empresa_id_empresa = b.id_empresa";


		
				
	$res = $conn -> query($sql) or die ($conn -> error);
	$qtd = $res -> num_rows;
	if ($qtd > 0) {
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>
					<tr>
						<th>#</th>
						<th>Empresa</th>
						<th>Origem</th>
						<th>Destino</th>
						<th>Ida</th>
						<th>Volta</th>
						<th>Duração</th>
						<th>Preço</th>
						<th>Açãoes</th>												
					     </tr>";
		$count = 1;				 
		while ($row = $res -> fetch_assoc()) {
			@$id_dados              = $row['id_dados'];
            @$empresa_voo           = $row['nome_empresa'];
			@$origem_Voo            = $row['nome_origem'];
			@$destino_Voo           = $row['nome_destino'];
			@$ida_voo               = $row['data_ida'];
			@$volta_voo             = $row['data_volta'];
			@$duracao_voo           = $row['duracao_voo'];
			@$preco_voo             = $row['preco_voo'];
            
			
            
			print '<tr>';
				print'<td>'.$count ++     . '</td>';
                print'<td>'.$empresa_voo . '</td>';
                print'<td>'.$origem_Voo   .  '</td>';
				print'<td>'.$destino_Voo  . '</td>';
				print'<td>'.$ida_voo      . '</td>';
				print'<td>'.$volta_voo    . '</td>';
				print'<td>'.$duracao_voo  . ' <b>HR</b></td>';
				print'<td><b>R$:</b> '    .$preco_voo   . '</td>';
			print "<td>
					<button onclick=\"location.href='index.php?page=edi-dados&id_dados=".$row["id_dados"]."';\" class='btn btn-success'>Editar</button>
					
					<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='index.php?page=sal-dados&acao=excluir&id_dados=".$row["id_dados"]."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
					
				</td>";
			print '</tr>';
		}
		
		print '</table>';

	} else {
		print "<p>Não encontrou resultados</p>";
	}
?>