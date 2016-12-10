<?php
include ('valida_autenticacao.php');
include ('header.php');
include('menu.php');

?>
<section> 
	<table border="1">
		<tr>
			<td>Id</td>
			<td>Funcionario</td>
			<td>Ações</td>
			<td>Ações</td>
		</tr>
		<?php 
		include ('conexao.php');
		//Consulta todos os registros da tabelas funcionario
		$sql = "select * from funcionario";
		//executa a consulta no banco de dados
		$funcionario = mysqli_query($link,$sql, MYSQLI_USE_RESULT);
		if (!$funcionario){
			echo mysqli_error($link);
		}
		?>
		<?php foreach ($funcionario as $funcionarios){?>
		<?php// print_r($aluno)// ?>
			<tr>
				<td><?php echo $funcionarios['id']?></td>
				<td><?php echo $funcionarios['funcionario']?></td>
				<td>
				<!-- abaixo o delete-->
					<a href="funcionario_delete.php?id=<?php echo $funcionarios['id'];?>">EXCLUIR</a>
					</td>
				<td>
				<!-- abaixo o editar-->
					<a href="funcionario_form.php?id=<?php echo $funcionarios['id'];?>">EDITAR</a>
					</td>
			</tr>
		<?php }?>
	</table>
</section>

<?php
include ('footer.php');
?>