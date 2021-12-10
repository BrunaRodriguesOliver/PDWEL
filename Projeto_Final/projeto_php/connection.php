<?php

class BD{
    private static $inscancia=NULL;

    public static function criarInstancia(){
        if(!isset(self::$inscancia)){

            $opcoesPDO[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;

            self::$inscancia= new PDO('mysql:host=localhost;bdname=funcionarios','root','',$opcoesPDO);
           
        }
        return self::$inscancia;
    }

}

?>