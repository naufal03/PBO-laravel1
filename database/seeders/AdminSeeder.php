<?php

namespace Database\Seeders;

use App\Http\Controllers\ProductController;
use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data dummy user
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@seeder.com',
                'email_verified_at' => now(),
                'level' => 'admin',
                'password' => bcrypt('passwordadmin')
            ],
            [
                'name' => 'kasir',
                'email' => 'kasir@seeder.com',
                'email_verified_at' => now(),
                'level' => 'kasir',
                'password' => bcrypt('passwordkasir')
            ],
        ];
        $categories = [
            [
                'name_category' => 'jacket',
            ],
            [
                'name_category' => 'baju',
            ],
            [
                'name_category' => 'baju muslim',
            ],
        ];
        $products =[
            [
                'name_product' => 'baju muslim merek x',
                'description' => 'anyar',
                'stock' => 12,
                'price' => 3000,
                'category_id' => 2,

            ],
            [
                'name_product' => 'jacket muslim merek x',
                'description' => 'anyar',
                'stock' => 12,
                'price' => 3000,
                'category_id' => 3,

            ],
            [
                'name_product' => 'baju muslim x',
                'description' => 'anyar',
                'stock' => 12,
                'price' => 3000,
                'category_id' => 1,

            ],
        ];


        foreach ($categories as $category) {
            Category::create($category);
        }

        foreach ($products as $product){
            Product::create($product);
        }

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
