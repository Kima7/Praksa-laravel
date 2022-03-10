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
                'name' => 'nikola',
                'nickname' => 'nik',
                'email' => 'nikola@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'stefan',
                'nickname' => 'stef',
                'email' => 'stefan@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'marko',
                'nickname' => 'maki',
                'email' => 'marko@gmail.com',
                'password' => Hash::make('password'),
            ]
          ];
          foreach($users as $user)
          {
            MyUser::create($user);
          }
    }
}
