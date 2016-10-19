<?php

use Illuminate\Database\Seeder;

class ChurchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('churches')->delete();
        factory(App\Church::class, 20)->create();
    }
}
