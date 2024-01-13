<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class CustomCountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('migrate:refresh', ['--path' => 'vendor/mledoze/countries/database/migrations']);
        Artisan::call('db:seed', ['--class' => 'Mledoze\Countries\Seeds\CountriesSeeder']);
    }
}
