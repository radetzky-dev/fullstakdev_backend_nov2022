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
    
    /**
     * createPdfWithData
     *
     * @param  mixed $student
     * @param  mixed $finalView
     */
    public static function createPdfWithData($student, $finalView)
    {
        $pdf = PDF::loadView('pdf.'.$finalView, compact('student'));
        return $pdf->stream('pdf_file.pdf');
    }
    
    /**
     * createPdfDiploma
     *
     * @param  mixed $data
     */
    public static function createPdfDiploma($data)
    {
       $pdffile = PDF::loadView('pdf.diplomasemplice', $data);
       // var_dump($pdf_file);
       // die();
        return $pdffile->stream('diploma.pdf');
    }

}