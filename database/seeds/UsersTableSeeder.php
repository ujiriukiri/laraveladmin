<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        $users = [
            ['Admin Admin', 'admin@example.com', 'admin']
        ];

        foreach($users as $user){
            $u = User::create([
                'name' => $user[0],
                'email' => $user[1],
                'username' => $user[2],
                'uuid' => Str::uuid(),
                'password' => bcrypt('password'),
            ]);
        }
    }
}
