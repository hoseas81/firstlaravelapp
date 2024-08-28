<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

//use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store()
    {
        $msg = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ], [
            'name.required' => 'Necesitas capturar tu nombre'
        ]);
        //enviar correo con la funcion Mail del facades Mail de laravel
        Mail::to('hoseas.cabello@gmail.com')->queue(new MessageReceived($msg));
        //return new MessageReceived($msg);

        return "Mensaje enviado";
    }
    
    
}
