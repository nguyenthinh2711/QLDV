<?php

namespace Database\Factories;

use App\Models\Monan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MonanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Monan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'tenma' => $this->faker->name(),
            'mota' => $this->faker->paragraphs(6, true),
            'loaimon' => $this->faker->numberBetween($min = 1, $max = 3),
            'giama' => $this->faker->numberBetween($min = 50000, $max = 200000),
            'imgma' => $this->faker->words(10, true),
        ];
    }
}
