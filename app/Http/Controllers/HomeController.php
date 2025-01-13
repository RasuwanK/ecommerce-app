<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $latestProducts = [
            [
                'id' => 1,
                'name' => 'Product 1',
                'price' => 50.00,
                'image' => 'images/card-item1.jpg', 
            ],
            [
                'id' => 2,
                'name' => 'Product 2',
                'price' => 75.00,
                'image' => 'images/card-item2.jpg',
            ],
            [
                'id' => 3,
                'name' => 'Product 3',
                'price' => 50.00,
                'image' => 'images/card-item3.jpg', 
            ],
            [
                'id' => 4,
                'name' => 'Product 4',
                'price' => 75.00,
                'image' => 'images/card-item4.jpg',
            ],
            [
                'id' => 5,
                'name' => 'Product 5',
                'price' => 50.00,
                'image' => 'images/card-item5.jpg', 
            ],
        ];

        $featuredProducts = [
            [
                'id' => 1,
                'name' => 'Product 1',
                'price' => 50.00,
                'image' => 'images/card-item6.jpg', 
            ],
            [
                'id' => 2,
                'name' => 'Product 2',
                'price' => 75.00,
                'image' => 'images/card-item7.jpg',
            ],
            [
                'id' => 3,
                'name' => 'Product 3',
                'price' => 50.00,
                'image' => 'images/card-item8.jpg', 
            ],
            [
                'id' => 4,
                'name' => 'Product 4',
                'price' => 75.00,
                'image' => 'images/card-item9.jpg',
            ],
            [
                'id' => 5,
                'name' => 'Product 5',
                'price' => 50.00,
                'image' => 'images/card-item10.jpg', 
            ],
        ];

        return view('pages/Home', compact('latestProducts', 'featuredProducts',));
    }
}
