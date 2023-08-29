# DATABASE SEEDER MIGRATIONS

- php artisan make:seeder UsersTableSeeder
- php artisan make:seeder CategoriesTableSeeder
- php artisan make:seeder SubcategoriesTableSeeder 

git add . && git commit -m "Commit "1.0.0" && git branch -M main && git push -u origin main

php artisan db:wipe && php artisan migrate && php artisan db:seed && cls && php artisan serve
