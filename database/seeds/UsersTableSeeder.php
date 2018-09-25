<?php

use CashFlow\User;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    public function run() {

        $category = new User;
        $category->name = "Juan José";
        $category->last_name = "Cano Duque";
        $category->email = "jjcadu@gmail.com";
        $category->password = bcrypt('cronologia');
        $category->save();
    }
}
