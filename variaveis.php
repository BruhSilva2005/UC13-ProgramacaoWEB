<?php 

$nomeCompleto = 'Bruna da Silva dos Santos';
$idade = 18;
$status = true;
$salario = 1500.00;

echo $nomeCompleto;
echo "<hr>";
//converte em maiusculo 
echo strtoupper($nomeCompleto);

echo "<hr>";
//converte em minusculo
echo strtolower($nomeCompleto);

echo "<hr>";
//converte  a primeira letra em maiuscula
echo ucwords($nomeCompleto);

echo "<hr>";
//substitui os nomes
echo str_replace("Bruna", "Bruh", $nomeCompleto);

echo "<hr>";
//repete 
echo str_repeat("Bruna ",5);

echo"<hr>" ;

echo isset($nome) ? 'True': 'False';

echo"<hr>" ;

echo empty ($nomeCompleto) ? 'True': 'False';