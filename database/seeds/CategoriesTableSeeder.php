<?php

use CashFlow\Category;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {

    public function run() {

        $category = new Category;
        $category->name = "Deudas";
        $category->user_id = 1;
        $category->save();

        $category = new Category;
        $category->name = "Ahorro";
        $category->user_id = 1;
        $category->save();

        $category = new Category;
        $category->name = "Alimentación";
        $category->user_id = 1;
        $category->save();

        $category = new Category;
        $category->name = "Vivienda";
        $category->user_id = 1;
        $category->save();

        $category = new Category;
        $category->name = "Estilo / Cuidado Personal";
        $category->user_id = 1;
        $category->save();

        $category = new Category;
        $category->name = "Salud";
        $category->user_id = 1;
        $category->save();

        $category = new Category;
        $category->name = "Educación";
        $category->user_id = 1;
        $category->save();

        $category = new Category;
        $category->name = "Entretenimiento";
        $category->user_id = 1;
        $category->save();

        $category = new Category;
        $category->name = "Transporte";
        $category->user_id = 1;
        $category->save();

        $category = new Category;
        $category->name = "Tecnología y Comunicaciones";
        $category->user_id = 1;
        $category->save();

        $category = new Category;
        $category->name = "Otros Gastos";
        $category->user_id = 1;
        $category->save();
    }
}
