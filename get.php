<?php

$saldo = $_GET['saldo'];
	


$saldo = base64_decode($saldo);
echo "Saldo anterior : ".$saldo ."<br>";
echo "Saldo da Compra = 20<br>";
$saldo = $saldo + 20;
echo "<br>Novo saldo = ".$saldo;



?>