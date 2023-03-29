<?php

namespace App\Services;
use App\Models\Student;
use PDF;
class CreatePdf
{
    public static function createPDF() 
    {
        
        $result = Student::all();
        Pdf::loadHTML($result)->setPaper('a4', 'landscape');
        $student=$result->toArray();
        view()->share('student',$student);
        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'Times-BoldItalic']);
        $pdf = PDF::loadView('pdf_view', $student);
        return $pdf->stream('pdf_file.pdf');
    }
}