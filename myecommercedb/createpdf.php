<?php
require __DIR__ . '/vendor/autoload.php';
$pdf = new TCPDF();                 // create TCPDF object with default constructor args
$pdf->AddPage();                    // pretty self-explanatory
$pdf->Write(1, 'Fattura cliente\n NUM....');      // 1 is line height
$pdf->Write(1, '<br>Seconda riga');      // 1 is line height

$pdf->Output('fattura.pdf');    // send the file inline to the browser (default).
