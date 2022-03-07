<?php

namespace Database\Seeders;

use App\Models\MyUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class MyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_users')->insert([
            'name' => 'nikola',
            'nickname' => 'nik',
            'password' => Hash::make('password'),
        ]);
    }
}
