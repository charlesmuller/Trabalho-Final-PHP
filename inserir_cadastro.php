<!--Envia os dados para o BD-->
<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS1;ConnectionPooling=0","sa","root");

$login=$_POST['login_user']; 
$senha=$_POST['senha_user'];

$stmt = $conn->query("SELECT count(*) as x FROM tb_usuarios where login='$login'");
$stmt->execute();
$results=$stmt->fetch(PDO::FETCH_ASSOC);

 if ($results['x']==1){
    echo"<script language='javascript' type='text/javascript'>
    alert('Todos os campos devem ser preenchidos');window.location.href='
    cadastro.html';</script>";
    }
     else{
        $query = $conn->prepare("INSERT INTO tb_usuarios (login, senha) VALUES ('$login','$senha')");
        $query->execute();
        
        echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.html'</script>";
        }
        echo "<br><a href='index.html'>VOLTAR A ÁREA DE LOGIN</a>"
?>