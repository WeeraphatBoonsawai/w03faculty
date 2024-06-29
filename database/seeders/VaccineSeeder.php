<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vaccine')->insert([
            [ 'vaccine' => 'AstraZeneca',],
            [ 'vaccine' => 'Pfizer',],
            [ 'vaccine' => 'Sinovac',],
            [ 'vaccine' => 'Las Plagas',],
        ]);
    }
}
