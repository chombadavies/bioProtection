<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pest;

class PestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pests = [
            ['title' =>"American Cotton Bollworm",'valuechain_id' =>1],
            ['title' =>"Bollworm",'valuechain_id' =>1],
            ['title' =>"Caterpillar",'valuechain_id' =>1],
            ['title' =>"Bollworm",'valuechain_id' =>1],
            ['title' =>"Looper",'valuechain_id' =>1],
            ['title' =>"Chicken pea borer",'valuechain_id' =>1],
            ['title' =>"Diamondback moth",'valuechain_id' =>1],
            ['title' =>"Giant Looper",'valuechain_id' =>1],
            ['title' =>"witch weed",'valuechain_id' =>1]
        ];
        
        Pest::insert($pests);
    }
}
