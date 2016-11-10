<?php

use Illuminate\Database\Seeder;

use App\Day;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->delete();
        Day::create([
        	'name' => 'Monday',
        	'slug' => 'monday',
        ]);
        Day::create([
        	'name' => 'Tuesday',
        	'slug' => 'tuesday',
        ]);
        Day::create([
        	'name' => 'Wednesday',
        	'slug' => 'wednesday',
        ]);
        Day::create([
        	'name' => 'Thursday',
        	'slug' => 'thursday',
        ]);
        Day::create([
        	'name' => 'Friday',
        	'slug' => 'Friday',
        ]);
        Day::create([
        	'name' => 'Saturday',
        	'slug' => 'saturday',
        ]);
        Day::create([
        	'name' => 'Sunday',
        	'slug' => 'sunday',
        ]);     
    }
}
