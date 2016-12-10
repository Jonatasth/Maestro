<?php
include ('valida_autenticacao.php');
include ('header.php');
include('menu.php');
include ('conexao.php');
?>

<?php 
function convertSpace($string){
	return str_replace('_','*',$string);
}

$string ='Pedro_programa_site_php';

$result = filter_var( $string, FILTER_CALLBACK, array('options' => 'convertSpace'));
echo $result;


?>

<?php
include ('footer.php');
?>