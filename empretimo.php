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
    $this ->dataRetirada = $dataRetirada;
    $this ->dataDevolucao= $dataDevolucao;
}
public function getAluno(){

    return $this->aluno;
}
public function getLivro(){

    return $this->livro;

}
public function getdata_retirada(){

     return $this -> dataRetirada;
}
public function getdata_devolucao(){
    
    return $this -> dataDevolucao;
}

}

$emprestimo= null;
$detalhesExibidos= false;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['aluno']) && isset($_POST['livro']) && isset($_POST['data_retirada']) && isset($_POST['data_devolucao'])) {

        $aluno= $_POST['aluno'];

        $livro = $_POST['livro'];

        $dataRetirada= $_POST['data_retirada'];

        $dataDevolucao = $_POST['data_devolucao'];

        $emprestimo = new Emprestimo($aluno,$livro,$dataRetirada,$dataDevolucao);
        $detalhesExibidos = true;

    }

}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <title>Emprestimo</title>
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

<h1>Emprestimo</h1>


<form method="post">

<label for="Aluno">Digite nome do Aluno:</label><br>
<input type="text" id="aluno" name="aluno" required><br>
<label for="text">Digite o titulo do Livro:</label><br>
<input type="text" id="livro" name="livro" required><br>
<label for="date">Data de Retirada:</label><br>
<input type="date" id="data_retirada" name="data_retirada" required><br>
<label for="date">Data de Devolução:</label><br>
<input type="date" id=data_devolucao" name="data_devolucao" required><br>
<button type="submit">Cadastrar</button>

</form>

</div>

<?php   
    if ($detalhesExibidos) { 
        echo '<div class="emprestimo-details">';
         echo '<h2>Detalhes do Empréstimo:</h2>'; 
         echo '<b>Nome do Aluno:</b> ' . $emprestimo->aluno . '<br>';
          echo '<b>Título do Livro:</b> ' . $emprestimo->livro . '<br>'; 
         echo '<b>Data de Retirada:</b> ' . $emprestimo->dataRetirada . '<br>'; 
         echo '<b>Data de Devolução:</b> ' . $emprestimo->dataDevolucao . '<br>'; 
         echo '</div>';
        } 
    ?> 
     <p>
Copyright &COPY; <?=date("d/m/Y H:i:s") ?>  - Todos os direitos sao reservados
    </p>
    </body> 
    </html>