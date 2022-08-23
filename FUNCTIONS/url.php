<?php

function url_redirect ($values = []) {
$buildQueryString = http_build_query($values);
header (
    "http://localhost/Exercícios/primeira-aplicacao-php/?". $buildQueryString);
exit;
}

/* 
Essa função cria uma querystring através da função nativa 
build_query. Os values são passados pelos controllers no momento
da autenticação. Esta função basicamente faz o redirecionamento
no momento do login do usuário, retornando este para o proprio login, ou para a pag. dashboard.
A função nativa header pega a query string criada pela função build query, concatena com o endereço já passado e faz o redirecionamento.
O exit indica que nenhum outro código deve ser executado
enquanto o redirecionamento é efetuado.

*/

