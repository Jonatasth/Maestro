<?php
$nome=$_POST['nome'] ?? null;
$tempo_formacao=$_POST['tempo_formacao'] ?? null;
$carga_horaria=$_POST['carga_horaria'] ?? null;
$periodo=$_POST['periodo'] ?? null;
$descricao=$_POST['descricao'] ?? null;
if ($nome != null and $descricao != null){
	$linha  = $nome.';';
	$linha .= $tempo_formacao.';';
	$linha .= $carga_horaria.';';
	$linha .= $periodo.';';
	$linha .= $descricao.';'."\n";
	$file = fopen('banco.txt','a+');
	$escreve = fwrite($file,$linha);
	fclose($file);
	echo 'Curso Cadastrado!';
}
include ('valida_autenticacao.php');
include ('header.php');
include('menu.php');
?>
<section>
	<form method="POST">
	<input name="nome" type="text">
	<input name="tempo_formacao" type="text">
	<input name="carga_horaria" type="text">
	<input name="periodo" type="text">
	<textarea name="descricao"></textarea>
	<input type="submit" value="cadastrar"/>
	</form>
</section>
<?php 
include ('footer.php');
?>
   