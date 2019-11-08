<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $product=new Product();
      $product->name="Product1";
      $product->description="Example Product1";
      $product->register_url="1/register";
      $product->service_id=1;
      $product->save();
    }
}
