<?php
    require("models/conteudos.php");
    $modelConteudos = new Conteudos();

    require("models/tipo_conteudo.php");
    $modelTipoConteudo = new Tipo_conteudo();
    $tiposConteudo = $modelTipoConteudo->getAll();

    if($action === "criarNovoConteudo" && isset($_SESSION["codigo_conta"])){

        require("views/createConteudo.php");
    }
    else if($action === "criacaoConteudo" && isset($_SESSION["codigo_conta"])){

        /* echo "<pre>"; print_r($_POST); echo "</pre>";
        echo "<pre>"; print_r($_FILES); echo "</pre>"; */

        $codigo_tipoConteudo = [];
        foreach($tiposConteudo as $conteudo){
            $codigo_tipoConteudo[] = $conteudo["codigo"];
        }

        if(
            isset($_POST["criarConteudo"]) && 
            is_numeric($_SESSION["codigo_conta"]) &&
            in_array($_POST["tipo_conteudo"], $codigo_tipoConteudo)
        ){
            $novo_nome = ""; $directotio = "";
            if(
                isset($_FILES["imagem"]) &&
                $_FILES["imagem"]["error"] == 0 &&
                $_FILES["imagem"]["size"] > 0 &&
                $_FILES["imagem"]["size"] < 4000000
            ){
                $extensao = explode(".", $_FILES['imagem']['name']);
                $extensao = end($extensao);

                $novo_nome = date("Y.m.d-H.i.s") . "_" .$_POST["tipo_conteudo"] . $extensao;

                $directotio = './assets/images/img-page/';
            }

            $novo_nome = trim(htmlspecialchars(strip_tags($novo_nome)));
            //var_dump($novo_nome);
            foreach($_POST as $key => $value){
                $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
            }

            $codigo_conteudo = $modelConteudos->criarNovoConteudo($_POST, $novo_nome);

            if(!empty($codigo_conteudo)){

                move_uploaded_file($_FILES['imagem']['tmp_name'], $directotio.$novo_nome);

                header("Location:".ROOT."/admin_conteudos");
            }

        }
    }
    else if(!empty($action) && isset($_SESSION["codigo_conta"])){
        

    }
    else if(isset($_SESSION["codigo_conta"])){

        $conteudos = $modelConteudos->getAll();

        require("views/admin_conteudo.php");

    }
    
?>


