<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Concours direct de la fonction publique',
                'designation' => 'concours-direct',
                'description' => 'Description du concours direct de la fonction publique',
            ],
            [
                'name' => 'Concours professionnel de la fonction publique',
                'designation' => 'concours-professionnel',
                'description' => 'Description du concours professionnel de la fonction publique',
            ],
            [
                'name' => 'Concours administratif de la fonction publique',
                'designation' => 'concours-administratif',
                'description' => 'Description du concours administratif de la fonction publique',
            ],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'designation' => $category['designation'],
                'description' => $category['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
