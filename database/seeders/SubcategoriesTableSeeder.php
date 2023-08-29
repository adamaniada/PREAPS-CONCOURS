<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategoriesData = [
            [
                'category_id' => 1,
                'name' => 'Administrateurs civils',
                'designation' => 'administrateurs-civils',
                'description' => 'Le concours d\'administrateurs civils est un concours de recrutement de fonctionnaires de catégorie A, grade de 1er classe. Les administrateurs civils sont chargés de la mise en œuvre des politiques publiques et de la gestion des services publics. Ils peuvent exercer leurs fonctions dans tous les ministères et institutions de l\'État.',
            ],
            [
                'category_id' => 1,
                'name' => 'Administrateurs des services de santé',
                'designation' => 'administrateurs-services-sante',
                'description' => 'Le concours d\'administrateurs des services de santé est un concours de recrutement de fonctionnaires de catégorie A, grade de 1er classe. Les administrateurs des services de santé sont chargés de la gestion des services publics de santé. Ils peuvent exercer leurs fonctions dans les ministères de la Santé et de la Sécurité sociale, dans les hôpitaux et les centres de santé, ainsi que dans les organisations internationales.',
            ],
            [
                'category_id' => 1,
                'name' => 'Magistrats',
                'designation' => 'magistrats',
                'description' => 'Le concours de magistrats est un concours de recrutement de fonctionnaires de catégorie A, grade de 1er classe. Les magistrats sont chargés de l\'administration de la justice. Ils peuvent exercer leurs fonctions dans les tribunaux, les cours d\'appel et la Cour suprême.',
            ],
            [
                'category_id' => 1,
                'name' => 'Inspecteurs généraux d\'État',
                'designation' => 'inspecteurs-generaux-etat',
                'description' => 'Le concours d\'inspecteurs généraux d\'État est un concours de recrutement de fonctionnaires de catégorie A, grade de 1er classe. Les inspecteurs généraux d\'État sont chargés de l\'inspection des services publics et de la lutte contre la corruption. Ils peuvent exercer leurs fonctions dans tous les ministères et institutions de l\'État.',
            ],
            [
                'category_id' => 1,
                'name' => 'Professeurs de l\'enseignement supérieur',
                'designation' => 'professeurs-enseignement-superieur',
                'description' => 'Le concours de professeurs de l\'enseignement supérieur est un concours de recrutement de fonctionnaires de catégorie A, grade de 1er classe. Les professeurs de l\'enseignement supérieur sont chargés de l\'enseignement et de la recherche dans les universités et les grandes écoles.',
            ],
            [
                'category_id' => 1,
                'name' => 'Ingénieurs en chef',
                'designation' => 'ingenieurs-chef',
                'description' => 'Le concours d\'ingénieurs en chef est un concours de recrutement de fonctionnaires de catégorie A, grade de 1er classe. Les ingénieurs en chef sont chargés de la conception, de la réalisation et de la maintenance des ouvrages et des infrastructures. Ils peuvent exercer leurs fonctions dans tous les ministères et institutions de l\'État.',
            ],
            [
                'category_id' => 1,
                'name' => 'Ingénieurs divisionnaires',
                'designation' => 'ingenieurs-divisionnaires',
                'description' => 'Le concours d\'ingénieurs divisionnaires est un concours de recrutement de fonctionnaires de catégorie A, grade de 2ème classe. Les ingénieurs divisionnaires sont chargés de la conception, de la réalisation et de la maintenance des ouvrages et des infrastructures. Ils peuvent exercer leurs fonctions dans tous les ministères et institutions de l\'État.',
            ],
            [
                'category_id' => 1,
                'name' => 'Assistants de secrétariat',
                'designation' => 'assistants-secretariat',
                'description' => 'Le concours d\'assistants de secrétariat est un concours de recrutement de fonctionnaires de catégorie B, grade de 2ème classe'
            ],
            [
                'category_id' => 1,
                'name' => 'Contrôleurs des douanes',
                'designation' => 'controleurs-douanes',
                'description' => 'Description du concours des contrôleurs des douanes',
            ],
            [
                'category_id' => 1,
                'name' => 'Contrôleurs de travail',
                'designation' => 'controleurs-travail',
                'description' => 'Description du concours des contrôleurs de travail',
            ],
            [
                'category_id' => 1,
                'name' => 'élèves-officiers de police',
                'designation' => 'élèves-officiers-police',
                'description' => 'Description du concours des élèves-officiers de police',
            ],
            [
                'category_id' => 1,
                'name' => 'élèves-sous-officiers de police',
                'designation' => 'élèves-sous-officiers-police',
                'description' => 'Description du concours des élèves-sous-officiers de police',
            ],
            [
                'category_id' => 1,
                'name' => 'Contrôleurs de travail',
                'designation' => 'controleurs-travail',
                'description' => 'Description du concours des contrôleurs de travail',
            ],
            [
                'category_id' => 1,
                'name' => 'Inspecteurs des impôts',
                'designation' => 'inspecteurs-des-impôts',
                'description' => 'Description du concours des inspecteurs des impôts',
            ],
            [
                'category_id' => 1,
                'name' => 'Inspecteurs des douanes',
                'designation' => 'inspecteurs-des-douanes',
                'description' => 'Description du concours des inspecteurs des douanes',
            ],
            [
                'category_id' => 1,
                'name' => 'Contrôleurs des impôts',
                'designation' => 'contrôleurs-impôts',
                'description' => 'Description du concours des contrôleurs des impôts',
            ],
            [
                'category_id' => 1,
                'name' => 'Assistants sociaux',
                'designation' => 'assistants-sociaux',
                'description' => 'Description du concours des assistants sociaux',
            ],
            [
                'category_id' => 1,
                'name' => 'conseillers d\'éducation',
                'designation' => 'conseillers-éducation',
                'description' => 'Description du concours des conseillers d\'éducation',
            ],
            [
                'category_id' => 1,
                'name' => 'Infirmiers',
                'designation' => 'contrôleurs-impôts',
                'description' => 'Description du concours des contrôleurs des impôts',
            ],
            [
                'category_id' => 1,
                'name' => 'Contrôleurs des impôts',
                'designation' => 'contrôleurs-impôts',
                'description' => 'Description du concours des contrôleurs des impôts',
            ],
        ];

        foreach ($subcategoriesData as $subcategory) {
            DB::table('subcategories')->insert([
                'category_id' => $subcategory['category_id'],
                'name' => $subcategory['name'],
                'designation' => $subcategory['designation'],
                'description' => $subcategory['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
