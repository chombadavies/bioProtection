<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ValueChain;

class ValuechainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $occupations = [
            ['title' =>"Maize Stored"],
            ['title' =>"French Beans"],
            ['title' =>"Runner Beans"],
            ['title' =>"Tomato"],
            ['title' =>"Potato"],
            ['title' =>"Mango"],
            ['title' =>"Mangetout"],
            ['title' =>"Pea"],
            ['title' =>"Snow Pea"],
            ['title' =>"Sugar snap pea"],
            ['title' =>"Avocado"],
            ['title' =>"Mango"]
        ];
        
        ValueChain::insert($occupations);
    }
}
