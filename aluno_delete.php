<?php

//receber o id
//$id = isset($_GET['id']) ? $_GET['id'] : null; esse é usado na versão 5 do php
$id = $_GET['id'] ?? null;

if ($id != null){
	//executar deletação
	include ('conexao.php');
	
	$sql = "delete from alunos where id='$id'";
	
	mysqli_query($link, $sql);
	
	echo "Registro Excluido";
	
}
