<?php

namespace App\Http\Controllers;
use App\Models\GenerateBill;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Response;
use DB;
class PdfController extends Controller
{
   public function generatePdf($id){

       $customer_bill = GenerateBill::find($id);
       $pdf = Pdf::loadView('pdf.billing_invoice', compact('customer_bill'));
       return $pdf->stream('billing-invoice');
   }

   public function downloadPdf($id){
       $customer_bill = GenerateBill::find($id);
       $pdf = Pdf::loadView('pdf.billing_invoice', compact('customer_bill'));
       return $pdf->download('billing-invoice.pdf');
   }

   public function getDistrictsByDivision(Request $request){

       $data        = $request->all();
       $districts   = DB::table('districts')
           ->where('districts.division_id','=',$data['division'])
           ->select('id','name')
           ->get();
//       return Response::json($districts);
       return response()->json($districts);
   }
}
