<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/global-style.css">
    
    <title>Bem Vindo na nossa plataforma de gestao de encomendas</title>
</head>
<body>
    
<?php
echo "<pre>";    print_r( $_SESSION); echo "</pre>";

    if(isset($message)){
        echo '<p role="alert">'.$message.'</p>';
    }

    require("views/templates/menu.acesso.php");
?>


    <h1>Monotorizaçao de encomendas</h1>
    
</body>
</html>