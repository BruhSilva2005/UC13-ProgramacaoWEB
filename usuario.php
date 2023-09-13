<?php

class Usuario{
    private $nome_usuario;
    private $senha;
    private $email;

    public function __construct($nome_usuario, $senha, $email){
        $this->nome_Usuario = $nome_usuario;
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
