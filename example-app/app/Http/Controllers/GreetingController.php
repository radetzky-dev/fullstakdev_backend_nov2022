<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function sayCiao()
    {
        echo "Ciao mondo!";
    }

    public function sayHello()
    {
        echo "Hello world!";
    }

    public function sayBuonasera()
    {
        echo "buonasera";
    }
    
}
