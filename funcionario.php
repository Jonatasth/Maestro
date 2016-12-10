<?php
include ('valida_autenticacao.php');
include ('header.php');
include('menu.php');

?>
<section> 
	<table border="1">
		<tr>
			<td>Id</td>
			<td>Id_Usuario</td>
			<td>Funcionario</td>
			<td>Funcao</td>
			<td>Ativo</td>
			<td>Ações</td>
			<td>Ações</td>
		</tr>
		<?php 
		include ('conexao.php');
		//Consulta todos os registros da tabela funcionario
		$sql = "select * from funcionario";
		//executa a consulta no banco de dados
		$funcionarios = mysqli_query($link,$sql, MYSQLI_USE_RESULT);
		if (!$funcionarios){
			echo mysqli_error($link);
		}
		
		?>
		<?php foreach ($funcionarios as $funcionario){?>
		<?php// print_r($aluno)// ?>
			<tr>
				<td><?php echo $funcionario['id']?></td>
				<td><?php echo $funcionario['id_usuario']?></td>
				<td><?php echo $funcionario['funcionario']?></td>
				<td><?php echo $funcionario['funcao']?></td>
				<td><?php echo $funcionario['ativo']?></td>
				
				<td>
				<!-- abaixo o delete-->
					<a href="funcionario_delete.php?id=<?php echo $funcionario['id'];?>">EXCLUIR</a>
					</td>
				<td>
				<!-- abaixo o editar-->
					<a href="funcionario_form.php?id=<?php echo $funcionario['id'];?>">EDITAR</a>
					</td>
			</tr>
		<?php }?>
	</table>
</section>

<?php
include ('footer.php');
?>