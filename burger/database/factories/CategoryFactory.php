<?php

    namespace Database\Factories;

    use App\Models\Category;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class CategoryFactory extends Factory {
        /**
         * The name of the factory's corresponding model.
         *
         * @var string
         */
        protected $model = Category::class;

        /**
         * Define the model's default state.
         *
         * @return array
         */
        public function definition(): array {
            return [
                'designation' => $this->faker->title(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
    }
