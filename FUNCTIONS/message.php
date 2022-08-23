<?php
 

function set_flash_message ($message = ""){
    $_SESSION["flash_message"] = $message;
    $timestampNowPlus1Sec = strtotime("now + 1 sec");
    $_SESSION["flash_message_timestamp"] = $timestampNowPlus1Sec;
}

function  get_flash_message (){
    if(empty($_SESSION["flash_message"])){
     return null;
    } else {
        $flashMessage = $_SESSION["flash_message"];
        $timeStampNow =  strtotime("now");
        $timeStampFlashMessage =  $_SESSION["flash_message_timestamp"];
        if( $timeStampNow > $timeStampFlashMessage) {
         unset($_SESSION["flash_message"]);
         unset($_SESSION["flash_message_timestamp"]);
         return null;
        } else {
            return $flashMessage;
        }
    }
}

/*
função set_flash_message cria a mensagem que será exibida pela get_flash_message;
A primeira função será chamada nos outros ficheiros e receberá a mensagem
a ser exibida para os usuários. 
A função nativa startotime transforma uma determinada data em um timestamp.
A função nativa unset apaga uma variável. Dentro de uma função ela só a apaga 
localmente.
*/
