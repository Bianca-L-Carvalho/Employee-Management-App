<?php

session_start();

require_once "config.php";

require_once "FUNCTIONS/url.php";

require_once "FUNCTIONS/message.php";

require_once "FUNCTIONS/auth.php";

//pg login é definida como padrão caso nenhuma rota seja definida.
if(empty($_GET["route"])){
$page = "login";
}else{
    $page = $_GET["route"];
}

// condição p/ caso a rota requerida contenha alguma necessidade de autenticação
// as quais serão verificadas pelos controladores.
switch ($page){
    case "dashboard":
        require_once "CONTROLLERS/dashboard.php";
        break;
    case "authenticate":
        require_once "CONTROLLERS/authenticated.php";
        break;
    case "logout":
        require_once "CONTROLLERS/logout.php";
}

$page_template = "TEMPLATES/page_" . $page . ".php";

require_once "TEMPLATES/head.php";

// condição abaixo criada pois existem pgs que não foram definidas, como about e contact.
// Assim, caso a rota seja para estas pgs, devo direcionar o usuário p/ pg not found.

if (file_exists($page_template)){
    require_once $page_template;
} else{
    require_once "TEMPLATES/page_not_found.php";
}

require_once "TEMPLATES/foot.php";

