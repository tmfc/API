<?php

use api\response\Message;
use api\method\sendMessage;
use api\exceptions\InvalidTokenException;

try {
    $response = (new sendMessage('<token>'))
        ->setChatId('<chat_id>')
        ->setText('Hello World!!')
        ->send();
    
    if ($response instanceof Message) {
        $message_id = $response->message_id;
        // request succeed
    }
}
catch (InvalidTokenException $error) {
    // invalid token entered
}