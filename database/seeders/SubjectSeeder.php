<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert(
            [
                [
                    'subject_name' => 'Tiếng anh công nghệ thông tin',
                    'specialty_id' => 1,
                    'credit_id' => 1,
                ],
                [
                    'subject_name' => 'Lập trình web bằng PHP',
                    'specialty_id' => 2,
                    'credit_id' => 1,
                ],
                [
                    'subject_name' => 'Tiếng anh công nghệ thông tin 2',
                    'specialty_id' => 1,
                    'credit_id' => 2,
                ]
            ]
        );
    }
}
