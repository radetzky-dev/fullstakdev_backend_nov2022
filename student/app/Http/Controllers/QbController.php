<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class QbController extends Controller
{
    public function index(): View
    {
        $num = DB::table('students')->count();

        echo "Gli studenti sono $num<br>";

        $students = DB::table('students')
            ->select('name', 'email as students_email')
            ->get();

        var_dump($students);

        echo '<hr>';
        echo "LIKE<br>";

        $students = DB::table('students')
        ->where('phone', 'LIKE', '%+39%')
        ->get();

        var_dump($students);
     

        echo '<hr>';

        $query = DB::table('students')->select('name');

        $students = $query->addSelect('phone')->get();

        var_dump($students);

        $phones = DB::table('students')->pluck('phone');

        foreach ($phones as $phone) {
            echo $phone . '<br>';
        }

        echo '<hr>';
        $titles = DB::table('students')->orderBy('name')->pluck('phone', 'name');

        foreach ($titles as $name => $phone) {
            echo $name . '<br>';
        }

        die();

        $students = DB::table('students')->get();
        return view('index', ['student' => $students]);
    }

    public function getName($name): View
    {
        $student = DB::table('students')
            ->where('name',$name)
        //    ->where('phone', '3481967485')
            ->first();

        if ($student !== null) {
            Log::info('Studente trovato con nome ' . $student->name);
            return view('show', compact('student'));
        } else {
            Log::error('Studente NON trovato');
            $student = [];
            return view('index', compact('student'));
        }

    }

    public function getById($id): View
    {
        $student = DB::table('students')->find($id);
        Log::info('Studente trovato con id ' . $student->name);
        return view('show', compact('student'));
    }

}
