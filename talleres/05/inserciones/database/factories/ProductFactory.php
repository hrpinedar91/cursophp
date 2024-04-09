<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Products as Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(2), // Generate a 2-word sentence for product name
            'description' => $this->faker->paragraph(2), // Generate a 2-paragraph description
            'price' => $this->faker->randomFloat(2, 10, 100), // Generate random price between $10 and $100 with 2 decimal places
            'stock' => $this->faker->numberBetween(10, 50), // Generate random stock between 10 and 50
            'image' => $this->faker->imageUrl(640, 480), // Generate a random image URL (optional)
            'weight' => $this->faker->randomFloat(2, 0.1, 5), // Generate random weight between 0.1 and 5 kg with 2 decimal places
            'release_date' => $this->faker->date('Y-m-d', '-1 year'), // Generate release date within the last year
            'specifications' => $this->faker->text(500), // Generate 500-character specifications (optional)
        ];
    }
}
