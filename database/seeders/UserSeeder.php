<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'full_name' => 'Tran Duc Ha',
                    'email' => 'tranducha@gmail.com',
                    'date_of_birth' => '1996-01-01',
                    'gender' => 'male',
                    'address' => 'Bac Ninh',
                    'avatar' => '',
                    'username' => 'tranducha',
                    'password' => '123',
                    'role_id' => 'r1',
                ],
                [
                    'full_name' => 'Do Van Hau',
                    'email' => 'tranducha1@gmail.com',
                    'date_of_birth' => '1996-01-01',
                    'gender' => 'male',
                    'address' => 'Bac Ninh',
                    'avatar' => '',
                    'username' => 'dovanhau',
                    'password' => '123',
                    'role_id' => 'r2',
                ],
                [
                    'full_name' => 'Hoang Tuan Hieu',
                    'email' => 'tranducha2@gmail.com',
                    'date_of_birth' => '1996-01-01',
                    'gender' => 'fe-male',
                    'address' => 'Bac Ninh',
                    'avatar' => '',
                    'username' => 'hoangtuanhieu',
                    'password' => '123',
                    'role_id' => 'r3',
                ]
            ]
        );
    }
}