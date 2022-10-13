<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GenerateBill>
 */
class GenerateBillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
//        $table->string('bill_id');
//        $table->string('order_no');
//        $table->string('date');
//        $table->string('phone');
//        $table->string('email')->nullable();
//        $table->string('name');
//        $table->string('division')->nullable();
//        $table->string('district')->nullable();
//        $table->longText('address')->nullable();
//        $table->string('seller_name');
//        $table->string('seller_phone');
//        $table->string('product_name');
//        $table->longText('product_description')->nullable();
//        $table->double('price',2);
//        $table->integer('quantity');
//        $table->double('sub_total',2);
//        $table->integer('vat_tax');
//        $table->integer('discount');
//        $table->double('grand_total',2);

        return [
            'bill_id' => $this->faker->bill(),
            'order_no' =>$this->faker->order_no(),
            'date' =>$this->faker->date(),
            'phone' =>$this->faker->phone(),
            'email' =>$this->faker->unique()->email(),
            'name' =>$this->faker->name(),
            'division' =>$this->faker->division(),
            'district' =>$this->faker->district(),
            'address' =>$this->faker->address(),
            'seller_name' =>$this->faker->seller_name(),
            'seller_phone' =>$this->faker->seller_phone(),
            'product_name' =>$this->faker->product_name(),
            'product_description' =>$this->faker->product_description(),
            'price' =>$this->faker->price(),
            'quantity' =>$this->faker->quantity(),
            'sub_total' =>$this->faker->sub_total(),
            'vat_tax' =>$this->faker->vat_tax(),
            'discount' =>$this->faker->discount(),
            'grand_total' =>$this->faker->grand_total(),
        ];
    }
}
