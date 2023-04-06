<?php

namespace App\Services;

use App\Models\Student;
use \Barryvdh\DomPDF\Facade\Pdf;

class CreatePdf
{
    public static function createPDF()
    {
        $result = Student::all();
       // PDF::loadHTML($result)->setPaper('a4', 'landscape');
        $student = $result->toArray();
        view()->share('student', $student);
        PDF::setOption(['dpi' => 150, 'defaultFont' => 'Times-BoldItalic']);
        $pdf = PDF::loadView('pdf_view', $student)->setPaper('a4', 'landscape');
        return $pdf->stream('pdf_file.pdf');
    }

    public static function createPdfWithData($student, $finalView)
    {
        $pdf = PDF::loadView('pdf.'.$finalView, compact('student'));
        return $pdf->stream('pdf_file.pdf');
    }

}