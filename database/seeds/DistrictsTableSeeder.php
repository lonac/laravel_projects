<?php

use Illuminate\Database\Seeder;

use App\District;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	District::truncate();
        factory(App\District::class, 26)->create();
    }
}
