<?php
require("models/contas.php");
$modelContas = new Contas();

if($action === "conta"){

    /* echo "<pre>"; print_r($_POST); echo "</pre>"; */

    if( isset($_POST["send"]) && $_POST["consentimento"] == "on" ){

        if( $_POST["password"] === $_POST["passwordRepeated"] ){
            
            foreach($_POST as $key => $value){
                $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
            }
        
            $codigo_conta = $modelContas->create($_POST);
            //var_dump( $contaCriada);

            if( !empty($codigo_conta) ){
                $_SESSION["codigo"] = $codigo_conta;
                $_SESSION["nome"] = $_POST["username"];
                $_SESSION["email"] = $_POST["email"];

                header("Location:".ROOT."/agencia");
                
            }else{
                $message = "algo correu mal, Prencha os dados correctamente de novo";
            }

        }else{
            $message = "A palavra passe deve ser igual aos dois campos";
        }

    }else{
        $message = "Verifique si aceitaste os termos e condiçes antes de submeter o formulario";
    }

}

require("views/conta.php");

?>