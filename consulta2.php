<?php

$db_name = 'dots';
$hostname = 'localhost';
$username = 'root';
$password = '';
$opcoes = array(
PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
);

$pdo = new PDO ("mysql:host=$hostname;dbname=$db_name", $username, $password, $opcoes);
$email  = $_POST ['email'];
$senha = $_POST['senha'];



$stmt = $pdo->prepare('SELECT * FROM usuarios WHERE email = ? AND senha = ?' );
$stmt->bindParam(1, $email,PDO::PARAM_STR);
$stmt->bindParam(2, $senha,PDO::PARAM_STR);


$stmt->execute();
if($alvos = $stmt->fetchAll()){
	$saldo = $alvos[0]['saldo'];
	echo "Olá, ".$alvos[0]['nome']."<br>Seu saldo é de:".$saldo ." pontos";
	echo "<br>Clique". "<a href='get.php?saldo=$saldo'>
	Aqui
	</a>";
} else{
	echo "ERRRRROOOOOOOOOOOOOOU!";
	header('refresh:5;url=botao.html',true,303);
}
?>