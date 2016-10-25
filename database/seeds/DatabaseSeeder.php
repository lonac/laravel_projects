<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DaysTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ChurchesTableSeeder::class);
        $this->call(PhonesTableSeeder::class);
        $this->call(EmailsTableSeeder::class);
        $this->call(PeriodsTableSeeder::class);
    }
}
