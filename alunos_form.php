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
	//testando se foi inicializado a variavel
	$nome = $_POST['nome'] ?? null;
	$email = $_POST['email'] ?? null;
	$endereco = $_POST['endereco'] ?? null;
	
	$sql = "insert into aluno
			(nome, email, endereco)
			values
			('$nome','$email','$endereco')
			";
	
	mysqli_query($link, $sql);
	
	$id = mysqli_insert_id($link);
	
	
	
}
?>

<form  class="form-horizontal" method="POST">
  <div class="form-group">
    <label for="nome" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-5">
      <input name="nome" type="text" class="form-control" id="nome" placeholder="nome">
    </div>
  </div>
<div></div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-5">
      <input name="email" type="text" class="form-control" id="email" placeholder="email">
    </div>
  </div>
  <div class="form-group">
    <label for="endereco" class="col-sm-2 control-label">Endereço</label>
    <div class="col-sm-5">
      <input name="endereco" type="text" class="form-control" id="endereco" placeholder="endereco">
    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button name="salvar" type="submit" class="btn btn-default">Salvar</button>
    </div>
  </div>
</form>


<?php 
include ('footer.php');
?>
   
   
   
   