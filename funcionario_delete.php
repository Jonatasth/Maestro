<?php 	
include ('valida_autenticacao.php');
include ('header.php');
include('menu.php');

	$id=$_GET['id'] ?? false;
	if (!$id){
		echo 'Informe o ID';
		exit();
	}
if (isset($_POST['excluir'])){
	$sql="delete from 
		  funcionario where
			id=".$_GET['id'];
	include ('conexao.php');
	$result = mysqli_query($link,$sql);
	if ($result === false){
		echo mysqli.error($link);
	}else{
		echo 'sucesso';
	}
}
?>
<?php
include ('footer.php');
?>
<form method="post">
<input type="submit" name="exlcuir" value="sim"/>
<a href="funcionario_lista.php">Não</a>
</form>