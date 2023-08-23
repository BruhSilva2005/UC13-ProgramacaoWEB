<?php

class Aluno{
    public $nome;
    private $email;
    private $telefone;
    private $cpf;
    private $celular;
    private $dataNascimento;

    public function NEWaluno (){
        $novoAluno = new Aluno();
        $novoAluno ->nome = 'bruh';
        $novoAluno ->cpf = '50760652805';
        $novoAluno ->email = 'bruh@gmail.com';
        $novoAluno ->telefone = '15998175962';
        $novoAluno ->celular = '2154687997464';
        $novoAluno ->dataNascimento ="13/11/2005";
    
        echo"<h1>Sistema de biblioteca<h1>";
 }
}
class Livro{
    private $ISBN;
    public $ano_publicacao;
    public $titulo;
    public $autor;
    public $preco;
    public $numero_paginas;
     
    public function newlivro()
    {
            $novoLivro = new Livro();
            $novoLivro->ISBN = '123456788999';
            $novoLivro->titulo = 'pequeno principe';
            $novoLivro->ano_publicacao = '2013';
            $novoLivro->autor = 'Antoine de Saint-Exupéry';
            $novoLivro->preco = '15.00';
            $novoLivro->numero_paginas = '99';
    
    }
}
class emprestimo {

    public $aluno;
    public $livro;
    public $dataRetirada;
    public $dataDevolucao;
    public function __construct(livro $livro, aluno $aluno)

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
    public function fazerEmprestimo(){

    }

}
class Usuario{
    private $nome_usuario;
    private $senha;
    private $email;

    public function novoAluno(){
        $novoUsuario = new Usuario;
        $novoUsuario ->nome_usuario = 'brunasilv';
        $novoUsuario ->senha = '13112005';
        $novoUsuario ->email = 'brunasilva@gmail.com';
 
     }
}

class biblioteca {

    public $alunos = [];
    public $livros = [];
    public function __construct(livro $livro, aluno $aluno)

    {
        $this->livros = $livro;

        $this->alunos = $aluno;

    }
    public function addLivro(Livro $livro){

        return $this->livros[] = $livro;

    }
    public function addAlunos (aluno $aluno){

        return $this->alunos[] = $aluno;

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
       .message-box {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
        }
        .message-box h2 {
            margin-top: 0;
        }
        .message-box p {
            margin-bottom: 0;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border-color: #f5c6cb;
        }
       </style>
    </head>
    <body>
        <h1>Sistema de Biblioteca<h1>
            <h3>Digite seu nome: </h3>
            <input name = "aluno" type = "name" id = "aluno">
            <br>
        <h3>Digite seu email: </h3>
        <input name = "aluno" type = "email" id = "aluno">
        <br>  
    <h3>Digite seu telefone: </h3>
        <input name = "aluno" type = "telephone" id = "aluno"
        placeholder="0000-0000">
        <br>
        <h3>Digite seu cpf: </h3>
        <input name = "aluno" type = "cpf" id = "aluno"
        placeholder="000.000.000-00">
        <br>
        <h3>Digite seu celular: </h3>
        <input name = "aluno" type = "telephone" id = "aluno"
        placeholder="00 00000-0000">
        <br>
        <h3>Digite sua Data de Nascimento: </h3>
        <input name = "aluno" type = "date" id = "aluno"
        placeholder="00/00/0000">
        <br>

  



        <button type="submit">Enviar</button>
  




            <p>

            Copyright &COPY; <?=date("d/m/Y H:i:s") ?>  - Todos os direitos sao reservados

        </p>
    </body>
</html>
 