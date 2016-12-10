<?php
include ('conexao.php');

//receber o id
$id = $_GET['id'] ?? null;
$aluno = array();

if ($id != null){//faz a edição

	if (isset($_POST['salvar'])){
		$nome = $_POST['nome'] ?? null;
		$email = $_POST['email'] ?? null;
		$endereco = $_POST['endereco'] ?? null;
		
		echo $sql = "UPDATE alunos set 
				nome='$nome',
				email='$email',
				endereco='$endereco'
				where id = '$id'";				
		mysqli_query($link,$sql);

	}else{//buscar os dados, consulta no banco
	$sql = "select * from aluno where id=$id";
	$result = mysqli_query($link, $sql, MYSQLI_USE_RESULT);
	$aluno = mysqli_fetch_array($result);
	//print_r($aluno);
	}

}else {
	echo "Informe um Registro";
	exit();
}
?>

<form class="form-horizontal" method="POST">
	<div class="form-group">
		<label for="nome" class="col-sm-2 control-label">Nome</label>
		<div class="col-sm-5">
		<input name="nome" type="text" value="<?php echo $aluno['nome'] ?? '';?>" class="form-control" id="nome" placeholder="nome" >
	</div>
		</div>
	<div></div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-5">
		<input name="email" type="text" value="<?php echo $aluno['email'] ?? '';?>" class="form-control" id="email" placeholder="email">
	</div>
		</div>
	<div class="form-group">
		<label for="endereco" class="col-sm-2 control-label">Endereço</label>
		<div class="col-sm-5">
		<input name="endereco" type="text" value="<?php echo $aluno['endereco'] ?? '';?>" class="form-control" id="endereco" class="form-control" id="endereco" placeholder="endereco">
	</div>
		</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<button name="salvar" type="submit" class="btn btn-default">Salvar</button>
	</div>
		</div>
</form>
