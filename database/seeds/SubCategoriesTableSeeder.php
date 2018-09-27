<?php

use CashFlow\SubCategory;

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder {

    public function run() {

        $category = new SubCategory;
        $category->name = "Universidad";
        $category->category_id = 1;
        $category->user_id = 1;
        $category->save();

        $category = new SubCategory;
        $category->name = "Fiducia";
        $category->category_id = 2;
        $category->user_id = 1;
        $category->save();

        $category = new SubCategory;
        $category->name = "Natillera";
        $category->category_id = 2;
        $category->user_id = 1;
        $category->save();

        $category = new SubCategory;
        $category->name = "Ahorro";
        $category->category_id = 2;
        $category->user_id = 1;
        $category->save();

        $category = new SubCategory;
        $category->name = "Mercado";
        $category->category_id = 3;
        $category->user_id = 1;
        $category->save();

        $category = new SubCategory;
        $category->name = "Oficina";
        $category->category_id = 3;
        $category->user_id = 1;
        $category->save();

        $category = new SubCategory;
        $category->name = "Comidas fuera del hogar";
        $category->category_id = 3;
        $category->user_id = 1;
        $category->save();
    }
}
