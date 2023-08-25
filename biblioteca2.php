<?php

// configurações para conexão com o banco de dados.
$server   = "localhost";
$user     = "root";
$password = "senac2023";
$dbname   = "db_aluno";

// instancia do PDO
try{
    $pdo = new PDO('mysql:host='.$server.';dbname='.$dbname, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch
(PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

// execução da query
$query = "sua query string";
$statement = $pdo->query($query);
$alunos = $statement->fetchAll(PDO::FETCH_OBJ);

// montagem do html da tabela
$table  = '<table>';
$table .= '<thead>';
$table .= '<tr>';
$table .= '<td>Nome</td>';
$table .= '<td>cpf</td>';
$table .= '<td>Telefone</td>';
$table .= '<td>Endereço</td>';
$table .= '<td>Email</td>';
$table .= '<td>DataNascimento</td>';
$table .= '</tr>';
$table .= '</thead>';
$table .= '<tbody>';

// laço de repetição para inclusão dos dados na tabela
foreach($alunos as $aluno){
    $table .= '<tr>';
        $table .= "<td><input type='checkbox' value='{$aluno->id}'></td>";
        $table .= "<td>{$aluno->id}</td>";
        $table .= "<td>{$aluno->Nome}</td>";
        $table .= "<td>{$aluno->cpf}</td>";
        $table .= "<td>{$aluno->telefone}</td>";
        $table .= "<td>{$aluno->email}</td>";
        $table .= "<td>{$aluno->DataNascimento}</td>";
        $table .= "<td>{$aluno->email}</td>";
    $table .= '</tr>';
}

// fecahamento do html
$table .= '</tbody>';
$table .= '</table>';

// exibição na tela
echo $table;