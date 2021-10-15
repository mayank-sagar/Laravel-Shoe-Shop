<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\File ;
use Illuminate\Support\Str;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::all()->each(function($product) {
            for($i=0;$i < 3;$i++) {
                $product->gallery()->create([
                    'gallery_image' =>  $this->getRandomImage($product,$i)
                ]);
            }
        });
    }


    public function getRandomImage($product,$i) {
            $imageName = 'shoes-img'.( random_int(1,2) ).'.png';
            $time = time();
            $destImage = ($time+$i).'_'.$imageName;
            File::makeDirectory(storage_path('app/public').'/products/'.$product->id, 0777, true, true);
            File::copy(public_path('images/'.$imageName),
            storage_path('app/public').'/products/'.$product->id.'/'.$destImage);
            return 'products/'.$product->id.'/'.$destImage;
    }
}
