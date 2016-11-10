<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('districts')->delete();
        factory(App\District::class, 26)->create();
    }
}
