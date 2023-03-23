<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class GreetingController extends Controller
{
    public function sayCiao()
    {
        return view('saluti.ciao', ['name' => 'nessuno']);
    }

    public function update($id)
    {
        var_dump($_REQUEST);
        return "chiamata PUT con $id";
    }

    public function sayHello()
    {
        //elabora
        $name = Route::currentRouteName(); // string
        $action = Route::currentRouteAction(); // string
        echo "Hello world! Name: $name  e azione $action";
    }

    public function sayBuonasera(Request $request)
    {
        $myArray = $request->query();
        if (isset($myArray['name'])) {
            return "buonasera " . $myArray['name'];
        }
        return "buonasera GUEST";
    }

    public function sayGoodEvening($name = "GUEST")
    {

        $data = [
            'name' => $name,
            'age' => $this->getAge(),
            'vars' => ['ciao'],
        ];

        return view('saluti.saluta', $data);
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

    public function show()
    {
        return "mostro id";
    }

}
