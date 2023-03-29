<?php

namespace App\Services;
use App\Models\Student;
use PDF;
class CreatePdf
{
    public static function createPDF() 
    {
        $result = Student::all();
        $student=$result->toArray();
        view()->share('student',$student);
        $pdf = PDF::loadView('pdf_view', $student);
        return $pdf->download('pdf_file.pdf');
    }
}