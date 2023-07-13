<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Occupation;

class OccupationTbaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $occupations = [
        ['title' =>"Agri-input supplier",],
        ['title' =>"Manufacturer",],
        ['title' =>"Researcher",]
    ];
    
    Occupation::insert($occupations);
    }
}
