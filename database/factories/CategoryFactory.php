<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // generate some random data
        $randomCategoryName = $this->faker->unique()->word;
        $slugFromCategory = Str::slug($randomCategoryName);
        $description = $this->faker->sentence;

        return [
            'name' => $randomCategoryName,
            'slug' => $slugFromCategory,
            'description' => $description,
        ];
    }
}
