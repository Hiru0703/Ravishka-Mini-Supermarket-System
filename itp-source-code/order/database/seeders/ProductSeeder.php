<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [
            [
                'name' => 'Ice Cream',
                'description' => 'Choclate Ice Cream ',
                'image' => '/assets/img/iceCream.png',
                'price' => 600
            ],
            [
                'name' => 'Sausages',
                'description' => 'Cheese chicken sausges',
                'image' => '/assets/img/chickenSausages.png',
                'price' => 550
            ],
            [
                'name' => 'Yoghurt',
                'description' => 'Orange flavored Drinking Yoghurt',
                'image' => '/assets/img/yoghurtDrink.png',
                'price' => 120
            ],
            [
                'name' => 'Green Peas',
                'description' => 'Frozen green peas 1Kg',
                'image' => '/assets/img/greenPeas.png',
                'price' => 1100
            ]
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
    }

