<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategorySeederFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            $category = [
                ['code','name' => '0', '정치'],
                ['code','name' => '1', '경제'],
                ['code','name' => '2', '세계'],
                ['code','name' => '3', '테크'],
                ['code','name' => '4', '노동'],
                ['code','name' => '5', '환경'],
                ['code','name' => '6', '인권'],
                ['code','name' => '7', '사회'],
                ['code','name' => '8', '문화'],
                ['code','name' => '9', '라이프'],
            ];
    
            foreach ($category as $item) {
                category::create($category);
            }
        ];
    }
}
