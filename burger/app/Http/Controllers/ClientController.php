<?php

    namespace App\Http\Controllers;

    use App\Models\Commande;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Redirect;

    class ClientController {
        public function showCommandes() {
            $user = Auth::user();


            return view('main.commandes')
                ->with('commandes', $user->commandes);
        }

        public function showCommande($id) {
            $user = Auth::user();



            return view('main.commande-detail')
                ->with('commande_proudits', $user->commandes()->where('id', $id)->first()->produits)
                ->with('commande', $user->commandes()->where('id', $id)->first());

        }

        public function annulerCommande(Request $request) {
            $user = Auth::user();


            $user->commandes()->find($request['id'])->update(
                ['etat' => 'Annulée']);

                return Redirect::to('/commandes');

        }
    }
