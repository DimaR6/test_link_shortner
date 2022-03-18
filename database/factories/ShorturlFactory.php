<?php

namespace Database\Factories;

use App\Models\Shorturl;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShorturlFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shorturl::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'original_url' => $this->faker->text,
        'short_url' => $this->faker->text,
        'redirect_count' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
