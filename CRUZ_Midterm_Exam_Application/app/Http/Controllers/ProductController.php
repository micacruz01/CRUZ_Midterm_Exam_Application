<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'title' => 'Twisted Love',
                'author' => 'Ana Huang',
                'price' => 399
            ],
            [
                'title' => 'Twisted Hate',
                'author' => 'Ana Huang',
                'price' => 799
            ],
            [
                'title' => 'Twisted Lies',
                'author' => 'Ana Huang',
                'price' => 599
            ],
            [
                'title' => 'Twisted Games',
                'author' => 'Ana Huang',
                'price' => 699
            ]
        ];

        return view('products', compact('products'));
    }
}