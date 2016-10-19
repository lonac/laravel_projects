<?php

use Illuminate\Database\Seeder;

use App\Region;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Region::truncate();
        factory(App\Region::class, 26)->create();
    }
}
