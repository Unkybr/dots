<?php

$saldo = $_GET['saldo'];
	


//$cpf = base64_decode($cpf);
echo "Saldo anterior : ".$saldo ."<br>";
echo "Saldo da Compra = 20<br>";
$saldo = $saldo + 20;
echo "<br>Novo saldo = ".$saldo;



?>