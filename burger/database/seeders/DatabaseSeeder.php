<?php

    namespace Database\Seeders;

    // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use App\Models\Coordonee;
    use App\Models\Ingredient;
    use App\Models\User;
    use Carbon\Carbon;
    use Illuminate\Database\Seeder;
    use App\Models\Produit;
    use App\Models\Category;
    use App\Models\Panier;

    class DatabaseSeeder extends Seeder {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run() {

            //*** WORKING ***


//             STEP 1: Create a user

            \App\Models\User::factory()->create([
                'name' => 'Test',
                'first_name' => 'User',
                'email' => 'test@example.com',
            ]);

//             STEP 2: Create a panier and attach it to user

            Panier::factory()->create([
                'user_id' => User::where('name', 'Test')->get()->pluck('id')->first()
            ]);

//             STEP 3: Create a coordonnee

            Coordonee::factory()->create([
                'adresse' => null,
                'ville' => null,
                'code_zip' => null,
                'num_tel' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => User::where('name', 'Test')->get()->pluck('id')->first()

            ]);
//             STEP 4 : Create random ingredients

            \App\Models\Ingredient::factory()->create([
                'nom' => 'oignon',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            \App\Models\Ingredient::factory()->create([
                'nom' => 'salade',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            \App\Models\Ingredient::factory()->create([
                'nom' => 'tomate',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            \App\Models\Ingredient::factory()->create([
                'nom' => 'sauce fromage',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);


//             STEP 5: Create random categories

            Category::factory()->create([
                'designation' => 'Repas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            Category::factory()->create([
                'designation' => 'Boissons',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);


//             STEP 6: Create products and attaching categories and ingredients

            Produit::factory()->create([
                'nom' => 'Hamburger Double',
                'description' => 'Un delicieux hamburger',
                'prix' => 8.5,
                'photos' => '1.jpg',
                'category_id' => Category::where('designation', 'Repas')->get()->pluck('id')->first()
            ]);


            Produit::where('nom', 'Hamburger Double')->get()->first()
                ->ingredients()->attach([
                    Ingredient::where('nom', 'salade')->get()->pluck('id')->first(),
                    Ingredient::where('nom', 'oignon')->get()->pluck('id')->first(),
                    Ingredient::where('nom', 'tomate')->get()->pluck('id')->first(),
                    Ingredient::where('nom', 'sauce fromage')->get()->pluck('id')->first(),
                ]);


            Produit::factory()->create([
                'nom' => 'Pizza',
                'description' => 'Une pizza mexicaine à ne pas rater',
                'prix' => 10,
                'photos' => '2.jpg',
                'category_id' => Category::where('designation', 'Repas')->get()->pluck('id')->first()
            ]);

            Produit::where('nom', 'Pizza')->get()->first()
                ->ingredients()->attach([
                    Ingredient::where('nom', 'oignon')->get()->pluck('id')->first(),
                    Ingredient::where('nom', 'tomate')->get()->pluck('id')->first(),
                    Ingredient::where('nom', 'sauce fromage')->get()->pluck('id')->first(),
                ]);

            Produit::factory()->create([
                'nom' => 'Frites',
                'description' => 'French Fries préparés maison',
                'prix' => 1,
                'photos' => '3.jpg',
                'category_id' => Category::where('designation', 'Repas')->get()->pluck('id')->first()
            ]);

            Produit::factory()->create([
                'nom' => 'Coca Cola',
                'description' => '',
                'prix' => 1,
                'photos' => '5.jpg',
                'category_id' => Category::where('designation', 'Boissons')->get()->pluck('id')->first()
            ]);

            Produit::factory()->create([
                'nom' => 'Fanta Orange',
                'description' => '',
                'prix' => 1,
                'photos' => 'fanta.png',
                'category_id' => Category::where('designation', 'Boissons')->get()->pluck('id')->first()
            ]);

            Produit::factory()->create([
                'nom' => 'Sprite',
                'description' => '',
                'prix' => 1,
                'photos' => 'sprite.jpg',
                'category_id' => Category::where('designation', 'Boissons')->get()->pluck('id')->first()
            ]);

            Produit::factory()->create([
                'nom' => '7up',
                'description' => '',
                'prix' => 1,
                'photos' => '7up.jpg',
                'category_id' => Category::where('designation', 'Boissons')->get()->pluck('id')->first()
            ]);


            // *** END ***


        }

    }
