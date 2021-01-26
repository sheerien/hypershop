<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\SQLiteConnection;
use Illuminate\Support\Facades\DB;

class WorldTablesSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $this->call(WorldContinentsTableSeeder::class);
        $this->call(WorldContinentsLocaleTableSeeder::class);
        $this->call(WorldCountriesTableSeeder::class);
        $this->call(WorldCountriesLocaleTableSeeder::class);
        $this->call(WorldDivisionsTableSeeder::class);
        $this->call(WorldDivisionsLocaleTableSeeder::class);
        $this->call(WorldCitiesTableSeeder::class);
        $this->call(WorldCitiesLocaleTableSeeder::class);
    }
}
