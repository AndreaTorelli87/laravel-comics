<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $data = [
        "navLinks" => ["CHARACTERS", "COMICS", "MOVIES", "TV", "GAMES", "COLLECTIBLES", "VIDEOS", "FANS", "NEWS", "SHOP"],
        "DB_Comics" => config("comics"),
        "footerLinks" => [
            [
                "title" => "DC COMICS",
                "links" => ["Characters", "Comics", "Movies", "TV", "Games", "Videos", "News"]
            ],
            [
                "title" => "SHOP",
                "links" => ["Shop DC", "Shop DC Collectables"]
            ],
            [
                "title" => "DC",
                "links" => ["Terms Of Use", "Provacy Policy (New)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshops", "CPSC Certificates", "Ratings", "Shop Help", "Contast Us"]
            ],
            [
                "title" => "SITES",
                "links" => ["DC", "MAD Magazine", "DC Kids", "DC Universe", "DC Power Visa"]
            ],
        ],
    ];

    return view('home',$data);
})->name("home");


Route::get('prodotti', function () {
    $products = config('db.pasta');
    return view('products', compact('products'));
})->name('products');