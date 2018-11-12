<?php

use Illuminate\Database\Seeder;
use App\Product;

class ImageProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $count = count($products);

        for($i = 1; $i <= $count; $i++) {
            $product = Product::find($i);

        	for ($j = 1; $j <= 4; $j++) {
        		DB::table('image_product')->insert([
		    		'name' => $product->slug.'-'.$j.'.jpg',
		            'id_product' => $i,
		    	]);
        	}
        }
    }
}
