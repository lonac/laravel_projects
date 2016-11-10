<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        Category::create([
           'name' => 'Protestant',
            'slug' => 'protestant'
        ]);
        Category::create([
            'name' => 'Catholic',
            'slug' => 'catholic'
        ]);
        Category::create([
            'name' => 'Eastern Orthodoxy',
            'slug' => 'eastern-orthodoxy'
        ]);
        Category::create([
            'name' => 'Adventism',
            'slug' => 'adventism'
        ]);
    }
}
