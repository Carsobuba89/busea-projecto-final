<?php
require("models/adressos.php");
$modelEndereco = new Adressos();

require("models/paises.php");
$modelPaises = new Paises();

    $paises = $modelPaises->getAll();

//Mostrar Dados de agencias por pais
require_once("models/agencias.php");
$modelAgencias = new Agencias();
    


    

//CODIGO DE ALTERAÇAO DE ENDERECO DA AGENCIA
if($action === "alteracaoEndereco" && isset($_SESSION["codigo_conta"])){

    $codigo_paises = [];
    foreach($paises as $pais){
        $codigo_paises[] = $pais["codigo"];
    }

    if(
        isset($_POST["alterarEndereco"]) && 
        is_numeric($_SESSION["codigo_conta"]) &&
        in_array($_POST["pais"], $codigo_paises)
    ){

        foreach($_POST as $key => $value){
            $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
        }

        $modelEndereco->alterarEnderecoAgencia($_POST);

        header("Location: ".ROOT."/admin_agencias/admin_agencia");
    }
}

//CODIGO DE ALTERAÇAO DE DADOS DA AGENCIA
if($action === "alteracaoDadosAgencia" && isset($_SESSION["codigo_conta"])){

   /*  echo "<pre>"; print_r($_POST); echo "</pre>";
    echo "<pre>"; print_r($_FILES); echo "</pre>"; exit; */

    if(isset($_POST["alterarDadosAgencia"]) && is_numeric($_SESSION["codigo_conta"])){

        if(
            isset($_FILES["imagem_agencia"]) &&
            $_FILES["imagem_agencia"]["error"] == 0 &&
            $_FILES["imagem_agencia"]["size"] > 0 &&
            $_FILES["imagem_agencia"]["size"] < 4000000
        ){

            //$extensao = strtolower(substr($_FILES['imagem_agencia']['name'],-4));
            $extensao = explode(".", $_FILES['imagem_agencia']['name']);
            $extensao = ".".end($extensao);

            $novo_nome = date("Y.m.d-H.i.s") . "_" .$_POST["nome_agencia"] . $extensao;

            $directotio = './assets/images/img-agencias/';

            //move_uploaded_file($_FILES['imagem_agencia']['tmp_name'], $directotio.$novo_nome);

        }
        else{
            $novo_nome = $_POST["imagem_agencia_old"];
        }

        $novo_nome = trim(htmlspecialchars(strip_tags($novo_nome)));
        
        foreach($_POST as $key => $value){
            $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
        }

        $dados_agencia = array( 
            "nome_agencia" => $_POST["nome_agencia"], 
            "descricao" => $_POST["descricao"], 
            "imagem_agencia" => $novo_nome,
            "hora_abertura" => $_POST["hora_abertura"],
            "hora_fecho" => $_POST["hora_fecho"],
            "codigo_agencia" => $_POST["codigo_agencia"]
        );

        /* require("models/agencias.php");
        $modelAgencias = new Agencias(); */

        $resultadoUpdate = $modelAgencias->alterarDadosAgencia($dados_agencia);

        if(!empty($resultadoUpdate)){

            move_uploaded_file($_FILES['imagem_agencia']['tmp_name'], $directotio.$novo_nome);

            header("Location: ".ROOT."/admin_agencias/admin_agencia");

        }

    }

}

    //Agencias em Portugal
    $agenciasPortugal  = $modelAgencias->getAgenciasPT();

    //Agencias em Guine Bissau
    $agenciasGBissau  = $modelAgencias->getAgenciasGB();

    //Agencias em Angola
    $agenciasAngola  = $modelAgencias->getAgenciasAO();

    //Agencias em Cabo verde
    $agenciasCaboverde  = $modelAgencias->getAgenciasCV();


    require("views/agencias.view.php");

?>