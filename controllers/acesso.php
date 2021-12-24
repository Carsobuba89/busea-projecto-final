<?php
require("models/contas.php");
$modelContas = new Contas();

//LOGIN CODE
if($action === "login"){

    /* echo "<pre>";    print_r( $_POST); echo "</pre>";
    echo "<pre>";    print_r( $_SESSION); echo "</pre>"; */

    if(isset($_POST["send"])){

        foreach($_POST as $key => $value){
            $_POST[ $key ] = trim(htmlspecialchars(strip_tags($value)));
        }

        $conta = $modelContas->getContaLogin($_POST);

        if(
            !empty($conta) && 
            password_verify($_POST["password"], $conta["palavra_passe"])
        ){
            $_SESSION["codigo_conta"] = $conta["codigo"];
            $_SESSION["nome_utilisador"] = $conta["nome_utilisador"];

            header("Location:".ROOT."/admin_agencias/admin_agencia");

        }else{
            $message = "Dados de Login Incorrecto, verifica e tenta de novo";
        }

    }


    require("views/login.php");
}

//LOGOUT CODE
if($action === "logout"){

    session_destroy();
    header("Location:".ROOT."/acesso/login");

}

//ALTERAR OS DADOS DE CONTA
if($action === "alteracaoConta" && isset($_SESSION["codigo_conta"])){

    echo "<pre>";    print_r( $_POST); echo "</pre>";

    if(isset($_POST["alterarConta"]) && is_numeric($_SESSION["codigo_conta"])){

        foreach($_POST as $key => $value){
            $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
        }

        $modelContas->alterarContaAgencia($_POST, $_SESSION["codigo_conta"]);

        header("Location:".ROOT."/admin_agencias/admin_agencia");

    }

}






?>