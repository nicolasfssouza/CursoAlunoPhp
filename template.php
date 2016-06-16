<html>
<head>
	<meta charset="utf-8"/>
	<title>Gerenciador de Alunos</title>
	<link rel="stylesheet" href="alunos.css" type="text/css"/>
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
			<th>Aluno</th>
			<th>E-Mail</th>
			<th>Mãe</th>
			<th>Endereço</th>
		</tr>
		<?php foreach ($listaAlunos as $aluno) : ?>
			<tr>
				<td> <?php echo $aluno['nome']; ?> </td>
				<td> <?php echo $aluno['email']; ?> </td>
				<td> <?php echo $aluno['mae']; ?> </td>
				<td> <?php echo $aluno['endereco']; ?> </td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>