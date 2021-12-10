<?php
include_once("model/funcionario.php");
include_once("connection.php");

BD::criarInstancia();

class ControllerFuncionario{

    public function inicio(){
       
        $funcionarios=Funcionario::consultar();

        include_once("view/funcionario/inicio.php");
    }

    public function criar(){
        if($_POST){
            print_r($_POST);
            $nome=$_POST['nome'];
            $email=$_POST['email'];
            Funcionario::criar($nome,$email);
            header("Location:./?controller=funcionario&action=inicio");


        }
        include_once("view/funcionario/criar.php");
    }

    public function editar(){
       

        if($_POST){
            $id=$_POST['id'];
            $nome=$_POST['nome'];
            $email=$_POST['email'];

            Funcionario::editar($id,$nome,$email);
            header("Location:./?controller=funcionario&action=inicio");

        }
        $id=$_GET['id'];

        $funcionario=(Funcionario::buscar($id));
    
        include_once("view/funcionario/editar.php");
    }

    public function deletar(){
        $id=$_GET['id'];
        Funcionario::deletar($id);
        header("Location:./?controller=funcionario&action=inicio");
    }

}

?>