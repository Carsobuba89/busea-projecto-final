<?php
require("models/contas.php");
$modelContas = new Contas();

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

            header("Location:".ROOT."/admin_page/welcome");

        }else{
            $message = "Dados de Login Incorrecto, verifica e tenta de novo";
        }

    }


    require("views/login.php");
}

if($action === "logout"){

    session_destroy();
    header("Location:".ROOT."/acesso/login");

}
/* else{
    header("HTTP/1.1 400 Bad request");
    die("400 Bad Request");
} */



?>