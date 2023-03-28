<?php

namespace App\Services;

class SendMailService
{
    public static function send()
    {
        return "Mail sent to all";
    }

    public function sendTo($to)
    {
        return "Mail sent to ".$to;
    }
}
