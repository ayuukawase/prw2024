<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $num1 + $num2;
echo $num3;

$nome = 'ayumi';
$senha = 123;
$email = 'eu@eudenovo.com';
echo "seu nome: ".$nome."\n";
echo "sua senha: ".$senha."\n";
echo "seu email: ".$email."\n";

if($campo == $senha) {
    echo "Logado com sucesso\n";
}else 
{
    echo "Senha / Email invalido. Tente outra vez\n";
    echo '<a href="exemplo entrada.html">Voltar</a>';
}
?>