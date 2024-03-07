<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Board>
 */
class BoardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imgPath = '/img/'.$this->faker->randomElement(['title.png']);
        $created_at = $this->faker->dateTimeBetween('-1 years');
        $updated_at = $this->faker->dateTimeBetween($created_at);

        return [
            DB::table('boards')->insert([
                'title' => $this->faker->text(30),
                'content' => $this->faker->text(300),
                'category' => (string)$this->faker->randomDigit(),
                'likes' => $this->faker->numberBetween(1, 5000),
                'img'=> $imgPath,
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ])
        ];
    }
}
