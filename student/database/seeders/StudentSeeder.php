<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
            DB::table('students')->insert([
                'name' => 'SIG.'.   (10),
                'email' => Str::random(10).'@yahoo.com',
                'phone' => rand(10000, 5000000),
                'password' => Hash::make('password'),
            ]);
            */

            \App\Models\Student::factory(2)->create();

    }
}
