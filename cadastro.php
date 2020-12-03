<!--Pagina de cadastro de usuário-->

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Atividade Avaliativa</title>
	</head>
	<body>
		<div class="formulario">
			<h1>Insira seus dados para cadastro</h1>
			<form method="post" action="inserir_cadastro.php">
					<input type="text" name="login_user" placeholder="login" required="">
					<input type="password" name="senha_user" placeholder="Sua senha" required="">
					<input type="submit" value="cadastrar" name="Cadastrar">
					<?php
						echo "<br><a href='index.html'>VOLTAR A ÁREA DE LOGIN</a>"
					?> 
			</form>
		</div>
	</body>
</html>