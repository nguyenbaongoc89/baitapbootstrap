<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
        DB::table('products')->insert([
            ['name' => 'Product1', 'price' => 100, 'description'=>'des1','img'=>'','quantity'=> 100,'expried'=>''],
            ['name' => 'Product2', 'price' => 100, 'description'=>'des1','img'=>'','quantity'=> 100,'expried'=>''],
            ['name' => 'Product3', 'price' => 100, 'description'=>'des1','img'=>'','quantity'=> 100,'expried'=>'2019-01-01'],
            ['name' => 'Product4', 'price' => 100, 'description'=>'des1','img'=>'','quantity'=> 100,'expried'=>'2019-01-01'],
        ]);
    }
}
