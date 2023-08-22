<?php
        if(isset($_POST['cep']) && !empty($_POST['cep'])){
             
            $cep = $_POST['cep'];
            $resultado = file_get_contents("http://viacep.com.br/ws/$cep/json/");

            $dadosEndereço = json_decode($resultado, true);

            var_dump($dadosEndereço);
        }else{
            header("location:buscar-endereco.php");
            exit;
        }

?>




<html>
    <head>
        <meta charset="utf-8">
        <title>Dados de CEP</title>
    </head>
    <body>
        <h1>Endereço</h1>
        <hr>
        <P>CEP:<?=$dadosEndereço['cep']?></P>
        <p>Logradouro:<?=$dadosEndereço['logradouro']?></p>
        <p>Bairro:<?=$dadosEndereço['bairro']?></p>
        <p>Localidade:<?=$dadosEndereço['localidade']?></p>
        <p>UF:<?$dadosEndereço['uf']?></p>
        <p> DDD:<?$dadosEndereço['ddd']?><P>
    </body>
</html>