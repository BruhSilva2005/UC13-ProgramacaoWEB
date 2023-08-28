<?php

class Aluno{
    public $Nome;
    private $email;
    private $telefone;
    private $cpf;
    private $celular;
    private $dataNascimento;

    public function __construct($Nome, $email, $telefone, $cpf, $celular, $dataNascimento){
        $this->Nome = $Nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->celular = $celular;
        $this->dataNascimento = $dataNascimento;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getEmail() {
        return $this->email;

    }
    public function getTelefone() {
        return $this->telefone;

    }
    public function getCPF() {
        return $this->cpf;

    }
    public function getCelular() {
        return $this->celular;

    }
    public function getDataNascimento() {
        return $this->dataNascimento;

    }

}

$aluno = null;

 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['cpf']) && isset($_POST['celular']) && isset($_POST['dataNascimento'])) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $cpf = $_POST['cpf'];
        $celular = $_POST['celular'];
        $dataNascimento = $_POST['dataNascimento'];
        $aluno = new Aluno($nome, $email, $telefone, $cpf, $celular, $dataNascimento);

    }

}
?>


<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de biblioteca</title>
        <style>
            body{
            font-family: Arial, sans-serif;
            margin: 5px;
            padding: 20px;
            background-color: #f4f4f4;
       } 
       </style>
    </head>
    <body>
        <h1>Sistema de Biblioteca<h1>
            <h3>Digite seu nome: </h3>
            <input name = "novoAluno" type = "name" id = "novoAluno">
            <br>
        <h3>Digite seu email: </h3>
        <input name = "novoAluno" type = "email" id = "novoAluno">
        <br>  
    <h3>Digite seu telefone: </h3>
        <input name = "novoAluno" type = "telephone" id = "novoAluno"
        placeholder="0000-0000">
        <br>
        <h3>Digite seu cpf: </h3>
        <input name = "novoAluno" type = "cpf" id = "novoAluno"
        placeholder="000.000.000-00">
        <br>
        <h3>Digite seu celular: </h3>
        <input name = "novoAluno" type = "telephone" id = "novoAluno"
        placeholder="00 00000-0000">
        <br>
        <h3>Digite sua Data de Nascimento: </h3>
        <input name = "novoAluno" type = "date" id = "novoAluno"
        placeholder="00/00/0000">
        <br>

        <button type="submit value">Cadastrar</button>


        </form>

</div>

<?php if($aluno): ?>

<div class="form-container">

      <!-- Conteúdo do formulário aqui -->

    <h2>Dados do Aluno Cadastrado:</h2>
    <p><strong>Nome:</strong> <?= $aluno->getNome() ?></p>
    <p><strong>Email:</strong> <?= $aluno->getEmail() ?></p>
    <p><strong>Telefone:</strong> <?= $aluno->getTelefone() ?></p>
    <p><strong>CPF:</strong> <?= $aluno->getCPF() ?></p>
    <p><strong>Celular:</strong> <?= $aluno->getCelular() ?></p>
    <p><strong>Data de Nascimento:</strong> <?= $aluno->getDataNascimento() ?></p>

</div>

<?php endif; ?>

</body>

</html>