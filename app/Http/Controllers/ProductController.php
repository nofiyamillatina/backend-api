<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Mengambil seluruh data produk dari tabel MySQL via Eloquent
        return response()->json(Product::all());
    }
}
