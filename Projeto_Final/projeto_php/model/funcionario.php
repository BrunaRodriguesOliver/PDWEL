<?php
 class Funcionario{

    public $id;
    public $nome;
    public $email;

    public function __construct($id,$nome,$email){
        $this->id=$id;
        $this->nome=$nome;
        $this->email=$email;
    }

    public static function consultar(){
        $listaFuncionarios=[];
        $connectionBD=BD::criarInstancia();
        $sql= $connectionBD->query("SELECT * FROM  funcionarios.funcionario");

        foreach($sql->fetchAll() as $funcionario){
            $listaFuncionarios[] = new Funcionario($funcionario['id'], $funcionario['nome'], $funcionario['email']);
        }
        return $listaFuncionarios;
    }
   

    public static function criar($nome, $email){
        $connectionBD=BD::criarInstancia();

        $sql= $connectionBD->prepare("INSERT INTO funcionarios.funcionario(nome, email) VALUE (?,?)");
        $sql->execute(array($nome,$email));

    }

    public static function deletar($id){
        $connectionBD=BD::criarInstancia();

        $sql= $connectionBD->prepare("DELETE FROM funcionarios.funcionario WHERE id=?");
        $sql->execute(array($id));

    }

    public static function buscar($id){
        $connectionBD=BD::criarInstancia();

        $sql= $connectionBD->prepare("SELECT * FROM funcionarios.funcionario WHERE id=?");
        $sql->execute(array($id));

        $funcionario=$sql->fetch();
        return new Funcionario($funcionario['id'], $funcionario['nome'], $funcionario['email']);
    }

    public static function editar($id, $nome, $email){
        $connectionBD=BD::criarInstancia();

        $sql= $connectionBD->prepare("UPDATE funcionarios.funcionario SET nome=?, email=? WHERE id=? ");
        $sql->execute(array($nome,$email,$id));

    }
 }


?>