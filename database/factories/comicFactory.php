<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comic>
 */
class comicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => fake() ->words (3, true),
            "description" => fake() -> sentence(),
            "prize" => fake() -> numberBetween(5,500),
            
        ];
    }
}
