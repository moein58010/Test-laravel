<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(50),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->paragraph(rand(5,20)),
        ];
        // مقدار دهی می کند 'created_at & update_at'وقتی با مدل داده را اضافه می کنیم، خودکار خودش به
    }
}
