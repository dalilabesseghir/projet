<?php

    namespace App\Http\Controllers;

    use App\Models\Produit;

    class ShopController extends Controller {
        public function showShopPage() {
            return view('main.shop', ['produitList' => Produit::all()]);
        }
    }
