<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Terror";
        $category->description = "Libros que dan miedo 2020";
        $category->save();

        $category = new Category();
        $category->name = "Romance";
        $category->description = "Libros dan amor 2020";
        $category->save();

        $category = new Category();
        $category->name = "Aventura";
        $category->description = "Libros que dan alegría 2020";
        $category->save();

        $category = new Category();
        $category->name = "Suspenso";
        $category->description = "Libros que dan suspenso 2020";
        $category->save();

        $category = new Category();
        $category->name = "Ciencia Ficción";
        $category->description = "Libros que dan interés 2020";
        $category->save();
    }
}
