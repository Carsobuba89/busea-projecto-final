<?php

if($action === "conta"){

    require("models/contas.php");
    $modelContas = new Contas();

    /* echo "<pre>"; print_r($_POST); echo "</pre>"; */

    if( isset($_POST["send"]) ){

        if($_POST["consentimento"] !== "on"){

            $message = "Verifique si aceitaste os termos e condiçes antes de submeter o formulario";
        }

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

                header("Location:".ROOT."/registar/agencia");
                
            }else{
                $message = "algo correu mal, Prencha os dados correctamente de novo";
            }

        }else{
            $message = "A palavra passe deve ser igual nos dois campos";
        }

    }

    require("views/conta.view.php");

}//FINAL DE IF NO CASO ACÇAO FOR CONTA

if($action === "agencia"){

    require("models/paises.php");
    $modelPaises = new Paises();

    $paises = $modelPaises->getAll();

    $codigo_paises = [];
    foreach($paises as $pais){
        $codigo_paises[] = $pais["codigo"];
    }

    echo "<pre>";    print_r( $_POST); echo "</pre>";
    echo "<pre>";    print_r( $_FILES); echo "</pre>";

    if(isset($_POST["send"]) && in_array($_POST["pais"], $codigo_paises)){

        if(
            isset($_FILES["imagem_agencia"]) &&
            $_FILES["imagem_agencia"]["error"] == 0 &&
            $_FILES["imagem_agencia"]["size"] > 0 &&
            $_FILES["imagem_agencia"]["size"] < 4000000
        ){

            $extensao = strtolower(substr($_FILES['imagem_agencia']['name'],-4));

            $novo_nome = date("Y.m.d-H.i.s") . "_" .$_POST["nome_agencia"] . $extensao;

            $directotio = './assets/images/img-agencias/';

            move_uploaded_file($_FILES['imagem_agencia']['tmp_name'], $directotio.$novo_nome);

        }

        foreach($_POST as $key => $value){
            $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
        }

        echo "Tudo Ok ate agora";

        

        /* require("models/agencias.php");
        $modelAgencias = new Agencias();

        $codigo_agencia = $modelAgencias->create($_POST); */
    }



    require("views/agencia.view.php");
}



?>