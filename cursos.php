<?php 
$abrir = fopen('banco.txt','r');
$linhas = array();
while (!feof($abrir)){
	$buffer = fgets($abrir, 4096);
	$linhas[] = $buffer;
}
fclose($abrir);
//print_r($linhas);
$lista_cursos=array();
$contador = 0;

foreach ($linhas as $linha){
	$dados = array();
	$dados1 = explode(';', $linha);
	//print_r($dados1);
	$lista_cursos[$contador]['nome'] = $dados1['0'];
	$lista_cursos[$contador]['tempo_formacao'] = $dados1['1'];
	$lista_cursos[$contador]['carga_horaria'] = $dados1['2'];
	$lista_cursos[$contador]['periodo'] = $dados1['3'];
	$lista_cursos[$contador]['descricao'] = $dados1['4'];
	
	unset($dados);
	$contador++;
}

//print_r($lista_cursos);

?>
<?php include ('valida_autenticacao.php');?>
<?php include ('header.php');?>
<?php include('menu.php');?>
<?php require ('dados.php');?>
	<table>
		<tr>
			<td> Nome</td>
			<td> Tempo Formação</td>
			<td> Carga Horária</td>
			<td> Período</td>
			<td> Descrição</td>
		</tr>
		<?php foreach ($lista_cursos as $cursos){?>
		<tr>
			<td><?php echo $cursos['nome']?></td>
			<td><?php echo $cursos['tempo_formacao']?></td>
			<td><?php echo $cursos['carga_horaria']?></td>
			<td><?php echo $cursos['periodo']?></td>
			<td><?php echo $cursos['descricao']?></td>

		</tr>
		<?php } ?>
	</table>
<?php include ('footer.php');?>