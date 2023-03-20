<?php
require "conn.php";

class funcoes{
    private $id = "";
    private $nome = "";
    private $user = "";

    function setId($v){
        $this->id = $v;
    }

    function setNome($v){
        $this->nome = $v;
    }

    function setUser($v){
        $this->user = $v;
    }

    function addDados(){
        $connection = DB::getInstance();
        $dados = $connection->prepare("INSERT INTO dados VALUES (:id, :nome, :user)");
        $dados->execute([
            ':id' => $this->id,
            ':nome' => $this->nome,
            ':user' => $this->user 
        ]);
    }
}
