<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillStoreRequest;
use App\Http\Requests\BillUpdateRequest;
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


    public function store(BillStoreRequest $request)
    {
        try {
            $data                      = new GenerateBill();
            $data->bill_id             = $request->bill_id;
            $data->order_no            = $request->order_no;
            $data->date                = $request->date;
            $data->phone               = $request->phone;
            $data->email               = $request->email;
            $data->name                = $request->name;
            $data->division            = $request->division;
            $data->address             = $request->address;
            $data->seller_name         = $request->seller_name;
            $data->seller_phone        = $request->seller_phone;
            $data->product_name        = $request->product_name;
            $data->product_description = $request->product_description;
            $data->price               = $request->price;
            $data->quantity            = $request->quantity;
            $data->sub_total           = $request->sub_total;
            $data->vat_tax             = $request->vat_tax;
            $data->discount            = $request->discount;
            $data->grand_total         = $request->grand_total;
            $data->save();

            return response()->json($data);
        }catch (\Exception $e){
            return response()->json($e);
        }

    }


    public function show()
    {
        $data = GenerateBill::all();
        return response()->json($data);
    }

    public function showModalData($id)
    {
        $data = GenerateBill::find($id);
        return response()->json($data);
    }



    public function edit($id)
    {
        $data = GenerateBill::find($id);
        return response()->json($data);
    }


    public function update(BillUpdateRequest $request, $id)
    {
        try {
            $data = GenerateBill::findOrFail($id)->update([

                'bill_id'             => $request->bill_id,
                'order_no'            => $request->order_no,
                'date'                => $request->date,
                'phone'               => $request->phone,
                'email'               => $request->email,
                'name'                => $request->name,
                'division'            => $request->division,
                'address'             => $request->address,
                'seller_name'         => $request->seller_name,
                'seller_phone'        => $request->seller_phone,
                'product_name'        => $request->product_name,
                'product_description' => $request->product_description,
                'price'               => $request->price,
                'quantity'            => $request->quantity,
                'sub_total'           => $request->sub_total,
                'vat_tax'             => $request->vat_tax,
                'discount'            => $request->discount,
                'grand_total'         => $request->grand_total,
            ]);

            return response()->json($data);
        }catch (\Exception $e){
            return response()->json($e);
        }
    }


    public function destroy($id)
    {
        $data = GenerateBill::find($id)->delete();
        return response()->json($data);
    }
}
