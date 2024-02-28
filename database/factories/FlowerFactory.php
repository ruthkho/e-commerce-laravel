<?php

namespace Database\Factories;

use App\Models\Flower;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flower>
 */
class FlowerFactory extends Factory
{
    protected $model = Flower::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $flower_name = $this->faker->unique()->words($nb=2, $asText=true);
        $slug = Str::slug($flower_name);
        return [
            'name' => $flower_name,
            'slug' => $slug
        ];
    }
}
