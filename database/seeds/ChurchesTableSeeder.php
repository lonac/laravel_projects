<?php

use Illuminate\Database\Seeder;

use App\Church;

class ChurchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Church::truncate();
        factory(App\Church::class, 20)->create();
    }
}
