<?php
include ('valida_autenticacao.php');
include ('header.php');
include('menu.php');
include ('conexao.php');
?>


<?php
$filter = array('nome'=> array(
		'filter'=> FILTER_SANITIZE_STRING
		),
		        'idade'=> array(
		'filter'=> FILTER_VALIDATE_INT,
		
		'options'=> array(
				'min_range'=> 1,
				'max_range'=> 120,
		),
		        ),
		'email'=> FILTER_VALIDATE_EMAIL);
$result= filter_input_array(INPUT_POST, $filter);

if (!$result['nome']){
	echo 'Informe um nome sem carcteres especiais! ';
}
if (!$result['idade']){
	echo 'Informe uma idade entre 1 e 120 anos! ';
}
if (!$result['email']){
	echo 'Informe um e-mail válido! ';
}

?>
<?php
include ('footer.php');
?>

<form method="post">
	<label>Nome</label>
	<input type="text" name="nome"/>
	<label>Idade</label>
	<input type="text" name="idade"/>
	<label>E-mail</label>
	<input type="text" name="email"/>
	<input type="submit"/>
</form>







