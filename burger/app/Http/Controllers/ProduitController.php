<?php

    namespace App\Http\Controllers;

    use App\Models\Produit;
    use Illuminate\Http\Request;

    class ProduitController extends Controller {
        public function show($id) {
            $produit = Produit::find($id);

            $relatedProducts = Produit::where('category_id', $produit->category_id)
                ->whereNot('id', $produit->id)
                ->take(4)
                ->get();
            return view('main.produit')
                ->with('produit', $produit)
                ->with('relatedProducts', $relatedProducts);
        }


    }
