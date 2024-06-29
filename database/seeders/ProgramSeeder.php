<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('program')->insert([
            [
                'program_th' => 'วิทยาการคอมพิวเตอร์',
                'program_en' => 'Computer Science',
                'grad_year' => 4,
                'prg_fac_id' => 1,
            ],
            [
                'program_th' => 'วิศวกรรมไฟฟ้า',
                'program_en' => 'Electrical Engineering',
                'grad_year' => 4,
                'prg_fac_id' => 2,
            ],
            [
                'program_th' => 'แพทยศาสตร์',
                'program_en' => 'Medicine',
                'grad_year' => 6,
                'prg_fac_id' => 3,
            ],
            [
                'program_th' => 'เภสัชกรรม',
                'program_en' => 'Pharmacy',
                'grad_year' => 5,
                'prg_fac_id' => 3,
            ],
            [
                'program_th' => 'พยาบาลศาสตร์',
                'program_en' => 'Nursing',
                'grad_year' => 4,
                'prg_fac_id' => 3,
            ],
            [
                'program_th' => 'ทันตแพทยศาสตร์',
                'program_en' => 'Dentistry',
                'grad_year' => 6,
                'prg_fac_id' => 3,
            ],
            [
                'program_th' => 'สัตวแพทยศาสตร์',
                'program_en' => 'Veterinary Medicine',
                'grad_year' => 6,
                'prg_fac_id' => 4,
            ],
            [
                'program_th' => 'เกษตรศาสตร์',
                'program_en' => 'Agriculture',
                'grad_year' => 4,
                'prg_fac_id' => 5,
            ],
            [
                'program_th' => 'นิติศาสตร์',
                'program_en' => 'Law',
                'grad_year' => 4,
                'prg_fac_id' => 6,
            ],
            [
                'program_th' => 'บริหารธุรกิจ',
                'program_en' => 'Business Administration',
                'grad_year' => 4,
                'prg_fac_id' => 7,
            ],
        
        ]);
    }
}
