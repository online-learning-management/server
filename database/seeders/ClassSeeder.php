<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert(
            [
                [
                    'class_id' => 'PHP1',
                    'start_date' => '2020-01-01',
                    'max_number_students' => 70,
                    'current_number_students' => 20,
                    'user_id' => 1,
                    'subject_id' => 1,
                    'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ",
                    'image' => 'https://files.fullstack.edu.vn/f8-prod/banners/Banner_03_youtube.png',
                    'schedules' => '[{"day":0,"lessons":[0,1,2,3]},{"day":1,"lessons":[0,1,2,3]}]'
                ],
                [
                    'class_id' => 'TA2',
                    'start_date' => '2020-01-01',
                    'max_number_students' => 70,
                    'current_number_students' => 20,
                    'user_id' => 2,
                    'subject_id' => 2,
                    'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ",
                    'image' => 'https://files.fullstack.edu.vn/f8-prod/banners/Banner_03_youtube.png',
                    'schedules' => '[{"day":0,"lessons":[0,1,2,3]},{"day":1,"lessons":[0,1,2,3]}]'
                ]
            ]
        );
    }
}
