<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class StudentBackController extends Controller
{
    public function getId(string $id)
    {
        echo "get id ".$id;
        $students = DB::select('select * from students where id = ?', [$id]);
        echo '<pre>';
        var_dump($students);
        echo '</pre>';
    }
}
