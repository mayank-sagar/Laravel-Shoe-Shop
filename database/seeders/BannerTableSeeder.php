<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Product;
use Illuminate\Database\Seeder;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
        [
            "title" => "Our Latest Stock",
            "subtitle" => "Best Quality.",
            "description" => "Best quality and best deal available every in out site for this shoe.",
            "product_id" => 0
        ],
        [
            "title" => "Our Newest shoes.",
            "subtitle" => "Best Quality.",
            "description" => "Best quality and best deal available every in out site for this shoe.",
            "product_id" => 0
        ],
        [
            "title" => "Our Latest Fashion.",
            "subtitle" => "Best Quality.",
            "description" => "Best quality and best deal available every in out site for this shoe.",
            "product_id" => 0
        ],
        [
            "title" => "Our Best Brand.",
            "subtitle" => "Best Quality.",
            "description" => "Best quality and best deal available every in out site for this shoe.",
            "product_id" => 0
        ]
        ];
        for($i = 0; $i < 4;$i++) {
            $randomProductId = rand(1,100);
            $product = Product::find($randomProductId);
            if($product) {
                $products[$i]['product_id'] = $product->id;
                Banner::create($products[$i]); 
            }
        }
    }
}
