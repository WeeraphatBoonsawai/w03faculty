<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student')->insert([
            [
              'sid' => 1,
              'fname' => 'แฮร์รี่',
              'lname' => 'พอตเตอร์',
              'std_prg_id' => 1,
            ],
            [
              'sid' => 2,
              'fname' => 'รอน',
              'lname' => 'วีสลีย์',
              'std_prg_id' => 2,
            ],
            [
              'sid' => 3,
              'fname' => 'เฮอร์ไมโอนี่',
              'lname' => 'เกรนเจอร์',
              'std_prg_id' => 3,
            ],
            [
              'sid' => 4,
              'fname' => 'ดรากอ',
              'lname' => 'มัลฟอย',
              'std_prg_id' => 4,
            ],
            [
              'sid' => 5,
              'fname' => 'จินนี่',
              'lname' => 'วีสลีย์',
              'std_prg_id' => 3,
            ],
            [
              'sid' => 6,
              'fname' => 'เนวิลล์',
              'lname' => 'ลองบัตท่อม',
              'std_prg_id' => 2,
            ],
            [
              'sid' => 7,
              'fname' => 'ลูน่า',
              'lname' => 'เลิฟกู๊ด',
              'std_prg_id' => 4,
            ],
            [
              'sid' => 8,
              'fname' => 'เซเวอร์รัส',
              'lname' => 'สเนป',
              'std_prg_id' => 5,
            ],
            [
              'sid' => 9,
              'fname' => 'มิเนอร์ว่า',
              'lname' => 'มักกอนนากัล',
              'std_prg_id' => 6,
            ],
            [
              'sid' => 10,
              'fname' => 'อัลบัส',
              'lname' => 'ดัมเบิลดอร์',
              'std_prg_id' => 7,
            ],
          ]);
    }
}
