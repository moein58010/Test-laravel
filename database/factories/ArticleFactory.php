<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

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
    public function definition(Faker $faker)
    {
        return [
            'title' => $faker->text(50),
            'slug' => $faker->slug(),
            'body' => $faker->paragraph(rand(5,20))
        ];
    }
}

// مقدار دهی می کند 'created_at & update_at'وقتی با مدل داده را اضافه می کنیم، خودکار خودش به