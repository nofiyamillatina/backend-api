<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Reset/Buat User Login
        User::create([
            'name' => 'Nofiya Millatina',
            'email' => 'piyak@example.com',
            'password' => Hash::make('password123'),
        ]);

        // Buat Data Produk Merchandise
        $products = [
            ['name' => 'Lightstick NCT Dream', 'price' => 890000, 'stock' => 10],
            ['name' => 'Lightstick NCT 127', 'price' => 880000, 'stock' => 12],
            ['name' => 'Lightstick Aespa', 'price' => 780000, 'stock' => 5],
            ['name' => 'Lightstick HeartsToHearts', 'price' => 750000, 'stock' => 6],
            ['name' => 'Album NCT Dream', 'price' => 865000, 'stock' => 20],
            ['name' => 'Album NCT Wish', 'price' => 785000, 'stock' => 8],
            ['name' => 'Photocard Na Jaemin', 'price' => 250000, 'stock' => 5],
            ['name' => 'Photocard Lee Haechan', 'price' => 245000, 'stock' => 3],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}