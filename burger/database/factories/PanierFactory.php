<?php

    namespace Database\Factories;

    use App\Models\Panier;
    use App\Models\User;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class PanierFactory extends Factory {
        protected $model = Panier::class;

        public function definition(): array {
            return [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

                'user_id' => User::factory(),
            ];
        }
    }
