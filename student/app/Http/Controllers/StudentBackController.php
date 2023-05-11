<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class StudentBackController extends Controller
{
    public function getId(string $id)
    {
        //echo "get id ".$id;
        $student = DB::select('select * from students where id = ?', [$id]);

      /*  $student = DB::select('select * from students where id = :id and name = :name', 
        ['id' => 1,'name'=>'Osea Battaglia(Salerno)(Quarto Romolo laziale)']);

        */

      //  var_dump($student);
      
      //  $student = DB::select("select * from students where id = $id");
        $student = $student[0];
        return view('show', compact('student'));
    }

    public function getAll()
    {
        //echo "get id ".$id;
        $student = DB::select('select * from students');
        return view('index', compact('student'));
    }
}
