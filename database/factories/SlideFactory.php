<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Slide;
use Illuminate\Database\Eloquent\Factories\Factory;

class SlideFactory extends Factory
{
    protected $model = Slide::class;

    public function definition()
    {
        return [
            'title' => $this->faker->realText(50),
            'content' => $this->faker->realText(200),
            'img' => Image::factory()->onlyJpeg()->create(),
        ];
    }
}
