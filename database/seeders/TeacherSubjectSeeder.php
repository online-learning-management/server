<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teacher_subjects')->insert(
            [
                [
                    'user_id' => 1,
                    'subject_id' => 1,
                ],
                [
                    'user_id' => 1,
                    'subject_id' => 2,
                ],
            ]
        );
    }
}
