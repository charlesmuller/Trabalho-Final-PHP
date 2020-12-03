<!--Usuário logado-->

<?php

$login = $_POST['login_user'];
$senha = $_POST['senha_user'];

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS1;ConnectionPooling=0","sa","root");

$stmt = $conn->query("SELECT count(*) as x FROM tb_usuarios where login='$login' and senha='$senha'");
$stmt->execute();
$results=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" type="text/css" href="estilo_2.css">
  <meta charset="utf-8">
  <title>CURSOS</title>
</head>



<div class="cima">PLATAFORMA DE CURSOS ONLINE</a></div>

<?php 

  if ($results['x'] == 1) 
  {
    echo "<h1>Bem-vindo, ".$login."!</h1>";
      
  }
  else
  {
    echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos ou não cadastrados');window.location.href='index.html';</script>";
    die();
  }
 
?>

<div class="baixo">
  <fieldset>
  <body>
    <h2>Escolha um curso para se cadastrar</h2>
    <a href="cadastro_cursophp.html"> <h1>CURSO PHP</h1> </a>
    <a href="cadastrocurso_html.html"> <h1>CURSO HTML</h1> </a>
    <a href="cadastrocurso_java.html"> <h1>CURSO JAVA</h1> </a>
    <?php
     echo "<br><a href='index.html'>SAIR</a>"
    ?>
</div>

</fieldset>
  </body>
</html>

