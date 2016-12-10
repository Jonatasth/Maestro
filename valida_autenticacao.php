<?php
session_start();
if (!isset($_SESSION['autenticado'])or  
		empty($_SESSION['autenticado'])or 
		($_SESSION['autenticado']==false)){
			header('location:login.php');
}
?>