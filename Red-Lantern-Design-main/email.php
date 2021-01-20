<?php
$host = "localhost";
$user = "root";
$pass = "123";
$banco = "usuarios";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die (mysql_error());
?>
<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$estado=$_POST['estado'];
$login=$_POST['login'];
$senha=$_POST['senha'];
$confirmacao=$_POST['confirmacao'];

$sql = mysql_query("INSERT into usuarios(nome, email, estado,login, senha,confirmacao)
values('$nome','$email','$estado', '$login', '$senha','$confirmacao')");
?>


