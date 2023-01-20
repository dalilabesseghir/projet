<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\PayementRequest;
    use App\Models\Commande;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Carbon;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Redirect;

    class CheckoutController extends Controller {

        public function showCheckoutPage() {
            $user = Auth::user();
            $total = 0;

            foreach ($user->panier->produits as $produit) {
                $total += $produit->prix * $produit->pivot->quantity;
            }

            return view('main.checkout')
                ->with('panier_produits', $user->panier->produits)
                ->with('total', $total)
                ->with('total_livraison', ($total + 4))
                ->with('client', $user);

        }

        public function pay(Request $request) {
//            $request->validate([
//                'name' => 'required|max:255',
//                'first_name' => 'required|string|max:255',
//                'adresse' => 'required|string',
//                'ville' => 'required|string',
//                'code_zip' => 'required|string|min:2',
//                'email' => 'required|string|email|max:255|unique:'.User::class,
//                'num_tel' => 'required|string|min:10|max:10',
//                'extraInfo' => 'string|max:255',
//            ]);





            $user =Auth::user();
            $user->first_name = $request['first_name'];
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->coordonee()->update(
                ['adresse' => $request['adresse']]);
            $user->coordonee()->update(
                ['ville' => $request['ville']]);
            $user->coordonee()->update(
                ['code_zip' => $request['code_zip']]);
            $user->coordonee()->update(
                ['num_tel' => $request['num_tel']]);
//            $user->coordonee->adresse = $request['adresse'];
//            $user->coordonee->ville = $request['ville'];
//            $user->coordonee->code_zip = $request['code_zip'];
//            $user->coordonee->num_tel = $request['num_tel'];

            $user->save();

            $total = 0;

            foreach ($user->panier->produits as $produit) {
                $total += $produit->prix * $produit->pivot->quantity;
            }


            $commande = Commande::create([
               'reference' => \Str::uuid()->toString(),
                'user_id' => $user->id,
                'date' => Carbon::now(),
                'etat' => 'En attente de livraison',
                'prix' => $total + 4,
                'extraInfo' => $request['extraInfo']
            ]);


            foreach ($user->panier->produits as $produit) {

                $commande->produits()->attach($produit, [
                    'quantity' => $produit->pivot->quantity,
                    'prixTotal' => $produit->prix * $produit->pivot->quantity,
                ]);
            }

            $user->panier->produits()->detach();


            //TODO : redirect to profile
            return Redirect::to('/commandes');
        }

    }
