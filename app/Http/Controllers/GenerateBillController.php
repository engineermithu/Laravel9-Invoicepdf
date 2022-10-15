<?php

namespace App\Http\Controllers;

use App\Models\GenerateBill;
use Illuminate\Http\Request;

class GenerateBillController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data               = new GenerateBill();
        $data->bill_id      = $request->bill_id;
        $data->order_no     = $request->order_no;
        $data->date         = $request->date;
        $data->phone        = $request->phone;
        $data->email        = $request->email;
        $data->name         = $request->name;
        $data->division     = $request->division;
        $data->address      = $request->address;
        $data->seller_name  = $request->seller_name;
        $data->seller_phone = $request->seller_phone;
        $data->product_name = $request->product_name;
        $data->price        = $request->price;
        $data->quantity     = $request->quantity;
        $data->sub_total    = $request->sub_total;
        $data->vat_tax      = $request->vat_tax;
        $data->discount     = $request->discount;
        $data->grand_total  = $request->grand_total;
        $data->save();

        return response()->json($data);
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
