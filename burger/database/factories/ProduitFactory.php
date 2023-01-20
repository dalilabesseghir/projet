<?php

    namespace Database\Factories;

    use App\Models\Category;
    use App\Models\Produit;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class ProduitFactory extends Factory {
        protected $model = Produit::class;

        public function definition(): array {
            return [
                'nom' => $this->faker->word(),
                'description' => $this->faker->sentence(),
                'prix' => $this->faker->randomFloat(1, 1, 10),
                'photos' => $this->faker->word(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

                'category_id' => Category::factory(),
            ];
        }
    }
