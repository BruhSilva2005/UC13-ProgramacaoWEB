<?php

class emprestimo {

public $aluno;
public $livro;
public $dataRetirada;
public $dataDevolucao;
public function __construct($aluno,$livro,$dataRetirada,$dataDevolucao)

{
    $this->aluno = $aluno;
    $this->livro = $livro;
}
public function getAluno(){

    return $this->aluno;
}
public function getLivro(){

    return $this->livro;

}

}
$emprestimo= null;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['Aluno']) && isset($_POST['livro']) && isset($_POST['dataRetirada']) && isset($_POST['data_devolucao'])) {

        $aluno= $_POST['aluno'];

        $livro = $_POST['livro'];

        $dataRetirada= $_POST['data_retirada'];

        $dataDevolucao = $_POST['data_devolucao'];

        $emprestimo = new emprestimo($aluno,$livro,$dataRetirada,$dataDevolucao);

    }

}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <title>Cadastro de Livro</title>
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

<h1>Cadastro de livro</h1>


<form method="post">

<label for="isbn">Digite o ISBN:</label><br>
<input type="text" id="isbn" name="isbn" required><br>
<label for="text">Digite o titulo do Livro:</label><br>
<input type="text" id="titulo" name="titulo" required><br>
<label for="autor">autor:</label><br>
<input type="text" id="autor" name="autor" required><br>
<label for="bool">Preco:</label><br>
<input type="bool" id="preco" name="preco" required><br>
<label for="text">numero_paginas:</label><br>
<input type="text" id="Numero_paginas" name="Numero_paginas" required><br>
<label for="date">Digite o Ano de Ano_publicacao:</label><br>
<input type="date" id="ano_publicacao" name="ano_publicacao" required><br>
<button type="submit">Cadastrar</button>

</form>

</div>


<?php if($livro): ?>

<div class="form-container">

      <!-- Conteúdo do formulário aqui -->

    <h2>Dados do Livro:</h2>

    <p><strong>ISBN:</strong> <?= $livro->getISBN() ?></p>

    <p><strong>Ano_publicacao:</strong> <?= $livro->getAno_publicacao() ?></p>

    <p><strong>Titulo:</strong> <?= $livro->getTitulo() ?></p>

    <p><strong>Autor:</strong> <?= $livro->getAutor() ?></p>

    <p><strong>preco:</strong> <?= $livro->getPreco() ?></p>

    <p><strong>Numero_Paginas:</strong> <?= $livro->getNumero_Paginas() ?><p>

</div>

<?php endif; ?>

</body>


</html>