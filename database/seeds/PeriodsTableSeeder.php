<?php

use Illuminate\Database\Seeder;

use App\Period;

use Carbon\Carbon;

class PeriodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periods')->delete();

        $period = new Period();
    	$period->church_id = App\Church::first()->id;
    	$period->title = 'Neno';
    	$period->slug = 'neno';
    	$period->description = 'Mahubiri ya neno la Mungu';
    	$period->start_time = Carbon::now();
    	$period->finish_time = Carbon::now();
    	$period->published = true;
    	$period->day_id = App\Day::first()->id;        

        $period->save();
    }
}
