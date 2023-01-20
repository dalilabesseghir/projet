<?php

    use App\Http\Controllers\ProfileController;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    Route::get('/', function () {
        return view('main.index');
    });

    Route::get('/dashboard', function () {
        return view('main.index');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__ . '/auth.php';

    Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'showShopPage'])->name('shop');

    Route::get('/produits/{id}', 'App\Http\Controllers\ProduitController@show')->name('produits');

    Route::get('/gallery', function () {
        return view('main.gallery');
    }) -> name('gallery');

    Route::get('/panier', [\App\Http\Controllers\PanierController::class, 'showPanierPage'])
        ->middleware(['auth', 'verified'])
        ->name('panier');

    Route::delete('/panier/{id}', [\App\Http\Controllers\PanierController::class, 'destroy'])
        ->name('panier.destroy');


    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Route
         */
        Route::get('/logout', 'App\Http\Controllers\LogoutController@perform')->name('logout.perform');
    });

    Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'showCheckoutPage'])->name('checkout');

    Route::post('payement', [\App\Http\Controllers\CheckoutController::class, 'pay'])->name('checkout.pay');

    Route::post('/panier/produit', [\App\Http\Controllers\PanierController::class, 'addProduct'])->name('panier.add-product');

    Route::get('/commandes', [\App\Http\Controllers\ClientController::class, 'showCommandes'])
        ->middleware(['auth', 'verified'])
        ->name('commandes-show');

    Route::get('/commandes/{id}', [\App\Http\Controllers\ClientController::class, 'showCommande'])
        ->middleware(['auth', 'verified'])
        ->name('commande-show');

    Route::get('/menu', function () {
        return view('main.menu.menu');
    }) -> name('menu');

    Route::post('/commande', [\App\Http\Controllers\ClientController::class, 'annulerCommande'])->name('commande.annuler');


