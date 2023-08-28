<?php
class Aluno {

    private $nome;
    private $email;
    private $telefone;
    private $cpf;
    private $celular;
    private $dataNascimento;

 

    public function __construct($nome, $email, $telefone, $cpf, $celular, $dataNascimento) {

        $this->nome = $nome;
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

 

<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">
        <title>Sistema de biblioteca</title>
    <style>
            body{
            font-family: Arial, sans-serif;
            margin: 5px;
            padding: 20px;
            background-color: #F5FFFA;
       } 
       </style>

</head>

<body>

    <div class="form-container">

             <!-- Campos para preencher o formulário -->

        <h1>Sistema de Biblioteca</h1>

        <h3>Cadastro de Aluno:</h3>

        <form method="post">

            <label for="nome">Digite seu Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="telefone">Telefone:</label><br>
            <input type="tel" id="telefone" name="telefone" required><br>
            <label for="cpf">CPF:</label><br>
            <input type="text" id="cpf" name="cpf" required><br>
            <label for="celular">Celular:</label><br>
            <input type="tel" id="celular" name="celular" required><br>
            <label for="dataNascimento">Data de Nascimento:</label><br>
            <input type="date" id="dataNascimento" name="dataNascimento" required><br>

            <button type="submit">Cadastrar</button>

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

        <p><strong>Data de Nascimento:</strong> <?= $aluno->getDataNascimento() ?><p>

    </div>

    <?php endif; ?>

</body>
</html>