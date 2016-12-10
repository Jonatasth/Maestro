<?php
include ('valida_autenticacao.php');
include ('header.php');
include('menu.php');
include ('conexao.php');
?>

<?php 
$int = 'as';
if (!filter_var($int, FILTER_VALIDATE_INT)){
	echo 'Não validou! ';	
}else{
	echo 'Número válido! '; 
}

?>

<?php
include ('footer.php');
?>