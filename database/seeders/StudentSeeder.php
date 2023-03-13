<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<10;$i++){

            DB::table('students')->insert([
                'name' => "user-$i",
                'age' => rand(10,65),
                // 'password' => Hash::make('password'),
                
            ]);
        }
    }
}
