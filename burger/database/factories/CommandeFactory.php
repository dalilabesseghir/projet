<?php

    namespace Database\Factories;

    use App\Models\Commande;
    use App\Models\User;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class CommandeFactory extends Factory {
        protected $model = Commande::class;

        public function definition(): array {
            return [
                'reference' => $this->faker->word(),
                'date' => Carbon::now(),
                'etat' => $this->faker->word(),
                'prix' => $this->faker->randomFloat(),
                'extraInfo' => $this->faker->word(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

                'user_id' => User::factory(),
            ];
        }
    }
