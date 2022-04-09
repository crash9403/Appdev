<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Persona;

class PdfController extends Controller
{
    public function imprimirpersonas(Request $request)
 {
   $personas=Persona::orderBy('id','ASC')->get();
   $pdf = PDF::loadView('pdf.personasPDF',['personas' => $personas ]);
   $pdf->setPaper('carta', 'landscape');
   return $pdf->stream();
 } 
}