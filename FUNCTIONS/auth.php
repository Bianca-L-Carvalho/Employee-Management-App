<?php

function is_authenticated (){
    if (empty($_SESSION["is_authenticated"])){
        return false; // o usuário não está autendicado
    } else { 
        return true; // o usuário está autendicado
    }
} 

/* 
Essa função verifica se o usuário está ou não autenticado.
A chave is_authenticated será criada pelo controlador 
(dashboard.php), enquanto este verifica se usuário indicou corretamente o usuário e senha de autenticação, o qual adiciona o valor true a esta chave em caso se autenticação correta. Assim e a função is_authenticated irá confirmar que há um valor dentro desta chave e, portanto, o usuário está devidamente autenticado.
*/