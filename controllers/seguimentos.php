<?php

if($action === "estadoEncomenda"){

    if(isset($_POST["seguirEncomenda"])){

       echo "<pre>"; print_r($_POST);

    }

}

require("views/seguimento.view.php");

?>