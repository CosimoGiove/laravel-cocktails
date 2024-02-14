<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Cocktail;

class CocktailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 20; $i++){
            $newCocktail = new Cocktail();
            $newCocktail->name = $faker->word();
            $newCocktail->main_alcohol = $faker->randomElement(['tequila', 'vodka', 'rum', 'gin', 'absinthe', 'whiskey' ,'brandy']);
            $newCocktail->ingredients = implode(', ', $faker->words(5));
            $newCocktail->preparations = $faker->text(30);
            $newCocktail->glass_type = $faker->word();
            $newCocktail->price = $faker->randomFloat(2, 1, 300);
            $newCocktail->garnish = $faker->word();
            $newCocktail->iba_status = $faker->word(10);
            $newCocktail->origin = $faker->word();
            $newCocktail->serving_temperature = $faker->text(8);
            $newCocktail->alcohol_content = $faker->randomFloat(2, 0, 1);
            $newCocktail->flavour_profile = $faker->word();
            $newCocktail->type = $faker->word();
            $newCocktail->creation_date = $faker->word();
            $newCocktail->creator = $faker->name();
            $newCocktail->history = $faker->word();
            $newCocktail->nutritional_values = $faker->word();

            $newCocktail->save();

        }
        /*
        $table->id();

        $table->string('name', 50);
        $table->string('main_alcohol', 50);
        $table->text('ingredients');
        $table->text('preparations');
        $table->string('glass_type', 50);
        $table->decimal('price', 6, 2);
        $table->string('garnish', 50);
        $table->string('iba_status', 50);
        $table->string('origin', 50);
        $table->string('serving_temperature', 10);
        $table->decimal('alcohol_content', 3, 2);
        $table->string('flavour_profile', 30);
        $table->string('type', 50);
        $table->string('creation_date', 50);
        $table->string('creator', 50);
        $table->text('history');
        $table->text('nutritional_values');



        $table->timestamps();
        */
    }
}
