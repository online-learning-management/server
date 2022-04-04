<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert(
            [
                [
                    'user_id' => 1,
                    'major_id' => 1,
                ],
                [
                    'user_id' => 2,
                    'major_id' => 2,
                ],
                [
                    'user_id' => 3,
                    'major_id' => 2,
                ],
                [
                    'user_id' => 4,
                    'major_id' => 1,
                ],
            ]
        );
    }
}
