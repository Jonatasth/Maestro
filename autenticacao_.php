<?php
	$usuario = '';
	$senha = '';
 /* esse é comentário de multiplas linhas
	$usuario=$_POST['usuario'];
	$senha=$_POST['senha']; */
 /*	if (isset($_POST['usuario'])) {
		echo 'Iniciou';
		if (!empty($_POST['usuario'])) {
			echo 'Tem conteudo';
			echo $_POST['usuario'];
		} else{
			echo 'Vazio';
		}
	} else{
		echo 'Nao Iniciou'; 
		exit();
	}*/
	if (isset($_POST['usuario']) and !empty($_POST['usuario'])) {
		$usuario=$_POST['usuario'];
		echo $_POST['usuario'];
		/*if ($usuario=='PEDRO') {
			echo 'Bem Vindo!';
		}else{
			echo 'Tchau!';
		}*/
	}else{
		echo 'Informe o usuario!';
	}


	if (isset($_POST['senha']) and !empty($_POST['senha'])) {
		$senha=$_POST['senha'];
		echo $_POST['senha'];
	}else{
		echo 'Informe a senha!';
	}
	//cookie
	if (isset($_COOKIE['autenticado'])){
		die('aqui');
		if ($_COOKIE['autenticado']=='1'){
			header ('location:painel.php');
		}else {
			echo 'Refaça Login';
		}
	}else{
		if ($usuario and  $senha) {//vai direcionar para a página PAINEL
			setCOOKIE('autenticado','1');
			header('location:painel.php');
		}else{
			$mensagem="Preencha corretamente!";
			header('location:login.php?mensagem='.$mensagem);
		}
	}
?>