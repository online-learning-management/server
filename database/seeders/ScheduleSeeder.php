<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert(
            [
                [
                    'class_id' => 'PHP1',
                    'schedule' => '[{"day":"0","lessons":["1","2","3"]},{"day":"3","lessons":["1","2","3"]}]',
                ],
                [
                    'class_id' => 'TA2',
                    'schedule' => '[{"4":"monday","lessons":["2","3"]},{"day":"6","lessons":["1","2"]}]',
                ]
            ]
        );
    }
}
