<?php

require("models/paises.php");

$modelPaises = new Paises();
$paises = $modelPaises->getAll();

$codigo_paises = [];
    foreach($paises as $pais){
        $codigo_paises[] = $pais["codigo"];
    }

require("views/agencia.php");

?>