<?php
include ('valida_autenticacao.php');
include ('header.php');
include ('menu.php');
include ('conexao.php');
?>

<?php
function convertcep($cep) {
	// 95000-000 // nnnnnnnnnn
	
	// remover '-'
	echo $cep = str_replace ( '-', '', $cep );
	// 95000000 //nnnnnnn

	// filter_var (FILTER_VALIDATE_INT) ///false
	$filter = array (
			'cep' => array (
					'filter' => FILTER_VALIDATE_INT,
					'options' => array (
							'min_range' => 00000000,
							'max_range' => 99999999 
					) 
			) 
	);
	
	$result = filter_var_array( array('cep'=> $cep), $filter);
	if (!$result) {
		return false;
	
	} else {
		return $result['cep'];
	}
		
}



$cep = $_POST['cep'] ?? false;

$result = filter_var($cep, FILTER_CALLBACK, array('options'=>'convertcep'));
var_dump($result);

if (!$result) {
	echo 'Não validou CEP! ';
	
} else {
	echo 'CEP válido! ';
}

?>

<?php
include ('footer.php');
?>

<form method="post">
	<label>CEP</label> 
	<input type="text" name="cep" /> 
	<input type="submit" />
</form>