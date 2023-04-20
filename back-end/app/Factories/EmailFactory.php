<?php

namespace App\Factories;

use Illuminate\Support\Facades\Mail;

class EmailFactory
{
    public static function sendEmail($to, $subject, $body)
    {
        Mail::send([], [], function($message) use ($to, $subject, $body) {
            $message->to($to)
                    ->subject($subject)
                    ->setBody($body, 'text/html');
        });
    }
}