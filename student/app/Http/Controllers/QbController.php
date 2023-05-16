<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class QbController extends Controller
{
    public function index(): View
    {
        $students = DB::table('students')->get();
        return view('index', ['student' => $students]);
    }

    public function getName($name): View
    {
        $student = DB::table('students')->where('name', $name)->first();
        Log::info('Utente trovato con nome ' . $student->name);
        return view('show', compact('student'));
    }


}
