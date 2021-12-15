<?php

session_start();

define("ROOT",
    rtrim(
        str_replace("\\", "/",
            dirname($_SERVER["SCRIPT_NAME"])
        ),
    "/")
);

//var_dump(ROOT); exit;

$_url_parts = explode("/", $_SERVER["REQUEST_URI"]);

/* echo "<pre>";
print_r($_url_parts);
echo "</pre>"; */

$controllers = [
    "inicio",
    "registar"
];

$controller = !empty($_url_parts[1]) ? $_url_parts[1] : "inicio";

$action = !empty($_url_parts[2]) ? $_url_parts[2] : "";

//var_dump("Controller = ".$controller);

if(!in_array($controller, $controllers)){
    header("HTTP/1.1 404 Not Found");
    die("Pagina nao encontrada");
}

require("controllers/". $controller .".php");

?>