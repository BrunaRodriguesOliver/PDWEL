<?php

    include_once("controller/controller_".$controller.".php");

    $objController="Controller".ucfirst($controller);

    $control = new $objController();

    $control->$action();

?>