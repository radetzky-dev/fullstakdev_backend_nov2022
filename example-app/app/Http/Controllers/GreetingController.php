<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function sayCiao()
    {
        return view('saluti.ciao', ['name' => 'nessuno']);
    }

    public function sayHello()
    {
        //elabora
        echo "Hello world!";
    }

    public function sayBuonasera(Request $request)
    {
        $myArray = $request->query();
        if (isset($myArray['name'])) {
            return "buonasera " . $myArray['name'];
        }
        return "buonasera GUEST";
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
            'vars' => [$request['val'], 'giallo', 'c'],
        ];

        return view('saluti.saluta', $data);
    }

    public function saluta($name, $surname)
    {
        return "Two: Hello $name $surname";
    }

    public function getNameFromForm(Request $request)
    {

        if ($request->isMethod('post')) {

            $fields = $request->all();
            //TODO
            return view('nomevista', $fields);
        } else {
            return "Forbidden!";
        }
    }

}
