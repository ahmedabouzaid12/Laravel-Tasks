<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 10), // معرف المستخدم (مرتبط بـ Users)
            'title' => fake()->catchPhrase(), // عنوان يعبر عن مدونة (عبارة جذابة)
            'content' => fake()->paragraphs(5, true), // محتوى المدونة (5 فقرات مدمجة في نص واحد)
            'image' => fake()->imageUrl(800, 600, 'nature', true, 'Blog Image'), // صورة وهمية بحجم مناسب للمدونات
        ];
    }
}
