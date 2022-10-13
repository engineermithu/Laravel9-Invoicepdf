<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generate_bills', function (Blueprint $table) {
            $table->id();
            $table->string('bill_id');
            $table->string('order_no');
            $table->string('date');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('name');
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->longText('address')->nullable();
            $table->string('seller_name');
            $table->string('seller_phone');
            $table->string('product_name');
            $table->longText('product_description')->nullable();
            $table->double('price',2);
            $table->integer('quantity');
            $table->double('sub_total',2);
            $table->integer('vat_tax');
            $table->integer('discount');
            $table->double('grand_total',2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generate_bills');
    }
};
