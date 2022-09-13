<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class timesTableSeeder extends Seeder
{

    static $times = [
        'ABC',
        'VITORIA',
        'FIGUEIRENSE',
        'PAYSANDU',
    ];

    public function run()
    {
        foreach (self::$times as $time) {
            DB::table('places')->insert([
                'name' => $time,
                'pontos' => 0,
            ]);
        }
    }
}
