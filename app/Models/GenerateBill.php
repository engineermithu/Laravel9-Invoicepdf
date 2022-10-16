<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenerateBill extends Model
{
    use HasFactory;

    protected $fillable = [

        'bill_id' ,
        'order_no' ,
        'date' ,
        'phone',
        'email' ,
        'name' ,
        'division',
        'address',
        'seller_name',
        'seller_phone',
        'product_name',
        'product_description',
        'price',
        'quantity',
        'sub_total',
        'vat_tax',
        'discount',
        'grand_total'
    ];
}
