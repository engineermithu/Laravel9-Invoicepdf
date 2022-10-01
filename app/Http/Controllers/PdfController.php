<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
   public function generatePdf(){

       $data = 'mithu.com';
       $pdf = Pdf::loadView('pdf.billing_invoice', compact('data'));
       return $pdf->stream('billing-invoice');
   }

   public function downloadPdf(){
       $data = 'mithu.com';
       $pdf = Pdf::loadView('pdf.billing_invoice', compact('data'));
       return $pdf->download('billing-invoice.pdf');
   }
}
