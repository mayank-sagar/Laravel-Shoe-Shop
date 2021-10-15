<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File ;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         $name = 'Shoe '.$this->faker->name();
         $slug = implode('-',explode(' ',$name));
         $count = Category::count();
         $randomCategory = rand(1,$count);
         $randomDir = Str::random(10);
         $imageName = 'shoes-img'.($this->faker->numberBetween(1, 2)).'.png';
         File::makeDirectory(storage_path('app/public').'/products/'.$randomDir, 0777, true, true);
         File::copy(
    public_path('images/'.$imageName),
  storage_path('app/public').'/products/'.$randomDir.'/'.$imageName);
         return [
            'product_name' => $name,
            'price' => $this->faker->randomNumber(3, false),
            'stock' =>   $this->faker->randomDigitNotNull(),
            'slug' => $slug,
            'image' => 'products/'.$randomDir.'/'.$imageName,
            'description' => $this->faker->paragraph(),
            'category_id' => Category::find($randomCategory)->id,
            'status' => $this->faker->numberBetween(0, 2)
        ];
    }
}
