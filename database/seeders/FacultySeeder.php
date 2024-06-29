<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faculty')->insert([
            [
                'faculty_th' => 'วิทยาศาสตร์',
                'faculty_en' => 'Science',
            ],
            [
                'faculty_th' => 'วิศวกรรมศาสตร์',
                'faculty_en' => 'Engineering',
            ],
            [
                'faculty_th' => 'แพทยศาสตร์',
                'faculty_en' => 'Medicine',
            ],
            [
                'faculty_th' => 'เภสัชศาสตร์',
                'faculty_en' => 'Pharmacy',
            ],
            [
                'faculty_th' => 'พยาบาลศาสตร์',
                'faculty_en' => 'Nursing',
            ],
            [
                'faculty_th' => 'ทันตแพทยศาสตร์',
                'faculty_en' => 'Dentistry',
            ],
            [
                'faculty_th' => 'สัตวแพทยศาสตร์',
                'faculty_en' => 'Veterinary Medicine',
            ],
            [
                'faculty_th' => 'เกษตรศาสตร์',
                'faculty_en' => 'Agriculture',
            ],
            [
                'faculty_th' => 'อักษรศาสตร์',
                'faculty_en' => 'Arts',
            ],
            [
                'faculty_th' => 'นิติศาสตร์',
                'faculty_en' => 'Law',
            ],
            [
                'faculty_th' => 'บริหารธุรกิจ',
                'faculty_en' => 'Business Administration',
            ],
            [
                'faculty_th' => 'บัญชี',
                'faculty_en' => 'Accounting',
            ],
            [
                'faculty_th' => 'เศรษฐศาสตร์',
                'faculty_en' => 'Economics',
            ],
            [
                'faculty_th' => 'นิเทศศาสตร์',
                'faculty_en' => 'Communication Arts',
            ],
            [
                'faculty_th' => 'ครุศาสตร์',
                'faculty_en' => 'Education',
            ],
            [
                'faculty_th' => 'สถาปัตยกรรมศาสตร์',
                'faculty_en' => 'Architecture',
            ],
            [
                'faculty_th' => 'วิทยาศาสตร์การกีฬา',
                'faculty_en' => 'Sport Science',
            ],
            [
                'faculty_th' => 'คหกรรมศาสตร์',
                'faculty_en' => 'Home Economics',
            ],
            [
                'faculty_th' => 'ศิลปกรรมศาสตร์',
                'faculty_en' => 'Fine Arts',
            ],
        
        ]);
    }
}
