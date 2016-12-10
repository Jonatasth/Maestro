<?php
$hostname = 'localhost';
//MYSQL (root, sem senha)
$username = 'root';
$password = '';
$database = 'maestro';
$link = mysqli_connect($hostname,$username,$password,$database);

if(!$link){
	die("ERRO: " . mysqli_connect_error());
}

?>