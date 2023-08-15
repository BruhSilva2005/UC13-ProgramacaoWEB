<?php

$nome ="Bruh";
$email = "bruh@gmail.com";
$senha = "13112005";
$idade = 17;

echo "<h1>Estrutura Condicional</h1>";
echo "<hr>";

echo "<h5>Exemplo de if() </h5>";

if($idade >+ 18){
    echo "O usuario $nome é maior de idade";
}
///////////////////////////////////////////
echo "<hr>";
echo "<h5>Exemplo de if e Else </h5>";

if($senha == "13112005"){
    echo "A senha é Valida";
}else{
    echo "Senha invalida!";
}

///////////////////////////////////////////
echo "<hr>";
echo "<h5>Exemplo de if e Else </h5>";

if ($idade <= 18){
    echo "Jovem";
}else if ($idade <= 21){
    echo "Adulto";
}else{
    echo "Velho";
}

///////////////////////////////////////////
echo "<hr>";
echo "<h5>Exemplo de if ternario </h5>";

echo ($idade >= 18) ? "maior de idade": "menor de idade";

///////////////////////////////////////////
echo "<hr>";
echo "<h5>Exemplo de condição para formulario de login </h5>";

if ($email == "bruh@gmail.com" && $senha == "13112005"){
    echo "usuario autenticado";
}else{
    echo "Usuario ou senha invalido";
}

///////////////////////////////////////////

echo "<hr>";
echo "<h5>Verificar se o numero é par ou impar </h5>";
$numero = 10;

if($numero % 2 == 0){
    echo "Numero $numero é Par";
}else{
    echo "Numero $numero é Impar";
}

///////////////////////////////////////////

echo "<hr>";
echo "<h5>Mostre o dia da semana </h5>";

$diasemana = date('w');

if ($diasemana == 0){
    echo "hoje é domingo";
}else if($diasemana == 1){
    echo "hoje é segunda" ; 
}else if ($diasemana == 2){
    echo "hoje é terça";
}else if ($diasemana == 3){
    echo "hoje é quarta";
}else if ($diasemana == 4){
    echo "hoje é quinta";
}else if ($diasemana == 5){
    echo "hoje é sexta";
}else if ($diasemana ==6){
    echo "hoje é sabado";
}
