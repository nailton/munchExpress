<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Database\Seeder;


class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory(5)->create();

        $categories->each(function ($category) {
            Menu::factory(3)->create([
                'category_id' => $category-> id,
            ]);
        });
    }
}
