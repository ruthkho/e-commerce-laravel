<?php

namespace Database\Factories;

use App\Models\Occasion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Occasion>
 */
class OccasionFactory extends Factory
{
    protected $model = Occasion::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $occasion_name = $this->faker->unique()->words($nb=2, $asText=true);
        $slug = Str::slug($occasion_name);
        return [
            'name' => $occasion_name,
            'slug' => $slug
        ];
    }
}
