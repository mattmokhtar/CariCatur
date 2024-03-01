<?php

// database/factories/BreastCancerFactory.php

namespace Database\Factories;

use App\Models\BreastCancer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class BreastCancerFactory extends Factory
{
    protected $model = BreastCancer::class;

    public function definition()
    {
        return [
            'radius_mean' => $this->faker->randomFloat(2, 6, 30),
            'texture_mean' => $this->faker->randomFloat(2, 9, 39),
            'perimeter_mean' => $this->faker->randomFloat(2, 43, 200),
            'diagnosis' => $this->faker->randomElement(['Malignant', 'Benign']),
        ];
    }
}
