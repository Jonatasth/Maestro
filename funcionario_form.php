<?php
include ('valida_autenticacao.php');
include ('header.php');
include('menu.php');
include ('conexao.php');
?>
<?php
//realizamos um teste utlizando o metodo isset para verificar
//se a variavel foi inicializa
if (isset($_POST['salvar'])){
	
	//INSERINDO
	if (!isset($_GET['id'])){
	//testando se foi inicializado a variavel
	$funcionario = $_POST['funcionario'] ?? null;
	$funcao = $_POST['funcao'] ?? null;
	$ativo = $_POST['ativo'] ?? null;
	$id_usuario = $_POST['id_usuario'] ?? null;
	
	
	$sql = "insert into funcionario
			(funcionario, funcao, ativo, id_usuario)
			values
			('$funcionario','$funcao','$ativo','$id_usuario')
			";
	if(mysqli_query($link, $sql)=== false){
		echo mysqli_error($link);
	}
		
	$id = mysqli_insert_id($link);
	
	}else {
		$id = $_POST['id'] ?? null;
		$id_usuario = $_POST['id_usuario'] ?? null;
		$funcionario = $_POST['funcionario'] ?? null;
		$funcao = $_POST['funcao'] ?? null;
		$ativo = $_POST['ativo'] ?? null;
		
		echo $sql = "UPDATE funcionario set
		funcionario='$funcionario',
		funcao='$funcao'
		ativo='$ativo'
		id_usuario='$id_usuario'
		where id = '$id'";
		
		mysqli_query($link,$sql);
	}
	
	
}else if (isset($_GET['id'])){
	//EDITANDO
	$sql = "select * from funcionario where id={$_GET['id']}";
	$result = mysqli_query($link, $sql, MYSQLI_USE_RESULT);
	$funcionario = mysqli_fetch_array($result);
}





//INSERINDO
//$_GET['id'] === false;

//EDITANDO
//$_GET['id'] === 1;


///isset($_POST['salvar']){

	//INSERINDO
////	$_GET['id'] === false;
	
	//EDITANDO
//	$_GET['id'] === 1;
	
//}



?>

<form  class="form-horizontal" method="POST">
  <div class="form-group">
    <label for="funcionario" class="col-sm-2 control-label">Funcionario</label>
    <div class="col-sm-5">
      <input name="funcionario" type="text" class="form-control" id="funcionario" placeholder="funcionario" value="<?php echo isset($dados['funcionario']) ? $funcionario['funcionario'] : '';?>">
    </div>
  </div>
<div></div>
  <div class="form-group">
    <label for="funcao" class="col-sm-2 control-label">Funcao</label>
    <div class="col-sm-5">
      <input name="funcao" type="text" class="form-control" id="funcao" placeholder="funcao" value="<?php echo  $funcionario['funcao'] ?? '';?>">
    </div>
  </div>
  <div class="form-group">
    <label for="ativo" class="col-sm-2 control-label">Ativo?</label>
    <div class="col-sm-5">
      <input name="ativo" type="text" class="form-control" id="ativo" placeholder="ativo" value="<?php echo  $funcionario['ativo'] ?? '';?>">
    </div>
    </div>
      <div class="form-group">
    <label for="id_usuario" class="col-sm-2 control-label">ID_Usuario</label>
    <div class="col-sm-5">
      <input name="id_usuario" type="text" class="form-control" id="id_usuario" placeholder="id_usuario" value="<?php echo  $funcionario['id'] ?? '';?>">
    </div>
  </div>
<div></div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button name="salvar" type="submit" class="btn btn-default">Salvar</button>
    </div>
  </div>
</form>


<?php 
include ('footer.php');
?>
   
   
   
   