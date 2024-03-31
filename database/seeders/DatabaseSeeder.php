<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Airport;
use App\Models\ApplicationSettings;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        /* ----- Permission creation ----- */
        Permission::create(['name' => 'admin.*']);
        Permission::create(['name' => 'admin.access']);

        Permission::create(['name' => 'admin.settings.*']);
        Permission::create(['name' => 'admin.settings.access']);
        Permission::create(['name' => 'admin.settings.edit']);

        /* ----- User creation ----- */
        $kejax = User::create([
            'name' => 'Kejax',
            'email' => 'kejax@kejax.net',
            'password' => Hash::make('10#01#2005#kenneth')
        ]);
        $kejax->givePermissionTo('admin.*');

        /* ----- Settings creation ----- */
        ApplicationSettings::create(['name' => 'airlineName', 'value' => 'Your Airline']);

        /* ----- Airport Creation ----- */
        Airport::create(['icao_id' => 'EDDF', 'name' => 'Frankfurt/Main']);
        Airport::create(['icao_id' => 'EDDM', 'name' => 'München']);
        Airport::create(['icao_id' => 'EDDB', 'name' => 'Berlin']);
        Airport::create(['icao_id' => 'EDDH', 'name' => 'Hamburg']);
        Airport::create(['icao_id' => 'EDDW', 'name' => 'Bremen']);
        Airport::create(['icao_id' => 'LFPG', 'name' => 'Paris']);
        Airport::create(['icao_id' => 'KBOS', 'name' => 'Boston']);
        Airport::create(['icao_id' => 'KLAX', 'name' => 'Los Angeles']);
        Airport::create(['icao_id' => 'EGLL', 'name' => 'London Heathrow']);
    }
}
