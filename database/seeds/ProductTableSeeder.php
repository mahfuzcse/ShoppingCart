<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
               'imagePath'     => "img/img01.jpg",
               'title'         => 'xxxx',
               'description'   => 'What a sweat story it is in my life',
               'price'         =>  12
        	]);
        $product->save();
    
         $product = new \App\Product([
               'imagePath'     => "img/img02.jpg",
               'title'         => 'xxxx',
               'description'   => 'What a sweat story it is in my life',
               'price'         =>  12
        	]);
        $product->save();

         $product = new \App\Product([
               'imagePath'     => "img/img01.jpg",
               'title'         => 'xxxx',
               'description'   => 'What a sweat story it is in my life',
               'price'         =>  12
        	]);
        $product->save();

         $product = new \App\Product([
               'imagePath'     => "img/img02.jpg",
               'title'         => 'xxxx',
               'description'   => 'What a sweat story it is in my life',
               'price'         =>  12
        	]);
        $product->save();

         $product = new \App\Product([
               'imagePath'     => "img/img01.jpg",
               'title'         => 'xxxx',
               'description'   => 'What a sweat story it is in my life',
               'price'         =>  12
        	]);
        $product->save();
    }
}
