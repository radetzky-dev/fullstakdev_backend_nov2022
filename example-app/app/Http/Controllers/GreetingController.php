<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function sayCiao()
    {
        return view('saluti.ciao', ['name'=>'nessuno']);
    }

    public function sayHello()
    {
        //elabora
        echo "Hello world!";
    }

    public function sayBuonasera(Request $request)
    {
        var_dump($request->query());
        echo "buonasera";
    }

    private function getAge()
    {
        return 19;
    }

    public function salutami(Request $request, $name)
    {
        var_dump($request->query());

        $data = [
            'name' => $name,
            'age' => $this->getAge(),
            'vars' => [$request['val'],'giallo','c']
        ];

        return view('saluti.saluta', $data);
    }

    public function saluta($name, $surname)
    {
        return "Two: Hello $name $surname";
    }
    
}
