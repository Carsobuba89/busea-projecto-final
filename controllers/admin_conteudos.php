<?php
    require("models/conteudos.php");
    $modelConteudos = new Conteudos();

    if(isset($_SESSION["codigo_conta"])){

        $conteudos = $modelConteudos->getAll();

        require("views/admin_conteudo.php");

    }
    
?>