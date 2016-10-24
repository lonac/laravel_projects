<?php

use App\Church;
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

        $churches = Church::all();

        for ($i = 1; $i <= 7; $i++) {
            foreach ($churches as $church) {
                $period = new Period();
                $period->church_id = $church->id;
                $period->title = 'Neno ' . $i;
                $period->slug = 'neno-' . $i;
                $period->description = 'Mahubiri ya neno la Mungu ' . $i;
                $period->start_time = Carbon::now();
                $period->finish_time = Carbon::tomorrow();
                $period->published = true;
                $period->day_id = $i;
                $period->save();
            }
        }

    }
}
