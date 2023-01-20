<?php

    namespace App\Http\Controllers;

    use App\Models\Panier;
    use App\Models\Produit;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\Http\Request;

    class PanierController extends Controller {

        public function showPanierPage() {
            $user = Auth::user();
            $total = 0;

            foreach ($user->panier->produits as $produit) {
                $total += $produit->prix * $produit->pivot->quantity;
            }

            return view('main.panier')
                ->with('panier_produits', $user->panier->produits)
                ->with('total', $total)
                ->with('total_livraison', ($total + 4));

        }

        public function destroy( $id)
        {
            $user = Auth::user();
            $user->panier->produits()->detach($id);
            return Redirect::back();

        }

        public function addProduct(Request $request) {
            $user = Auth::user();
            $exists = false;

            foreach ($user->panier->produits as $produit) {
                if ($request['id'] == $produit->id){
                    $exists = true;
                    $user->panier->produits()->updateExistingPivot($produit->id,
                        ['quantity' => $produit->pivot->quantity + $request['quantity']]);
                    break;
                }
            }
            if (!$exists) {
                $produit = Produit::find($request['id']);
                $user->panier->produits()->attach($produit, ['quantity'=> $request['quantity']]);
            }
            return redirect()->action('App\Http\Controllers\ProduitController@show', ['id' => $request['id']]);

        }
    }
