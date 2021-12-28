<?php

if($action === "estadoEncomenda"){

    if(isset($_POST["seguirEncomenda"])){

       echo "<pre>"; print_r($_POST);

    }

}

require("models/conteudos.php");
$modelConteudos = new Conteudos();

$seguimento = $modelConteudos->getSeguimento();

require("views/seguimento.view.php");

?>