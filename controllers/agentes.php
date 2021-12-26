<?php 
    require("models/agentes.php");
    $modelAgentes = new Agentes();

    require("models/paises.php");
    $modelPaises = new Paises();

    $paises = $modelPaises->getAll();

    if($action === "alteracaoAgente" && isset($_SESSION["codigo_conta"])){

        echo "<pre>"; print_r($_POST); echo "</pre>";
        echo "<pre>"; print_r($_FILES); echo "</pre>"; exit;

        $codigo_paises = [];
        foreach($paises as $pais){
            $codigo_paises[] = $pais["codigo"];
        }

        if(
            isset($_POST["alterarAgente"]) && 
            is_numeric($_SESSION["codigo_conta"]) &&
            in_array($_POST["pais"], $codigo_paises)
        ){

            if(
                isset($_FILES["imagem_agente"]) &&
                $_FILES["imagem_agente"]["error"] == 0 &&
                $_FILES["imagem_agente"]["size"] > 0 &&
                $_FILES["imagem_agente"]["size"] < 4000000
            ){
    
                $extensao = explode(".", $_FILES['imagem_agente']['name']);
                $extensao = ".".end($extensao);
    
                $novo_nome = date("Y.m.d-H.i.s") . "_" .$_POST["nome_agente"] . $extensao;
    
                $directotio = './assets/images/img-agentes/';
    
            }
            else{
                $novo_nome = $_POST["imagem_agente_old"];
            }
    
            $novo_nome = trim(htmlspecialchars(strip_tags($novo_nome)));
            
            foreach($_POST as $key => $value){
                $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
            }

            if(isset($_POST["masculino"])){
                $genero = "M";
            }else if(isset($_POST["feminino"])){
                $genero = "F";
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
                "codigo_agente" => $_POST["codigo_agente"]
                
            );

            $resultadoUpdate = $modelAgentes->alterarDadosAgente($dados_agente);

            if(!empty($resultadoUpdate)){

                move_uploaded_file($_FILES['imagem_agente']['tmp_name'], $directotio.$novo_nome);

                header("Location: ".ROOT."/admin_agencias/admin_agencia");

            }

        }
    }else{
        header("HTTP/1.1 401 Unauthorized");
        die("Nao tens permissoes de aceder esta pagina");
    }
    

?>