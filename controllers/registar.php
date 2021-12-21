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
                $_SESSION["email_utilisador"] = $_POST["email"];
                $_SESSION["perguntaSecreta"] = $_POST["perguntaSecreta"];
                $_SESSION["respostaSecreta"] = $_POST["respostaSecreta"];

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

/* if($_SERVER["REQUEST_METHOD"] === "GET"){ */

    if($action === "agencia" && isset($_SESSION["codigo_conta"])){
        
        $codigo_paises = [];
        foreach($paises as $pais){
            $codigo_paises[] = $pais["codigo"];
        }

        /* echo "<pre>";    var_dump( $_POST); echo "</pre>";
        echo "<pre>";    print_r( $_FILES); echo "</pre>"; */

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

                //move_uploaded_file($_FILES['imagem_agencia']['tmp_name'], $directotio.$novo_nome);

            }

            $novo_nome = trim(htmlspecialchars(strip_tags($novo_nome)));
            //var_dump($novo_nome);
            foreach($_POST as $key => $value){
                $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
            }

            /*** #### INSERIR DADOS DA AGENCIA #####  */
            $dados_agencia = array( 
                "nome_agencia" => $_POST["nome_agencia"], 
                "descricao" => $_POST["descricao"], 
                "imagem_agencia" => $novo_nome,
                "hora_abertura" => $_POST["hora_abertura"],
                "hora_fecho" => $_POST["hora_fecho"],
                "codigo_conta" => $_SESSION["codigo_conta"]
            );

            var_dump($dados_agencia);

            require("models/agencias.php");
            $modelAgencias = new Agencias();

            $codigo_agencia = $modelAgencias->create($dados_agencia);

            if(!empty($codigo_agencia)){

                $_SESSION["codigo_agencia"] = $codigo_agencia;
                $_SESSION["nome_agencia"] = $_POST["nome_agencia"];
                $_SESSION["descricao"] = $_POST["descricao"];
                $_SESSION["caminho_img_agencia"] = $novo_nome;
                $_SESSION["hora_abertura"] = $_POST["hora_abertura"];
                $_SESSION["hora_fecho"] = $_POST["hora_fecho"];

                move_uploaded_file($_FILES['imagem_agencia']['tmp_name'], $directotio.$novo_nome);

            }

            /***### INSERIR DADOS DE ENDEREÇO DA AGENCIA ###  */
            /* $email = "";
            if($_SESSION["email_utilisador"] === $_POST["email"]){
                $email = $_SESSION["email_utilisador"];
            }else{
                $email = $_POST["email"];
            } */

            $dados_endereco = array(
                "adresso" => $_POST["adresso"],
                "cidade" => $_POST["cidade"],
                "codigo_postal" => $_POST["codigo_postal"],
                "codigo_pais" => $_POST["pais"],
                "email" => $_POST["email"],
                "num_telefone" => $_POST["num_telefone"],
                "codigo_agencia" => $_SESSION["codigo_agencia"]
            );

            require("models/adressos.php");
            $modelEnderecos = new Adressos();

            $dados_enderecos = $modelEnderecos->create($dados_endereco);

            if(!empty($dados_enderecos)){

                
                $_SESSION["pais"] = $_POST["pais"];
                $_SESSION["adresso"] = $_POST["adresso"];
                $_SESSION["cidade"] = $_POST["cidade"];
                $_SESSION["codigo_postal"] = $_POST["codigo_postal"];
                $_SESSION["email_agencia"] = $_POST["email"];
                $_SESSION["num_telefone"] = $_POST["num_telefone"];

                header("Location:".ROOT."/registar/agente");

            }
        }

        require("views/agencia.view.php");
    }

/* } */
    /** ############ INICIO DE CODIGO SI A ROTA FOR AGENTE ###############*/

/* if($_SERVER["REQUEST_METHOD"] === "GET"){ */

    if($action === "agente" && isset($_SESSION["codigo_agencia"])){

        /* echo "<pre>";    print_r( $_POST); echo "</pre>";
        echo "<pre>";    print_r( $_FILES); echo "</pre>"; */

        $codigo_paises = [];
        foreach($paises as $pais){
            $codigo_paises[] = $pais["codigo"];
        }

        if(isset($_POST["send"]) && in_array($_POST["pais"], $codigo_paises)){

            $novo_nome = "";
            if(
                isset($_FILES["imagem_agente"]) &&
                $_FILES["imagem_agente"]["error"] == 0 &&
                $_FILES["imagem_agente"]["size"] > 0 &&
                $_FILES["imagem_agente"]["size"] < 2000000 
            ){
                $extensao = strtolower(substr($_FILES['imagem_agente']['name'], -4));

                $novo_nome =date("Y.m.d-H.i.s") ."_" .$_POST["nome_agente"] . $extensao;

                $directotio = './assets/images/img-agentes/';

            /*  move_uploaded_file($_FILES['imagem_agente']['tmp_name'], $directotio.$novo_nome); */

            }

            $novo_nome = trim(htmlspecialchars(strip_tags($novo_nome)));

            foreach($_POST as $key => $value){
                $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
            }
            $genero = "";
            if(isset($_POST["masculino"])){
                $genero = "M";
            }else if(isset($_POST["feminino"])){
                $genero = "F";
            }else{
                $genero = "X";
            }

            $dados_agente = array(

                "nome_agente" => $_POST["nome_agente"],
                "imagem_agente" => $novo_nome,
                "data_nascimento" => $_POST["data_nascimento"],
                "lugar_nascimento" => $_POST["lugar_nascimento"],
                "numero_bi" => $_POST["numero_bi"],
                "genero" => $genero,
                "codigo_pais" => $_POST["pais"],
                "adresso" => $_POST["adresso"],
                "cidade" => $_POST["cidade"],
                "codigo_postal" => $_POST["codigo_postal"],
                "email" => $_POST["email"],
                "num_telefone" => $_POST["num_telefone"],
                "codigo_agencia" => $_SESSION["codigo_agencia"]
                
            );

            require("models/agentes.php");
            $modelAgentes = new Agentes();

            $codigo_agente = $modelAgentes->create($dados_agente);

            if(!empty($codigo_agente)){

                move_uploaded_file($_FILES['imagem_agente']['tmp_name'], $directotio.$novo_nome);

                $_SESSION["codigo_agente"] = $codigo_agente;
                $_SESSION["nome_agente"] = $_POST["nome_agente"];
                $_SESSION["caminho_img_agente"] = $novo_nome;
                $_SESSION["data_nascimento"] = $_POST["data_nascimento"];
                $_SESSION["lugar_nascimento"] = $_POST["lugar_nascimento"];
                $_SESSION["numero_bi"] = $_POST["numero_bi"];
                $_SESSION["genero"] = $genero;
                $_SESSION["pais_agente"] = $_POST["pais"];
                $_SESSION["adresso_agente"] = $_POST["adresso"];
                $_SESSION["cidade_agente"] = $_POST["cidade"];
                $_SESSION["codigo_postal_agente"] = $_POST["codigo_postal"];
                $_SESSION["email_agente"] = $_POST["email"];
                $_SESSION["num_telefone_agente"] = $_POST["num_telefone"];

                header("Location:".ROOT."/admin_page/welcome");

            }

        }

        require("views/agente.view.php");
    }

/* } */




?>