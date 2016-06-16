<html>
<head>
	<meta charset="utf-8"/>
	<title>Gerenciador de Alunos</title>
	<link rel="stylesheet" href="tarefas.css" type="text/css"/>
</head>
<body>
	<h1>Gerenciador de Alunos</h1>
	<form>
		<fieldset>
			<legend>Novo Aluno</legend>
			<label>
				Aluno:
				<input type="text" name="nome"/><br><br>
				Email:
				<input type="text" name="email"/><br><br>
				Mãe:
				<input type="text" name="mae"/><br><br>
				Endereço:
				<textarea name="endereco"></textarea>

			</label>

		</fieldset>
				
				<input type="submit" value="Cadastrar"/>
				<input type="submit" value="Editar"/>
				<input type="submit" value="Excluir" />
	</form>
		<table>
		<tr>
			<th>Lista de Alunos</th>
		</tr>
		<?php foreach ($lista_tarefas as $tarefa) : ?>
			<tr>
				<td> <?php echo $tarefa; ?> </td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>