<div class="col-6 mx-auto">
    <h1 class="text-center mt-5 mb-5"><i class="fas fa-user text-info"></i>Cadastrar Dados</h1>

	<form action="index.php?page=sal-dados&acao=cadastrar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">

        <!-- Tentativa de Mostrar os nome a partir de um dropdown menu -->
        <div class="form-group">
            <label>Nome da Empresa</label>
           <?php
           // Teste de criação de menu Dropdown
            $query_empresa = "SELECT id_empresa, nome_empresa  FROM empresa";
            $result_empresa = mysqli_query($conn, $query_empresa);
            $opt = "<select class='form-control' name='empresa_voo'>";
                while ($row_empresa = mysqli_fetch_assoc($result_empresa)){
                    @$opt .= "<option value = '{$row_empresa['id_empresa']}'>{$row_empresa['nome_empresa']}</option>";
                }
            $opt .= "</select>";
           echo $opt;
            ?>
        </div>
        
        <div class="form-group">
            <label>Nome da origem</label>
           <?php
           // Teste de criação de menu Dropdown
            $query_origem = "SELECT id_origem, nome_origem  FROM origem";
            $result_origem = mysqli_query($conn, $query_origem);
            $opt = "<select class='form-control' name='origem_voo'>";
                while ($row_origem = mysqli_fetch_assoc($result_origem)){
                    @$opt .= "<option value = '{$row_origem['id_origem']}'>{$row_origem['nome_origem']}</option>";
                }
            $opt .= "</select>";
           echo $opt;
            ?>
        </div>
        
        <div class="form-group">
            <label>Nome do Destino</label>
           <?php
           // Teste de criação de menu Dropdown
            $query_destino = "SELECT id_destino, nome_destino  FROM destino";
            $result_destino = mysqli_query($conn, $query_destino);
            $opt = "<select class='form-control' name='destino_voo'>";
                while ($row_destino = mysqli_fetch_assoc($result_destino)){
                    @$opt .= "<option value = '{$row_destino['id_destino']}'>{$row_destino['nome_destino']}</option>";
                }
            $opt .= "</select>";
           echo $opt;
            ?>
        </div>
		
		<div class="form-group">
			<label>Ida</label>
			<input type="date" name="ida_voo" class="form-control">
		</div>

		<div class="form-group">
			<label>Volta</label>
			<input type="date" name="volta_voo" class="form-control">
		</div>

		<div class="form-group">
			<label>Duração</label>
			<input type="text" name="duracao_voo" class="form-control">
		</div>

		<div class="form-group">
			<label>Preço</label>
			<input type="text" name="preco_voo" class="form-control">
		</div>

		<div class="form-group">
			<button class="btn btn-info" type="submit">Cadastrar</button>
		</div>
	</form>
</div>