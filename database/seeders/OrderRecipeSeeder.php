<?php

namespace Database\Seeders;

use App\Models\OrderRecipe;
use Illuminate\Database\Seeder;

class OrderRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderRecipe::factory()->count(30)->create();
    }
}
