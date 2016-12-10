<?php
include ('valida_autenticacao.php');
include ('header.php');
include('menu.php');

?>
<section> 
	<table border="1">
		<tr>
			<td>Id</td>
			<td>Nome</td>
			<td>E-mail</td>
			<td>Endereço</td>
			<td>Ações</td>
			<td>Ações</td>
		</tr>
		<?php 
		include ('conexao.php');
		//Consulta todos os registros da tabelas alunos
		$sql = "select * from aluno";
		//executa a consulta no banco de dados
		$aluno = mysqli_query($link,$sql, MYSQLI_USE_RESULT);
		if (!$aluno){
			echo mysqli_error($link);
		}
		
		
		//print_r($alunos);
		?>
		<?php foreach ($aluno as $alunos){?>
		<?php// print_r($aluno)// ?>
			<tr>
				<td><?php echo $alunos['id']?></td>
				<td><?php echo $alunos['nome']?></td>
				<td><?php echo $alunos['email']?></td>
				<td><?php echo $alunos['endereco']?></td>
				<td>
				<!-- abaixo o delete-->
					<a href="aluno_delete.php?id=<?php echo $alunos['id'];?>">EXCLUIR</a>
					</td>
				<td>
				<!-- abaixo o editar-->
					<a href="aluno_editar.php?id=<?php echo $alunos['id'];?>">EDITAR</a>
					</td>
			</tr>
		<?php }?>
	</table>
</section>

<?php
include ('footer.php');
?>