<?php

use App\Models\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $comicTypes = [
            'comic book',
            'graphic novel',
            'manga',
            'horror fiction',
            'fantasy fiction',
            'adventure',
            'western',
        ];

        for ($i=1; $i <= 40; $i++) { 
            $newComic = new Comic();
            $newComic->title = $faker->unique()->realText(35);
            $newComic->series = $faker->realText(50);
            $newComic->type = $faker->randomElement($comicTypes);
            $newComic->description = $faker->paragraphs(4, true);
            $newComic->image_url= $faker->imageUrl(300, 200, "books");
            $newComic->price = $faker->randomFloat(2, 5, 50);
            $newComic->sale_date = $faker->date();
            $newComic->slug= Str::slug($newComic->title, '-') . '-' . $i;
            $newComic->save();
        }
    }
}
