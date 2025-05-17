<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $categories=[
            ['id'=> 1,'name'=>'Camera','description'=>'','imagepath'=>'assets\img\products\camera2.jpeg'],
            ['id'=> 2,'name'=>'Food','description'=>'','imagepath'=>'assets\img\products\food2.jpeg'],
            ['id'=> 3,'name'=>'Electronics','description'=>'','imagepath'=>'assets\img\products\elec4.jpeg'],
            ['id'=> 4,'name'=>'Watches','description'=>'','imagepath'=>'assets\img\products\watch1.jpeg'],
            ['id'=> 5,'name'=>'Bags','description'=>'','imagepath'=>'assets\img\products\bag1.jpeg'],
            ['id'=> 6,'name'=>'Makeup','description'=>'','imagepath'=>'assets\img\products\makeup1.jpeg'],
        ];
        DB::table('categories')->insertOrIgnore($categories);

        for ($i = 1; $i <= 35; $i++) {
            Product::create([
                'name' => 'Product ' . $i,
                'description' => 'Description for product ' . $i,
                'imagepath' => 'assets\img\products\product' . $i . '.jpeg',
                'price' => rand(100, 1000),
                'quantity' => rand(1, 100),
                'category_id' => rand(1, 6),
            ]);
        }
    }
}
