<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(
            [
                [
                    'user_id' => 5,
                    'GPA' => 4,
                ],
                [
                    'user_id' => 6,
                    'GPA' => 4,
                ],
                [
                    'user_id' => 7,
                    'GPA' => 4,
                ],
                [
                    'user_id' => 8,
                    'GPA' => 4,
                ],
            ]
        );
    }
}
