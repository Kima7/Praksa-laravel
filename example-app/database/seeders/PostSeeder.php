<?php

namespace Database\Seeders;

use App\Models\MyUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = MyUser::all();
        foreach($users as $user)
        {
            for ($i=0; $i < 20; $i++) { 
                DB::table('posts')->insert([
                   'title' => Str::random(10),
                   'content' => Str::random(100),
                   'my_user_id' => $user->id,
               ]);
            }
        }
    }
}
