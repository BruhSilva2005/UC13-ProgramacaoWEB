<?php

class Usuario{
    private $nome_usuario;
    private $senha;
    private $email;

    public function __construct($nome_usuario, $senha, $email){
        $this->nome_usuario = $nome_usuario;
        $this->email = $email;
        $this->senha = $senha;

    }
    public function getNome_usuario() {
        return $this->nome_usuario;
    }
    public function getemail() {
        return $this->email;

    }
    public function getsenha() {
        return $this->senha;
    }
}
$usuario = null;
$detalhesExibidos= false;

if($_SERVER['REQUEST_METHOD']=== 'POST'){
    if(isset($_POST['nome_usuario'])&& isset($_POST['senha'])&& isset($_POST['senha'])){
        $nome_usuario= $_POST['nome_usuario'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $usuario = new Usuario($nome_usuario,$senha,$email);
        $detalhesExibidos= true;

    }
}
?>
<!DOCTYPE html>
<html>

 

<head>
<meta charset="utf-8">
<title>Emprestimo</title>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 5px;
            padding: 20px;
            background-color: #F5FFFA;
        }
</style>
</head>

<body>
    <div class = "form-container">
    <h1>Cadastro do Usuario</h1>
    <form method = "post">
    <label for = "nome_usuario">Digite o Nome do Usuario: </label><br>
    <input type = "text" id="nome_usuario" name ="nome_usuario" required><br>
    <label for = "nome_usuario">Digite seu Email: </label><br>
    <input type = "email" id="email" name ="email" required><br>
    <label for = "nome_usuario">Digite sua Senha: </label><br>
    <input type = "password" id="senha" name ="senha" required><br>
    <button type = "submit">Cadastrar</button>
    </form>
    </div>

    <?php
    if($detalhesExibidos){
        echo '<div class = "usuario-details">';
        echo'<h2> Detalhes do Usuario:</h2>';
        echo '<b> Nome do Usuario:</b>'. $usuario->getNome_usuario() .'<br>';
        echo '<b>Email do Usuario:</b> '. $usuario->getemail() .'<br>';
        echo '<b> senha do Usuario:</b>'. $usuario->getsenha() .'<br>';
        echo '</div>';
    }
    ?>
     <p>
Copyright &COPY; <?=date("d/m/Y H:i:s") ?>  - Todos os direitos sao reservados
</p>
</body>

</html>


