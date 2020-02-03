<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = [
            [
               'name'=>'Faculty',
               'email'=>'faculty@f.f',
                'userType'=>'faculty',
               'password'=> bcrypt('ffffffff'),
            ],
            [
               'name'=>'User',
               'email'=>'user@u.u',
                'userType'=>'user',
               'password'=> bcrypt('uuuuuuuu'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
