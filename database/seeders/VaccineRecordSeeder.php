<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaccineRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vaccine_record')->insert([
            [
                'std_id' => 1,
                'vac_id' => 1,
                'vaccined_date' => '2023-12-24',
            ],
            [
                'std_id' => 1,
                'vac_id' => 2,
                'vaccined_date' => '2024-01-15',
            ],
            [
                'std_id' => 1,
                'vac_id' => 3,
                'vaccined_date' => '2023-11-10',
            ],
            [
                'std_id' => 1,
                'vac_id' => 4,
                'vaccined_date' => '2024-02-01',
            ],
        ]);
    }
}
