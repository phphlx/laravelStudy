<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(\App\Models\User::class)->times(50)->make();
        \App\Models\User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = \App\Models\User::first();
        $user->password = bcrypt('secret');
        $user->email = 'phphlx@163.com';
        $user->name  = 'gaga';
        $user->is_admin = true;
        $user->save();
    }
}
