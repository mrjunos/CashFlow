<?php

use CashFlow\SubCategory;

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder {

    public function run() {

        $category = new SubCategory;
        $category->name = "Universidad";
        $category->categorie_id = 1;
        $category->user_id = 1;
        $category->save();
    }
}
