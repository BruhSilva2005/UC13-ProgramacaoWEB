<?php

class Aluno{
    public $nome;
    private $email;
    private $telefone;
    private $cpf;
    private $celular;

    public function NEWaluno (){
        $novoAluno = new Aluno();
        $novoAluno ->nome = 'bruh';
        $novoAluno ->cpf = '50760652805';
        $novoAluno ->email = 'bruh@gmail.com';
        $novoAluno ->telefone = '15998175962';
        $novoAluno ->celular = '2154687997464';
    
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
class Emprestimo{
    public $aluno;
    public $livro;    
    public $dataEmprestimo;
    public $dataDevolucao;

    public function __construct(Aluno $aluno,Livro $livro, )
    {
        $this ->aluno ;
        $this -> livro;
        $this -> dataEmprestimo;
        $this -> dataDevolucao; 
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

class Bibliote{
    public $tituloLivro;
    public $nomeAluno;


    public function __construct(Livro $tituloLivro, Aluno $nomeAluno)
    {
        $this->nomeAluno;
        $this->tituloLivro;
    }
}