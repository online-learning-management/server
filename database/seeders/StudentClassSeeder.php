<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_classes')->insert(
            [
                [
                    'class_id' => 'PHP1',
                    'user_id' => 6,
                    'score' => 9.5,
                ],
                [
                    'class_id' => 'TA2',
                    'user_id' => 6,
                    'score' => 9.5,
                ]
            ]
        );
    }
}
