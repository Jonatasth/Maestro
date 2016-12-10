<?php
session_start();
$usuario=$_POST['usuario'] ?? null;
$senha=$_POST['senha'] ?? null;
if (empty($usuario)){
	$_SESSION['mensagem']='Informe usuário';
	header('location:login.php');
}elseif (empty($senha)){
	$_SESSION['mensagem']='Informe senha';
	header('location:login.php');
}else {
	unset ($_SESSION['mensagem']);
	#Autenticação
	include ('dados.php');
	$_SESSION['autenticado']=false;
	foreach ($usuarios as $row){
		if ($row['usuario']==$usuario
			and $row['senha']==$senha){
			$_SESSION['autenticado']=true;
		}
	}
	if ($_SESSION['autenticado']){
		header('location:painel.php');
	}else {
		$_SESSION['mensagem']='Dados Incorretos';
		header('location:login.php');
	}
}
?>