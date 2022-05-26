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
                    'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
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
                    'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                    'image' => 'https://files.fullstack.edu.vn/f8-prod/banners/Banner_03_youtube.png',
                    'schedules' => '[{"day":0,"lessons":[0,1,2,3]},{"day":1,"lessons":[0,1,2,3]}]'
                ]
            ]
        );
    }
}
