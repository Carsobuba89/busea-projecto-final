<?php
require("models/paises.php");
$modelPaises = new Paises();

$paises = $modelPaises->getAll();

/** ############ INICIO DE CODIGO SI A ROTA FOR CONTA ###############*/

if($action === "conta"){

    require("models/contas.php");
    $modelContas = new Contas();

    /* echo "<pre>"; print_r($_POST); echo "</pre>"; */

    if( isset($_POST["send"]) ){

        if( !isset($_POST["consentimento"])){

            $message = "Verifique si aceitaste os termos e condiçes antes de submeter o formulario";
            
        }

        if( $_POST["password"] === $_POST["passwordRepeated"] && !isset($message) ){
            
            foreach($_POST as $key => $value){
                $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
            }
        
            $codigo_conta = $modelContas->create($_POST);
            //var_dump( $contaCriada);

            if( !empty($codigo_conta) ){
                $_SESSION["codigo_conta"] = $codigo_conta;
                $_SESSION["nome_utilisador"] = $_POST["username"];
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

}

/** ############ INICIO DE CODIGO SI A ROTA FOR AGENCIA ###############*/

if($action === "agencia"){

    $codigo_paises = [];
    foreach($paises as $pais){
        $codigo_paises[] = $pais["codigo"];
    }

    /* echo "<pre>";    print_r( $_POST); echo "</pre>";
    echo "<pre>";    print_r( $_FILES); echo "</pre>"; */

    if(isset($_POST["send"]) && in_array($_POST["pais"], $codigo_paises)){

        if(
            isset($_FILES["imagem_agencia"]) &&
            $_FILES["imagem_agencia"]["error"] == 0 &&
            $_FILES["imagem_agencia"]["size"] > 0 &&
            $_FILES["imagem_agencia"]["size"] < 3000000
        ){

            $extensao = strtolower(substr($_FILES['imagem_agencia']['name'],-4));

            $novo_nome = date("Y.m.d-H.i.s") . "_" .$_POST["nome_agencia"] . $extensao;

            $directotio = './assets/images/img-agencias/';

            //move_uploaded_file($_FILES['imagem_agencia']['tmp_name'], $directotio.$novo_nome);

        }

        $novo_nome = trim(htmlspecialchars(strip_tags($novo_nome)));
        //var_dump($novo_nome);
        foreach($_POST as $key => $value){
            $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
        }

        /*** ######### INSERIR DADOS DA AGENCIA ############  */
        $dados_agencia = array( 
            "nome_agencia" => $_POST["nome_agencia"], 
            "descricao" => $_POST["descricao"], 
            "imagem_agencia" => $novo_nome,
            "hora_abertura" => $_POST["hora_abertura"],
            "hora_fecho" => $_POST["hora_fecho"],
            "codigo_conta" => $_SESSION["codigo_conta"]
        );

        require("models/agencias.php");
        $modelAgencias = new Agencias();

        $codigo_agencia = $modelAgencias->create($dados_agencia);

        if(!empty($codigo_agencia)){

            move_uploaded_file($_FILES['imagem_agencia']['tmp_name'], $directotio.$novo_nome);

            $_SESSION["codigo_agencia"] = $codigo_agencia;
            $_SESSION["nome_agencia"] = $_POST["nome_agencia"];
            $_SESSION["imagem_agencia"] = $novo_nome;

        }

        /*** ######### INSERIR DADOS DE ENDEREÇO DA AGENCIA ############  */
        $dados_endereco = array(
            "adresso" => $_POST["adresso"],
            "cidade" => $_POST["cidade"],
            "codigo_postal" => $_POST["codigo_postal"],
            "codigo_pais" => $_POST["pais"],
            "email" => $_SESSION["email"],
            "num_telefone" => $_POST["num_telefone"],
            "codigo_agencia" => $_SESSION["codigo_agencia"]
        );

        require("models/adressos.php");
        $modelEnderecos = new Adressos();

        $dados_enderecos = $modelEnderecos->create($dados_endereco);

        if(!empty($dados_enderecos)){

        $message = "Registo da agencia correu com sucesso";
        header("Location:".ROOT."/registar/agente");

        }


    }

    require("views/agencia.view.php");
}

/** ############ INICIO DE CODIGO SI A ROTA FOR AGENCIA ###############*/

if($action === "agente"){

    require("views/agente.view.php");
}



?>