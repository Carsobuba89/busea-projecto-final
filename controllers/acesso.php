<?php
require("models/contas.php");
$modelContas = new Contas();

if($action === "login"){

    if(isset($_POST["send"])){

        foreach($_POST as $key => $value){
            $_POST[ $key ] = trim(htmlspecialchars(strip_tags($value)));
        }

        $conta = $modelContas->getContaLogin($_POST);

        


    }


    require("views/login.php");
}



?>