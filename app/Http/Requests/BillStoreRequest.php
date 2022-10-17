<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'bill_id'               => 'required',
            'order_no'              => 'required',
            'date'                  => 'required',
            'phone'                 => 'required|min:8',
            'email'                 => 'required',
            'name'                  => 'required|max:50|regex:/^[a-zA-Z\s]*$/',
            'division'              => 'nullable',
            'address'               => 'nullable',
            'seller_name'           => 'required|max:50|regex:/^[a-zA-Z\s]*$/',
            'seller_phone'          => 'nullable|min:8',
            'product_name'          => 'required',
            'product_description'   => 'nullable',
            'price'                 => 'required',
            'quantity'              => 'required',
            'sub_total'             => 'required',
            'vat_tax'               => 'nullable',
            'discount'              => 'nullable',
            'grand_total'           => 'required'
        ];
    }
}
