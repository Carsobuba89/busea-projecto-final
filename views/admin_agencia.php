<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/global-style.css">
    
    <title>Gestao de encomendas</title>
</head>
<body>
<header class="nav-header">  
<?php
    require("views/templates/menu.admin.php");
?>
</header>
<?php
    if(isset($message)){
        echo '<p role="alert">'.$message.'</p>';
    }
?>

    <h2>A sua conta, agencia e agentes foram criados com sucessoo</h2>
    <p>Aqui pode actualizar os seus dados assim que necessario, antes de mais indica o agente responsavel e activa os agentes para começar a gerir encomendas</p>
    <?php
        echo "<pre>";    print_r( $_SESSION); echo "</pre>";
    ?>
</body>
</html>