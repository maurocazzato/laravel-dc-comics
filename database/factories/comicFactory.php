<?php

namespace Database\Factories;

use App\Models\comic;
use Illuminate\Database\Eloquent\Factories\Factory;


class comicFactory extends Factory
{
    protected $model = comic::class;

    public function definition()
    {
        return [
            'title' => $this->faker->words (3, true),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(5,500),
        ];
    }
}
