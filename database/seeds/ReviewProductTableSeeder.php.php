<?php

use Illuminate\Database\Seeder;
use App\Product;

class ReviewProductTableSeeder extends Seeder
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

        	for ($j = 0; $j < 7; $j++) {
        		DB::table('review_product')->insert([
		    		'name' => 'User'.$j,
		    		'email' => 'user'.$j.'@mymail.com',
		            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quisquam totam assumenda dignissimos placeat! Dolorem molestias, autem cupiditate, modi nostrum, nesciunt tempora commodi eius veritatis provident labore neque omnis ipsam!',
		            'rating' => mt_rand(2, 5),
		            'id_product' => $i,
		    	]);
        	}

            $reviews = $product->reviewProduct;
            $totalReview = count($reviews);
            $totalRating = 0;
            foreach ($reviews as $item) {
                $totalRating += $item['rating'];
            }

            $product->rating = $totalRating / $totalReview;
            $product->save();
        }
    }
}
