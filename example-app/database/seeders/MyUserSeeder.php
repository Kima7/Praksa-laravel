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
        MyUser::truncate();

        $users =  [
            [
                'name' => 'Nikola',
                'nickname' => 'nik',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Stefan',
                'nickname' => 'stef',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Marko',
                'nickname' => 'maki',
                'password' => Hash::make('password'),
            ]
          ];
          foreach($users as $user)
          {
            MyUser::create($user);
          }
    }
}
