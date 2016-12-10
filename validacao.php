<?php
include ('valida_autenticacao.php');
include ('header.php');
include('menu.php');
include ('conexao.php');
?>
	<form method="POST">
		<input type="text" name="email"/>
		<input type="submit" value="VALIDAR"/>
	</form>
<?php 
if (!filter_has_var(INPUT_POST,"email")){
	echo 'Entrada não existe';
	exit();
}else{
	$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
	var_dump ($email);
	
	
	
	
if(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
	echo 'E-mail validado';
}else{
	echo 'Informe novamente';
}
}
?>	
<?php 
include ('footer.php');
?>