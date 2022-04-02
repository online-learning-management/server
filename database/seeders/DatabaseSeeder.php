<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                RoleSeeder::class,
                UserSeeder::class,
                StudentSeeder::class,
                MajorSeeder::class,
                TeacherSeeder::class,
                CreditSeeder::class,
                SubjectSeeder::class,
                ClassSeeder::class,
                StudentClassSeeder::class,
                LessonSeeder::class,
                ScheduleSeeder::class,
            ]
        );
    }
}
