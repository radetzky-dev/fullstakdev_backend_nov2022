<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function index()
    {
       $response= Telegram::bot('mybot')->getMe();

    //   echo $response;
       echo "Bot name ". $response->getFirstName().'<br>';

       $updates = Telegram::bot('mybot')->getUpdates();
       echo "<pre>";
       var_dump($updates);
        echo "</pre>";

       /*
       $response = Telegram::bot('mybot')->sendMessage([
        'chat_id' => 1,
        'text' => 'il mio primo messaggio'
    ]);
    
    $messageId = $response->getMessageId();
    echo "Inviato messaggio con id ".$messageId;
    */
    
    }
}
