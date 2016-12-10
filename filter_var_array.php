<?php
include ('valida_autenticacao.php');
include ('header.php');
include ('menu.php');
include ('conexao.php');
?>

<?php
$funcionario = array (
		'nome' => 'Pedro',
		'funcao' => 'Cargo',
		'id_usuario' => '22' 
);

$filter = array (
		'nome' => array (
				'filter' => FILTER_SANITIZE_STRING 
		),
		'funcao' => array (
				'filter' => FILTER_SANITIZE_STRING 
		),
		'id_usuario' => array (
				'filter' => FILTER_VALIDATE_INT,
				'options' => array (
						'min_range' => 1,
						'max_range' => 9999 
				) 
		) 
);
$result= filter_var_array($funcionario, $filter);

var_dump($result);

?>
		
<?php
include ('footer.php');
?>