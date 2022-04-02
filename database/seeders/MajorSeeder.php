<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors')->insert(
            [
                [
                    'major_name' => 'Công nghệ thông tin',
                ],
                [
                    'major_name' => 'Kỹ thuật phần mềm',
                ]
            ]
        );
    }
}
