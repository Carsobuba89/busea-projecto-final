<?php
require("models/adressos.php");
$modelEndereco = new Adressos();

require("models/paises.php");
    $modelPaises = new Paises();

    $paises = $modelPaises->getAll();

if($action === "alteracaoEndereco" && isset($_SESSION["codigo_conta"])){

    /* echo "<pre>";    print_r( $_POST); echo "</pre>"; */

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

        header("Location:".ROOT."/admin_agencias/admin_agencia");
    }
}


    require("views/agencias.view.php");

?>